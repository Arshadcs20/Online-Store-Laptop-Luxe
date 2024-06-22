@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <hr> <br>
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img class="img-fluid rounded shadow-lg image-hover" style="height: 500px" alt="{{ $product->title }}" src="{{ $product->image_url }}">
        </div>
        <div class="col-lg-6">
            <h2 class="display-5 font-weight-bold">{{ $product->title }}</h2>
            <small class="text-muted">Posted on {{ $product->created_at->diffForHumans() }}, {{ $product->location }}</small>
            <hr>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <p class="font-weight-bold text-success h4"><strong>Rs: {{ $product->resale_price }}</strong> <del class="text-muted small">(Rs: {{ $product->original_price }})</del></p>
                    <p>For sale by <span class="font-weight-bold">{{ $product->seller_name }}</span></p>
                </div>
            </div>
            <ul class="list-unstyled">
                <li class="d-flex justify-content-between py-2 border-bottom"><span><strong>Condition:</strong></span><span>{{ $product->condition }}</span></li>
                <li class="d-flex justify-content-between py-2 border-bottom"><span><strong>Brand:</strong></span><span>{{ $product->brand }}</span></li>
                <li class="d-flex justify-content-between py-2 border-bottom"><span><strong>Model:</strong></span><span>{{ $product->model }}</span></li>
                <li class="d-flex justify-content-between py-2 border-bottom"><span><strong>Purchase Year:</strong></span><span>{{ $product->purchase_year }}</span></li>
                <li class="d-flex justify-content-between py-2 border-bottom"><span><strong>Original Price:</strong></span><span>Rs. {{ $product->original_price }}</span></li>
                <li class="d-flex justify-content-between py-2 border-bottom"><span><strong>Resale Price:</strong></span><span>Rs. {{ $product->resale_price }}</span></li>
            </ul>
            <div>
                <h5 class="font-weight-bold"><strong>Description:</strong></h5>
                <p>{{ $product->description }}</p>
            </div>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success text-uppercase w-100 mt-4"><i class="bi bi-cart-plus mx-2"></i>Add to Cart</button>
            </form>
        </div>
    </div>
    <br> <hr>
</div>
@endsection
