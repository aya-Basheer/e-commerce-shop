@extends('layouts.app')

@section('title','Admin Dashboard')

@section('content')
<div class="container py-5">
  <h1>Admin Dashboard</h1>
  <p>Welcome, {{ auth()->user()->name ?? 'Admin' }}.</p>
  <a href="{{ url('admin/products') }}" class="btn btn-primary">Manage Products</a>
  <a href="{{ url('admin/categories') }}" class="btn btn-secondary">Manage Categories</a>
</div>
@endsection
