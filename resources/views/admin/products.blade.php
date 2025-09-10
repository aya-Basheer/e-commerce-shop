@extends('layouts.app')

@section('title','Admin - Products')

@section('content')
<div class="container py-5">
  <h2>Products</h2>
  <table class="table table-striped">
    <thead><tr><th>#</th><th>Name</th><th>Category</th><th>Price</th><th>Actions</th></tr></thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{ $loop->iteration + ($products->currentPage()-1)*$products->perPage() }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name ?? '-' }}</td>
        <td>{{ $product->price }}</td>
        <td>
          @can('update', $product)
            <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-sm btn-info">Edit</a>
          @endcan

          @can('delete', $product)
            <form action="{{ url('admin/products/'.$product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger">Delete</button>
            </form>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $products->links() }}
</div>
@endsection
