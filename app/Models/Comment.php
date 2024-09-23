<?php
// app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'user_id', 'comment'];

    // Relación con Usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relación con Post
    public function post() {
        return $this->belongsTo(Post::class);
    }

    // Relación con Reacciones
    public function reactions() {
        return $this->hasMany(Reaction::class);
    }
}
