<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('client.layout.checkout.app');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_address' => 'required|string|max:255',
            'client_phone' => 'required|string|max:15',
            'cart_data' => 'required|json', // Validate that cart data is JSON
        ]);

        $cart = json_decode($request->cart_data, true);

        foreach ($cart as $item) {
            $product = Product::find($item['id']);
            if (!$product) {
                return redirect()->back()->with('error', 'Invalid product in cart.');
            }

            Order::create([
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'total_price' => $product->price * $item['quantity'],
                'is_delivered' => false,
                'client_name' => $request->client_name,
                'client_address' => $request->client_address,
                'client_phone' => $request->client_phone,
            ]);
        }

        return redirect()->route('allProducts')->with('success', 'Order placed successfully!');
    }

}
