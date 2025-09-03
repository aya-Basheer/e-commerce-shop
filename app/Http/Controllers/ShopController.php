<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
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
