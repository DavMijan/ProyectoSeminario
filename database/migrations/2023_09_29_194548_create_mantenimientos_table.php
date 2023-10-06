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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vehiculos');
            $table->foreign('id_vehiculos')->references('id')->on('vehiculos');
            $table->unsignedBigInteger('id_pieza');
            $table->foreign('id_pieza')->references('id')->on('piezas');
            $table->string('tipomantenimiento');
            $table->float('Kil_insta_o_mant');
            $table->float('costomantenimiento');
            $table->integer('estado')->default(1);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
