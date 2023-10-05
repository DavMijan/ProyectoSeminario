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
        Schema::create('piezas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_vehiculos');
            $table->foreign('id_vehiculos')->references('id')->on('vehiculos');

            $table->string('nombre');
            $table->date('fechainstalacion');
            $table->string('estadocompra');
            $table->string('estadopieza');
            $table->integer('estado');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piezas');
    }
};
