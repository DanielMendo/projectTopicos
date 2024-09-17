<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('imagen')->nullable();
            $table->string('perfil');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password')->unique();
            $table->tinyInteger('estado')->default(1);
            $table->string('nombre')->unique();
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('descripcion')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
