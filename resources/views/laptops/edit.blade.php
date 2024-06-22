@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Laptop</h1>
    <form action="{{ route('laptops.update', $laptop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" value="{{ $laptop->brand }}" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" value="{{ $laptop->model }}" required>
        </div>
        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" name="processor" class="form-control" id="processor" value="{{ $laptop->processor }}" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM (GB)</label>
            <input type="number" name="ram" class="form-control" id="ram" value="{{ $laptop->ram }}" required>
        </div>
        <div class="form-group">
            <label for="storage">Storage (GB)</label>
            <input type="number" name="storage" class="form-control" id="storage" value="{{ $laptop->storage }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $laptop->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
