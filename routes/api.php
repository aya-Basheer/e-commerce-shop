<?php

use App\Http\Controllers\Api\v1\ProductController as ProductApi;
use App\Http\Controllers\Api\v1\CategoryController as CategoryApi;

Route::prefix('v1')->group(function(){
    // قراءة للجميع (index, show) يمكن تتركها بدون auth
    Route::get('products', [ProductApi::class,'index']);
    Route::get('products/{id}', [ProductApi::class,'show']);

    // المحمّية (إنشاء، تعديل، حذف) بواسطة Sanctum
    Route::middleware(['auth:sanctum','throttle:60,1'])->group(function(){
        Route::post('products', [ProductApi::class,'store']);
        Route::put('products/{id}', [ProductApi::class,'update']);
        Route::delete('products/{id}', [ProductApi::class,'destroy']);
    });

    // نفس الشيء للفئات
    Route::apiResource('categories', CategoryApi::class)->only(['index','show']);
});
