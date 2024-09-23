<?php
// app/Models/OrderDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    // Relación con Orden
    public function order() {
        return $this->belongsTo(Order::class);
    }

    // Relación con Producto
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
