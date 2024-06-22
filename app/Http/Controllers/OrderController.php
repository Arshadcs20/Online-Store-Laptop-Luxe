<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $user = Auth::user();

        $order = Order::create([
            'user_id' => $user->id,
            'total' => $product->resale_price,
            'status' => 'pending',
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->resale_price,
        ]);

        return redirect()->route('orders.show', $order->id)->with('success', 'Product booked successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}
