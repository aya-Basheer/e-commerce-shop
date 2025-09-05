<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function products()
{
    $products = Product::all(); // جلب كل المنتجات
    return view('shop.products', compact('products'));
}

    // عرض الفورم
    public function create()
    {
        return view('shop.create-product');
    }

    // استلام البيانات وحفظ المنتج
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'on_sale' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048', // 2 MB
        ]);

        // handle checkbox (إذا لم يُرسَل فإنّه غير موجود في request)
        $data['on_sale'] = $request->has('on_sale') ? 1 : 0;

        // handle image upload
        if ($request->hasFile('image')) {
            // سيخزن تحت storage/app/public/products
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        Product::create($data);

        return redirect()->route('products.create') // أو إلى index لو موجود
                         ->with('success', 'Product created successfully.');
    }

    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('shop.product-details', compact('product'));
}

    
    public function index() {
        return view('home'); // الصفحة الرئيسية تعرض المنتجات
    }

    public function services() {
        return view('services');
    }

    public function cart() {
        return view('cart');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
    
    public function blog() {
        return view('blog');
    }
      
    public function shop() {
        return view('shop');
    }
}
