@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Modern Interior <span class="d-block">Design Studio</span></h1>
          <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. 
            Aliquam vulputate velit imperdiet dolor tempor tristique.
          </p>
          <p>
            <a href="{{ url('/shop') }}" class="btn btn-secondary me-2">Shop Now</a>
            <a href="#" class="btn btn-white-outline">Explore</a>
          </p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-img-wrap">
          <img src="{{ asset('images/couch.png') }}" class="img-fluid" alt="Couch">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
  <div class="container">
    <div class="row">

      <!-- Column 1 -->
      <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
        <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. 
          Aliquam vulputate velit imperdiet dolor tempor tristique. 
        </p>
        <p><a href="{{ url('/shop') }}" class="btn">Explore</a></p>
      </div>

      <!-- Product 1 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="{{ url('/cart') }}">
          <img src="{{ asset('images/product-1.png') }}" class="img-fluid product-thumbnail" alt="Nordic Chair">
          <h3 class="product-title">Nordic Chair</h3>
          <strong class="product-price">$50.00</strong>
          <span class="icon-cross">
            <img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="Add">
          </span>
        </a>
      </div>

      <!-- Product 2 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="{{ url('/cart') }}">
          <img src="{{ asset('images/product-2.png') }}" class="img-fluid product-thumbnail" alt="Kruzo Aero Chair">
          <h3 class="product-title">Kruzo Aero Chair</h3>
          <strong class="product-price">$78.00</strong>
          <span class="icon-cross">
            <img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="Add">
          </span>
        </a>
      </div>

      <!-- Product 3 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="{{ url('/cart') }}">
          <img src="{{ asset('images/product-3.png') }}" class="img-fluid product-thumbnail" alt="Ergonomic Chair">
          <h3 class="product-title">Ergonomic Chair</h3>
          <strong class="product-price">$43.00</strong>
          <span class="icon-cross">
            <img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="Add">
          </span>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- End Product Section -->

<!-- باقي الأقسام (Why Choose Us, We Help, Popular Products, Testimonials, Blog Section) -->
{{-- انسخ نفس المحتوى اللي بالـ HTML الأصلي وحول الصور والروابط إلى asset() و url() زي فوق --}}

@endsection
