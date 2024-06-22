@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Laptop</h1>
    <form action="{{ route('laptops.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" required>
        </div>
        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" name="processor" class="form-control" id="processor" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM (GB)</label>
            <input type="number" name="ram" class="form-control" id="ram" required>
        </div>
        <div class="form-group">
            <label for="storage">Storage (GB)</label>
            <input type="number" name="storage" class="form-control" id="storage" required>
        </div>
        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" name="price" class="form-control" id="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
