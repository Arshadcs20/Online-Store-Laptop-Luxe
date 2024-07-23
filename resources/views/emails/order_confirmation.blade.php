<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation</title>
</head>

<body>
    <h1>Order Confirmation</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Total: ${{ $order->total }}</p>
    <p>Customer Name: {{ $order->customer_name }}</p>
    <p>Customer Email: {{ $order->customer_email }}</p>
    <p>Customer Address: {{ $order->customer_address }}</p>
    <h3>Order Items</h3>
    <ul>
        @foreach($order->orderItems as $item)
            <li>{{ $item->product->title }} - Quantity: {{ $item->quantity }} - Price: ${{ $item->price }}</li>
        @endforeach
    </ul>
</body>

</html>