<?php

// app/Models/UserLevel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    protected $fillable = ['level_name', 'description'];

    public function users()
    {
        return $this->hasMany(User::class, 'user_level_id');
    }
}
