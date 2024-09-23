<?php
// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'content', 'image_url'];

    // Relación con Usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relación con Comentarios
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // Relación con Reacciones
    public function reactions() {
        return $this->hasMany(Reaction::class);
    }
}
