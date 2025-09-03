<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Untree.co">
<link rel="shortcut icon" href="{{ asset('favicon.png') }}">


<meta name="description" content="" />
<meta name="keywords" content="bootstrap, bootstrap4" />


<!-- Bootstrap CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


<title>@yield('title', 'Furni Store')</title>


{{-- Page specific styles --}}
@yield('styles')
</head>
<body>


{{-- Header (partials/header.blade.php) --}}
@include('partials.header')


{{-- Main dynamic content --}}
<main>
@yield('content')
</main>


{{-- Footer (partials/footer.blade.php) --}}
@include('partials.footer')


{{-- Scripts --}}
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>


{{-- Page specific scripts --}}
@yield('scripts')
</body>
</html>