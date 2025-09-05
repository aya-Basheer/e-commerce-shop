@extends('layouts.app')

@section('title', 'All Products')

@section('content')
<div class="container">
    <h2>All Products</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add New Product</a>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">${{ $product->price }}</p>
                    <a href="{{ url('/products/'.$product->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
