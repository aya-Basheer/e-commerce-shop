<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;


class ReviewsSeeder extends Seeder
{
public function run()
{
$products = Product::all();
$users = User::all();


if ($products->isEmpty() || $users->isEmpty()) {
// ضع حل بديل أو أنشئ منتجات/مستخدمين وهميين
return;
}


foreach ($products as $product) {
// إنشاء ما بين 0 و 5 تقييمات لكل منتج
$count = rand(0, 5);
for ($i = 0; $i < $count; $i++) {
Review::factory()->create([
'product_id' => $product->id,
'user_id' => $users->random()->id,
]);
}
}
}
}