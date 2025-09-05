@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <p>Status: {{ $product->on_sale ? 'On Sale' : 'Regular' }}</p>

    <a href="{{ url('/products') }}">Back to Products</a>
</div>
@endsection
