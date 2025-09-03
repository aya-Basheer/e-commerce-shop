{{-- resources/views/shop.blade.php --}}
@extends('layouts.app')

@section('title', 'shop')

@section('content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">
                {{-- يمكن إضافة محتوى إضافي هنا --}}
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Products Section -->
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

            @php
                $products = [
                    ['img' => 'product-3.png', 'title' => 'Nordic Chair', 'price' => '$50.00'],
                    ['img' => 'product-1.png', 'title' => 'Nordic Chair', 'price' => '$50.00'],
                    ['img' => 'product-2.png', 'title' => 'Kruzo Aero Chair', 'price' => '$78.00'],
                    ['img' => 'product-3.png', 'title' => 'Ergonomic Chair', 'price' => '$43.00'],
                    ['img' => 'product-3.png', 'title' => 'Nordic Chair', 'price' => '$50.00'],
                    ['img' => 'product-1.png', 'title' => 'Nordic Chair', 'price' => '$50.00'],
                    ['img' => 'product-2.png', 'title' => 'Kruzo Aero Chair', 'price' => '$78.00'],
                    ['img' => 'product-3.png', 'title' => 'Ergonomic Chair', 'price' => '$43.00'],
                ];
            @endphp

            @foreach($products as $product)
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{ asset('images/' . $product['img']) }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{ $product['title'] }}</h3>
                        <strong class="product-price">{{ $product['price'] }}</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Products Section -->

@endsection
