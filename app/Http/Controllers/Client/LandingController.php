<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Land;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function land()
    {
        $categories = Category::inRandomOrder()->limit(3)->get();
        $products = Product::inRandomOrder()->limit(4)->get(); 
        $lands = Land::all();

        return view('client.layout.landing.app', compact('categories', 'products', 'lands'));
    }

    public function allProducts()
    {
        $products = Product::with('category')->paginate(12); 
        return view('client.layout.shop.app', compact('products'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id); 
        $relatedProducts = Product::where('category_id', $product->category_id) 
        ->where('id', '!=', $id)    
        ->limit(5)  
        ->get();

        return view('client.layout.details.app', compact('product', 'relatedProducts'));
    }

    public function about()
    {
        return view('client.layout.about.app');
    }

    public function contact()
    {
        return view('client.layout.contact.app');
    }

    public function checkout(){
        return view('client.layout.checkout.app');
    }
}
