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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_conductores');
            $table->foreign('id_conductores')->references('id')->on('conductores');

            $table->date('fecha');
            $table->string('horasalida');
            $table->string('kilometrajesalida');
            $table->string('horallegada');
            $table->string('kilometrajellegada');

            $table->unsignedBigInteger('id_lugares');
            $table->foreign('id_lugares')->references('id')->on('lugares');

            $table->unsignedBigInteger('id_facturas_gastos');
            $table->foreign('id_facturas_gastos')->references('id')->on('facturas_gastos');

            $table->string('objetivovisita');
            $table->integer('estado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
