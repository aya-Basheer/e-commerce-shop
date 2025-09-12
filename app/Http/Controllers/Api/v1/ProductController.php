<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->paginate(10);
        return ProductResource::collection($products);
    }

    public function show($id) {
        $product = Product::with('category')->findOrFail($id);
        return new ProductResource($product);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
            'on_sale'=>'nullable|boolean',
            'category_id'=>'nullable|exists:categories,id',
            'image'=>'nullable|image|max:2048'
        ]);
        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products','public');
        }
        $product = Product::create($data);
        return (new ProductResource($product))->response()->setStatusCode(201);
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
            'on_sale'=>'nullable|boolean',
            'category_id'=>'nullable|exists:categories,id',
            'image'=>'nullable|image|max:2048'
        ]);
        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products','public');
        }
        $product->update($data);
        return new ProductResource($product);
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message'=>'Deleted'],200);
    }
}
