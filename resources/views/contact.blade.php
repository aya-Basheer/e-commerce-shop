@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Contact</h1>
          <p class="mb-4">
            Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. 
            Aliquam vulputate velit imperdiet dolor tempor tristique.
          </p>
          <p>
            <a href="{{ url('/products') }}" class="btn btn-secondary me-2">Shop Now</a>
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

<!-- Start Contact Form -->
<div class="untree_co-section">
  <div class="container">
    <div class="block">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8 pb-4">

          <!-- Contact Info -->
          <div class="row mb-5">
            <div class="col-lg-4">
              <div class="service no-shadow align-items-center link horizontal d-flex active">
                <div class="service-icon color-1 mb-4">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="service-contents">
                  <p>43 Raymouth Rd. Baltemoer, London 3910</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="service no-shadow align-items-center link horizontal d-flex active">
                <div class="service-icon color-1 mb-4">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="service-contents">
                  <p>info@yourdomain.com</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="service no-shadow align-items-center link horizontal d-flex active">
                <div class="service-icon color-1 mb-4">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="service-contents">
                  <p>+1 294 3925 3939</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <form>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="fname">First name</label>
                  <input type="text" class="form-control" id="fname">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="text-black" for="email">Email address</label>
              <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group mb-5">
              <label class="text-black" for="message">Message</label>
              <textarea class="form-control" id="message" cols="30" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact Form -->

@endsection
