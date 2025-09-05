<form action="{{ url('/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
    <textarea name="description">{{ old('description', $product->description) }}</textarea>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" required>
    <input type="checkbox" name="on_sale" value="1" {{ $product->on_sale ? 'checked' : '' }}>
    <input type="file" name="image">
    <button type="submit">Update Product</button>
</form>
