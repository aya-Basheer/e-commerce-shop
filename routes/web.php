<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
// Route::get('/', [ShopController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show']);


// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', [ProductController::class, 'show']);





Route::get('/', [ShopController::class, 'index'])->name('home');
 Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/services', [ShopController::class, 'services'])->name('services');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::get('/about', [ShopController::class, 'about'])->name('about');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');
Route::get('/blog', [ShopController::class, 'blog'])->name('blog');