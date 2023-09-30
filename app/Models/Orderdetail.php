<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable = [
        'userId', // Add 'userId' to the $fillable array
        'paymentId',// Other fillable properties here...
        'shipmentId',// Other fillable properties here...
        'total',// Other fillable properties here...
    ];
    public function user()
    {
        return $this->belongsTo(User::class,"userId");
    }
    public function address()
    {
        return $this->belongsTo(Shipment::class,"shipmentId");
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class,"paymentId");
    }
    public function orderItem()
    {
        return $this->hasMany(Orderitem::class);
    }
    use HasFactory;
}
