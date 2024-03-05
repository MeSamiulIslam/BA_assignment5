<!-- resources/views/products/show.blade.php -->

@extends('layout')

@section('title', 'Product Details')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
