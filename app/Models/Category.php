<?php
// app/Models/Category.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    // Relación con Productos
    public function products() {
        return $this->hasMany(Product::class);
    }
}
