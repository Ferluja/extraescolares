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
        Schema::create('datos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('correo')->unique();
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('telefono');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_perfiles');
            $table->unsignedBigInteger('id_datos_escolares');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_perfiles')->references('id')->on('perfiles')->onDelete('cascade');
            $table->foreign('id_datos_escolares')->references('id')->on('datos_escolares')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_usuarios');
    }
};
