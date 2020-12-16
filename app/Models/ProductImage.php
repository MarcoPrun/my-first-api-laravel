<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'product_id',
        'is_main'
    ];

    protected $casts  = [
        'product_id' => 'integer',
        'is_main' => 'boolean'
    ];
}
