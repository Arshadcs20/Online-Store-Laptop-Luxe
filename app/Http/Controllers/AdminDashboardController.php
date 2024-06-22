<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $orders = Order::with('orderItems.product')->get();
        return view('admin.dashboard', compact('products', 'orders'));
    }

    public function showProductForm()
    {
        return view('admin.product-form');
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'image_url' => 'required|string|max:255',
            'description' => 'required|string',
            'original_price' => 'required|numeric',
            'resale_price' => 'required|numeric',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'purchase_year' => 'required|integer',
            'seller_name' => 'required|string|max:255',
        ]);

        Product::create($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Product created successfully!');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product-form', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'image_url' => 'required|string|max:255',
            'description' => 'required|string',
            'original_price' => 'required|numeric',
            'resale_price' => 'required|numeric',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'purchase_year' => 'required|integer',
            'seller_name' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
    }

    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
    }

    public function showOrder($id)
    {
        $order = Order::with('orderItems.product')->findOrFail($id);
        return view('admin.order-show', compact('order'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $validated = $request->validate(['status' => 'required|string']);
        $order = Order::findOrFail($id);
        $order->update($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Order status updated successfully!');
    }
}
