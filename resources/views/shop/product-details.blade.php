@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container">
    <h2>{{ $product->name }}</h2>
    <p>Price: ${{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <p>{{ $product->description }}</p>
    @if($product->image)
    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid">
    @endif
</div>
@endsection
