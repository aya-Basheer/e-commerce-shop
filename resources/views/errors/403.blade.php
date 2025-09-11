@extends('layouts.app')

@section('title','Forbidden')

@section('content')
<div class="container py-5 text-center">
  <h1 class="display-4">403</h1>
  <p class="lead">You are not authorized to access this page.</p>
  <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
</div>
@endsection
