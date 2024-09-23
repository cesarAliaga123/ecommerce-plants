<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'category_id'];

    // Relación con Categoría
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Relación con Detalles de Órdenes
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
