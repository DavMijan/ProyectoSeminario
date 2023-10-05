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
        Schema::create('facturas_gastos', function (Blueprint $table) {
            $table->id();

            $table->string('codigoFactura');
            $table->date('fecha');
            $table->float('cantidadgalones');
            $table->float('montototal');
            $table->integer('estado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_gastos');
    }
};
