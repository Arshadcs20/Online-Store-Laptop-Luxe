@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="original_price">Original Price</label>
            <input type="number" step="0.01" class="form-control" id="original_price" name="original_price" required>
        </div>
        <div class="form-group">
            <label for="resale_price">Resale Price</label>
            <input type="number" step="0.01" class="form-control" id="resale_price" name="resale_price" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>
        <div class="form-group">
            <label for="condition">Condition</label>
            <input type="text" class="form-control" id="condition" name="condition" required>
        </div>
        <div class="form-group">
            <label for="purchase_year">Purchase Year</label>
            <input type="number" class="form-control" id="purchase_year" name="purchase_year" required>
        </div>
        <div class="form-group">
            <label for="seller_name">Seller Name</label>
            <input type="text" class="form-control" id="seller_name" name="seller_name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
