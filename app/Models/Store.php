<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_name',
        'owner',
        'open_hours',
        'status',
        'contact_email',
        'contact_phone',
        'address',
        'latitude',
        'longitude',
        'description',
        'user_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
