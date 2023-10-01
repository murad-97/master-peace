<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,"userId");
    }
    public function product()
{
    return $this->belongsTo(Product::class,"productId");
}
    
protected $fillable = [
    'userId', // Add 'userId' to the $fillable array
    'productId',// Other fillable properties here...
    'review',// Other fillable properties here...
    'description',
    // Other fillable properties here...
];
}
