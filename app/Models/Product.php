<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "material",
        "description",
        "price"
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
