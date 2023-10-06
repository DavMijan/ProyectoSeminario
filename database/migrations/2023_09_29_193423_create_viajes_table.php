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
            $table->unsignedBigInteger('id_conductor');
            $table->foreign('id_conductor')->references('id')->on('users');
            $table->date('fecha');
            $table->string('horasalida');
            $table->string('kilometrajesalida');
            $table->string('horallegada');
            $table->string('kilometrajellegada');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('direccion');
            $table->string('codigoFactura');
            $table->float('cantidadgalones');
            $table->float('montototal');
            $table->string('objetivovisita');
            $table->integer('estado')->default(1);
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
