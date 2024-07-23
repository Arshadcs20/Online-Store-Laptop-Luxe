<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        // Validate customer and cart information
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'cart' => 'required|array',
            'cart.*.product_id' => 'required|exists:products,id',
            'cart.*.quantity' => 'required|integer|min:1'
        ]);

        // Calculate total order price
        $total = 0;
        foreach ($request->cart as $cartItem) {
            $product = Product::find($cartItem['product_id']);
            $total += $product->resale_price * $cartItem['quantity'];
        }

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
        foreach ($request->cart as $cartItem) {
            $product = Product::find($cartItem['product_id']);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $cartItem['quantity'],
                'price' => $product->resale_price,
            ]);
        }

        // Attempt to send confirmation email
        try {
            Mail::to($request->email)->send(new OrderConfirmation($order));
            $emailSent = true;
        } catch (\Exception $e) {
            $emailSent = false;
        }

        // Flash message based on email sending status
        $message = $emailSent ? 'Order placed successfully. A confirmation email has been sent.' : 'Order placed successfully,
but we could not send a confirmation email.';

        return redirect()->route('orders.show', $order->id)->with('success', $message);
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}