<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function productInfo()
    {
        return view('products.generateInfo');
    }

    public function generateProductAndImage($categoryId, $keys)
    {
        $category = Category::findOrFail($categoryId);
        $apiKeyGemini = env('GEMINI_KEY');
        $apiKeyHuggingFace = env('HUGGIN_FACE');

        $model = "gemini-1.5-pro"; 
         $apiUrl = "https://generativelanguage.googleapis.com/v1/models/$model:generateContent?key=$apiKeyGemini";
        $keywords = explode(',', $keys);
        $prompt = "Generate a product in the '{$category->name}' category using keywords: " . implode(', ', $keywords) . ".\n
           Provide a JSON response with the following fields:name (string), sous_title (string, optional), description (text), price (numeric, random but reasonable), color (array of strings with values: black, blue, grey, green, red, white), size (array of strings with values: xl, l, m, s) (random but reasonable).
            Strictly return only JSON without Markdown formatting or extra text.";


        $response = Http::withoutVerifying()->post($apiUrl, [
                    'contents' => [
                        ['role' => 'user', 'parts' => [['text' => $prompt]]]
                    ],
                ]);
    
        $data = $response->json();
        

        $rawResponse = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;
      
        $cleanResponse = preg_replace('/^```json\s*|\s*```$/m', '', trim($rawResponse));
       
        $jsonResponse = json_decode($cleanResponse, true);
        
        
        $imagePrompt = "A high-quality realistic image of a product named '{$jsonResponse['name']}' in the category '{$category->name}'.";
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKeyHuggingFace,
            'Content-Type' => 'application/json',
        ])->withOptions([
            'verify' => false,  
        ])->post('https://api-inference.huggingface.co/models/stabilityai/stable-diffusion-2', [
            'inputs' => $imagePrompt,
            'wait_for_model' => true,
        ]);
        $imageData = $response->body();
        
        $filename = 'products/' . uniqid() . '.png';
        Storage::disk('public')->put($filename, $imageData);
        session(['filename' => $filename]); 
        return view('products.generateInfo', compact('jsonResponse','category','filename'));


    }

    // app/Http/Controllers/OpenAIController.php
    public function generateProductBack()
    {
        // Delete the image file if it exists
        $filename = session('filename'); // Assuming the filename was stored in the session
        if ($filename && Storage::disk('public')->exists($filename)) {
            Storage::disk('public')->delete($filename);
        }
        return redirect()->route('openai.formprompt')->with('success', 'Suprimme Image generate success');
    }

    // Store the product in the database
    public function storeProduct(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'sous_title' => 'nullable|string|max:255',
            'category' => 'required|integer|exists:categories,id', // Ensure category is an integer and exists
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'color' => 'required|array', // Ensure color is an array
            'color.*' => 'in:black,blue,grey,green,red,white', // Validate each color in the list
            'size' => 'required|array', // Ensure size is an array
            'size.*' => 'in:xl,l,m,s', // Validate each size in the list
            'image' => 'required|string', // Assuming image is a URL or file path
        ]);

        // Save the product in the database
        $product = Product::create([
            'title' => $validated['title'],
            'sous_title' => $validated['sous_title'], // Save sous_title
            'description' => $validated['description'],
            'price' => $validated['price'],
            'color' => json_encode($validated['color']), // Store colors as JSON
            'size' => json_encode($validated['size']), // Store sizes as JSON
            'category_id' => $validated['category'],
            'image' => $validated['image'], 
        ]);

        // Redirect back with success message
        return redirect()->route('products.index')->with('success', 'Product saved successfully!');
    }



    // Show the form to generate a product
    public function showForm()
    {
        $categories = Category::all();
        return view('products.generate', compact('categories'));
    }

    



}
