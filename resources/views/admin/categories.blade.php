@extends('layouts.app')

@section('title','Admin - Categories')

@section('content')
<div class="container py-5">
  <h2>Categories</h2>
  <table class="table table-striped">
    <thead><tr><th>#</th><th>Name</th><th>Slug</th><th>Products</th></tr></thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->slug }}</td>
        <td>{{ $category->products_count }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
