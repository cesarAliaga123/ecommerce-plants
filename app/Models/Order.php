<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total', 'status'];

    // Relación con Usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relación con Detalles de Órdenes
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }

    // Relación con Pago
    public function payment() {
        return $this->hasOne(Payment::class);
    }
}
