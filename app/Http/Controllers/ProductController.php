<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // عرض كل المنتجات
    public function index()
    {
        $products = Product::all();
        return view('shop.products', compact('products'));
    }

    // عرض منتج واحد
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.product-details', compact('product'));
    }
}
