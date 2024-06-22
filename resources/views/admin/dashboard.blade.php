@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Products</h2>
    <a href="{{ route('admin.product.create') }}" class="btn btn-success mb-3">Add New Product</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->resale_price }}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Orders</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Total</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.order.show', $order->id) }}" class="btn btn-primary">View</a>
                        <form action="{{ route('admin.order.update', $order->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('PATCH')
                            <select name="status" onchange="this.form.submit()">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
