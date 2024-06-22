@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laptop Details</h1>
    <div class="card">
        <div class="card-header">{{ $laptop->brand }} - {{ $laptop->model }}</div>
        <div class="card-body">
            <p><strong>Processor:</strong> {{ $laptop->processor }}</p>
            <p><strong>RAM:</strong> {{ $laptop->ram }} GB</p>
            <p><strong>Storage:</strong> {{ $laptop->storage }} GB</p>
            <p><strong>Price:</strong> ${{ $laptop->price }}</p>
            <a href="{{ route('laptops.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
