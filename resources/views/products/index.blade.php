@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <div class="row mt-4">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4 shadow-lg border-0 card-hover my-3">
                    <img src="{{ $product->image_url }}" class="card-img-top product-img " alt="{{ $product->title }}">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $product->title }}</strong></h5>
                        <p class="card-text"><strong>Condition:</strong> {{ $product->condition }}</p>
                        <!-- <p><strong>Category:</strong> {{ $product->category->name }}</p> -->
                        <p><strong>Brand:</strong> {{ $product->brand }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary"><i class="bi bi-ticket-detailed mx-2"></i>Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
