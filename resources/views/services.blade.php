@extends('layouts.app')

@section('content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Our Services</h1>
                    <p class="mb-4">We provide top-notch furniture solutions, combining style and functionality. From ergonomic chairs to elegant home décor, we have it all.</p>
                    <p>
                        <a href="#" class="btn btn-secondary me-2">Shop Now</a>
                        <a href="#" class="btn btn-white-outline">Explore</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{ asset('images/couch.png') }}" class="img-fluid" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section py-5">
    <div class="container">
        <div class="row text-center">
            @php
                $features = [
                    ['icon'=>'truck.svg', 'title'=>'Fast & Free Shipping', 'desc'=>'Quick and reliable shipping for all orders.'],
                    ['icon'=>'bag.svg', 'title'=>'Easy to Shop', 'desc'=>'Seamless online shopping experience.'],
                    ['icon'=>'support.svg', 'title'=>'24/7 Support', 'desc'=>'Our team is available anytime to assist you.'],
                    ['icon'=>'return.svg', 'title'=>'Hassle Free Returns', 'desc'=>'Simple returns for your convenience.'],
                ];
            @endphp

            @foreach($features as $feature)
            <div class="col-6 col-md-3 mb-4">
                <div class="feature p-3 border rounded">
                    <div class="icon mb-3">
                        <img src="{{ asset('images/'.$feature['icon']) }}" class="img-fluid" alt="{{ $feature['title'] }}">
                    </div>
                    <h5>{{ $feature['title'] }}</h5>
                    <p class="mb-0">{{ $feature['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Featured Products Section -->
<div class="product-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Our Featured Products</h2>
                <p class="mb-4">Check out our exclusive range of products, crafted with excellent materials for your comfort and style.</p>
                <p><a href="#" class="btn btn-primary">Explore</a></p>
            </div>

            @php
                $products = [
                    ['img'=>'product-1.png','title'=>'Nordic Chair','price'=>'$50.00'],
                    ['img'=>'product-2.png','title'=>'Kruzo Aero Chair','price'=>'$78.00'],
                    ['img'=>'product-3.png','title'=>'Ergonomic Chair','price'=>'$43.00'],
                ];
            @endphp

            @foreach($products as $product)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item d-block text-center" href="#">
                    <img src="{{ asset('images/'.$product['img']) }}" class="img-fluid product-thumbnail mb-3" alt="{{ $product['title'] }}">
                    <h5 class="product-title">{{ $product['title'] }}</h5>
                    <strong class="product-price">{{ $product['price'] }}</strong>
                    <span class="icon-cross d-block mt-2">
                        <img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="Remove">
                    </span>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Featured Products Section -->

<!-- Start Testimonial Section -->
<div class="testimonial-section py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">
                    <div id="testimonial-nav" class="mb-4">
                        <span class="prev me-2" data-controls="prev"><i class="fa fa-chevron-left"></i></span>
                        <span class="next" data-controls="next"><i class="fa fa-chevron-right"></i></span>
                    </div>

                    <div class="testimonial-slider">
                        @for($i=0;$i<3;$i++)
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="testimonial-block p-4 border rounded bg-white">
                                        <blockquote class="mb-4">
                                            <p>&ldquo;Excellent service and top-quality furniture. I am extremely satisfied with my purchases.&rdquo;</p>
                                        </blockquote>
                                        <div class="author-info d-flex align-items-center justify-content-center">
                                            <div class="author-pic me-3">
                                                <img src="{{ asset('images/person-1.png') }}" class="img-fluid rounded-circle" alt="Maria Jones">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 font-weight-bold">Maria Jones</h6>
                                                <small class="text-muted">CEO, Co-Founder, XYZ Inc.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Section -->

@endsection
