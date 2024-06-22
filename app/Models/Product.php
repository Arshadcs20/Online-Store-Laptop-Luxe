<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'image_url',
        'description',
        'original_price',
        'resale_price',
        'brand',
        'model',
        'condition',
        'purchase_year',
        'seller_name'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
