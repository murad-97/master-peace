<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
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
