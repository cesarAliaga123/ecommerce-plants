<?php

// database/seeders/UserLevelSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserLevel;

class UserLevelSeeder extends Seeder
{
    public function run()
    {
        UserLevel::create(['level_name' => 'Admin', 'description' => 'Administrador del sistema']);
        UserLevel::create(['level_name' => 'Usuario', 'description' => 'Usuario regular del sistema']);
    }
}

