<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('checkout.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $total = $cartItems->sum(function ($item) {
            return $item->product->resale_price * $item->quantity;
        });

        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Create the order
        $order = Order::create([
            'user_id' => $user->id,
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_address' => $request->address,
            'total' => $total,
            'status' => 'pending',
        ]);

        // Create order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->resale_price,
            ]);
        }

        // Clear the cart
        $cartItems->each->delete();

        return redirect()->route('orders.show', $order->id)->with('success', 'Order placed successfully.');
    }
}