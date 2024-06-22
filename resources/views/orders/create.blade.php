@extends('layouts.app')

@section('content')
    <h1>Checkout</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->product->title }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ $item->product->resale_price }}</td>
                <td>${{ $item->product->resale_price * $item->quantity }}</td>
            </tr>
        @endforeachs
    </table>
    <h3>Total Price: ${{ $totalPrice }}</h3>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <button type="submit">Place Order</button>
    </form>
@endsection
