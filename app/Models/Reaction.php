<?php
// app/Models/Reaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = ['user_id', 'post_id', 'comment_id', 'reaction_type'];

    // Relación con Usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relación con Post
    public function post() {
        return $this->belongsTo(Post::class);
    }

    // Relación con Comentario
    public function comment() {
        return $this->belongsTo(Comment::class);
    }
}
