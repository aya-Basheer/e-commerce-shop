@extends('layouts.app')

@section('title', 'All Products')

@section('content')
<div class="container">
   

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
                    <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">
        Delete
    </button>
</form>


                </div>
            </div>
            
        </div>
        @endforeach
    </div>
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add New Product</a>
</div>
@endsection
