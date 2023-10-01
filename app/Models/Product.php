<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    public function category()
    {
        return $this->belongsTo(Category::class,"categoryId");
    }
    public function style()
    {
        return $this->belongsTo(Style::class,"styleId");
    }
    public function review()
    {
        return $this->hasMany(Review::class,'productId');
    }
    public function orderitem()
    {
        return $this->hasMany(Orderitem::class);
    }
    use HasFactory;
}
