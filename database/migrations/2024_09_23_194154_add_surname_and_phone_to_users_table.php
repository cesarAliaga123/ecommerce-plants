<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSurnameAndPhoneToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable();  // Campo apellidos
            $table->string('phone')->nullable();    // Campo teléfono
            $table->unsignedBigInteger('user_level_id')->default(2); // Campo nivel de usuario con valor predeterminado
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('user_level_id');
        });
    }
}

