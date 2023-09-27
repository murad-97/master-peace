<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class,"styleId");
    }
    public function category()
    {
        return $this->belongsTo(Category::class,"categoryId");
    }
    use HasFactory;
}
