@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Products</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ url('/products/' . $product->id) }}">
                    {{ $product->name }} - ${{ $product->price }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
