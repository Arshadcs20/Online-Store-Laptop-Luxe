@extends('layouts.app')

@section('content')
    <h1>Your Orders</h1>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Total Price</th>
            <th>Status</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>${{ $order->total_price }}</td>
                <td>{{ $order->status }}</td>
            </tr>
        @endforeach
    </table>
@endsection
