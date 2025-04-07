<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sous_title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'color' => 'required|array', // Expecting an array
            'size' => 'required|array',  // Expecting an array
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $data = $request->all();
        $data['color'] = json_encode($request->color); // Convert array to JSON
        $data['size'] = json_encode($request->size);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
    
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'sous_title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'color' => 'required|array',
            'size' => 'required|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $data = $request->all();
        $data['color'] = json_encode($request->color);
        $data['size'] = json_encode($request->size);
    
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image);
            $data['image'] = $request->file('image')->store('products', 'public');
        }
    
        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    

    public function destroy(Product $product)
    {
        Storage::delete('public/' . $product->image);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}