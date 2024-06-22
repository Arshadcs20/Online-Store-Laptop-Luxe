@extends('adminlte::page')

@section('title', isset($product) ? 'Edit Product' : 'Add Product')

@section('content_header')
    <h1>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h1>
@stop

@section('content')
    <form action="{{ isset($product) ? route('admin.product.update', $product->id) : route('admin.product.store') }}" method="POST">
        @csrf
        @if(isset($product))
            @method('PATCH')
        @endif
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $product->title ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category ID</label>
            <input type="number" name="category_id" class="form-control" id="category_id" value="{{ old('category_id', $product->category_id ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="text" name="image_url" class="form-control" id="image_url" value="{{ old('image_url', $product->image_url ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required>{{ old('description', $product->description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="original_price">Original Price</label>
            <input type="number" name="original_price" class="form-control" id="original_price" value="{{ old('original_price', $product->original_price ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="resale_price">Resale Price</label>
            <input type="number" name="resale_price" class="form-control" id="resale_price" value="{{ old('resale_price', $product->resale_price ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" value="{{ old('brand', $product->brand ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" value="{{ old('model', $product->model ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="condition">Condition</label>
            <input type="text" name="condition" class="form-control" id="condition" value="{{ old('condition', $product->condition ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="purchase_year">Purchase Year</label>
            <input type="number" name="purchase_year" class="form-control" id="purchase_year" value="{{ old('purchase_year', $product->purchase_year ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="seller_name">Seller Name</label>
            <input type="text" name="seller_name" class="form-control" id="seller_name" value="{{ old('seller_name', $product->seller_name ?? '') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update Product' : 'Add Product' }}</button>
    </form>
@stop
