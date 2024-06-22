<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image_url' => 'required|url',
            'description' => 'required|string',
            'original_price' => 'required|numeric',
            'resale_price' => 'required|numeric',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'purchase_year' => 'required|integer',
            'seller_name' => 'required|string|max:255',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Display the specified product
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    // Update the specified product in storage
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image_url' => 'required|url',
            'description' => 'required|string',
            'original_price' => 'required|numeric',
            'resale_price' => 'required|numeric',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'purchase_year' => 'required|integer',
            'seller_name' => 'required|string|max:255',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
