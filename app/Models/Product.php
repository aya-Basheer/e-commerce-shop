<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   
    protected $fillable = ['name','description','price','on_sale','image','category_id','stock'];

    protected $casts = [
        'on_sale' => 'boolean',
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
