@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout</h1>
    @if($cartItems->isEmpty())
        <p>Your cart is empty.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->product->title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rs: {{ $item->product->resale_price }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2" class="text-right"><strong>Total:</strong></td>
                    <td>Rs: {{ $cartItems->sum(function ($item) {
        return $item->product->resale_price * $item->quantity; }) }}</td>
                </tr>
            </tbody>
        </table>
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Place Order</button>
        </form>
    @endif
</div>
@endsection
