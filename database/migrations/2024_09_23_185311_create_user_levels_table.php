<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_levels', function (Blueprint $table) {
            $table->id();
            $table->string('level_name'); // Nombre del nivel o rol, por ejemplo: Admin, Usuario
            $table->text('description')->nullable(); // Descripción del nivel
            $table->timestamps();
        });

        // Añadir la columna user_level_id en la tabla users
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_level_id')->nullable()->after('email'); // Columna para el nivel de usuario
            $table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('set null'); // Relación con user_levels
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_level_id']);
            $table->dropColumn('user_level_id');
        });

        Schema::dropIfExists('user_levels');
    }
}
