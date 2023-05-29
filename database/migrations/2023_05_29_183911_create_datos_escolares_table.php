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
        Schema::create('datos_escolares', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_control');
            $table->unsignedBigInteger('id_carrera');
            $table->date('fecha_ingreso_tecnm');
            $table->string('escuela_procedencia');
            $table->foreign('id_carrera')->references('id')->on('cat_carreras')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_escolares');
    }
};
