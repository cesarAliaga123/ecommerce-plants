<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Los atributos que son asignables de manera masiva.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * Los atributos que deben ser ocultos para arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Los atributos que deben ser mutados a tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relación con Posts
    public function posts() {
        return $this->hasMany(Post::class);
    }

    // Relación con Comentarios
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // Relación con Reacciones
    public function reactions() {
        return $this->hasMany(Reaction::class);
    }

    // Relación con Mensajes enviados
    public function sentMessages() {
        return $this->hasMany(Message::class, 'sender_id');
    }

    // Relación con Mensajes recibidos
    public function receivedMessages() {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    // Relación con Órdenes
    public function orders() {
        return $this->hasMany(Order::class);
    }
}

