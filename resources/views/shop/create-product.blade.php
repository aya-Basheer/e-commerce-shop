@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container">
    <h2>Add New Product</h2>

    <!-- عرض رسالة النجاح -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- عرض الأخطاء -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" value="{{ old('stock', 0) }}" class="form-control" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="on_sale" value="1" id="on_sale" class="form-check-input" {{ old('on_sale') ? 'checked' : '' }}>
            <label for="on_sale" class="form-check-label">On Sale</label>
        </div>

        <div class="mb-3">
            <label>Product Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection
