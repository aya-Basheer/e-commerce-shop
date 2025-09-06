<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Pro X',
            'description' => 'High performance laptop for developers and gamers.',
            'price' => 1200.99,
            'stock' => 15,
            'on_sale' => true,
        ]);

        Product::create([
            'name' => 'Smartphone Max',
            'description' => 'Latest smartphone with cutting-edge technology.',
            'price' => 899.50,
            'stock' => 25,
            'on_sale' => true,
        ]);

        Product::create([
            'name' => 'Wireless Headphones',
            'description' => 'Noise-cancelling over-ear headphones.',
            'price' => 199.99,
            'stock' => 50,
            'on_sale' => false,
        ]);
    }
}