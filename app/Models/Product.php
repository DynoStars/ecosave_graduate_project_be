<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'original_price',
        'discounted_price',
        'expiration_date',
        'stock_quantity',
        'store_id',
        'category_id',
    ];

    // Liên kết với Store
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Liên kết với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
