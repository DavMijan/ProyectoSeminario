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
            $table->float('Kil_insta_o_mant');
            $table->float('Kil_para_mant');
            $table->string('estadopieza');
            $table->integer('estado')->default(1);
            
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
