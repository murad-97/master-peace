<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'userId', // Add 'userId' to the $fillable array
        'amount',// Other fillable properties here...
        'provider',// Other fillable properties here...
        'status',
        'payment-method',// Other fillable properties here...
    ];
    public function user()
    {
        return $this->belongsTo(User::class,"userId");
    }
    public function orderdetail()
    {
        return $this->hasMany(Orderdetail::class);
    }
    use HasFactory;
}
