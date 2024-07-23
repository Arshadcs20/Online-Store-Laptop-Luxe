@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Total: ${{ $order->total }}</p>
    <h3>Order Items</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product->title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection