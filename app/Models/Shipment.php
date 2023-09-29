<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'userId', // Add 'userId' to the $fillable array
        'address'// Other fillable properties here...
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
