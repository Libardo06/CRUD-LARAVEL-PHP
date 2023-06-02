<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*
     * CREADO POR LIBARDO LOPEZ 29/05/2023
     */
    public function up(): void
    {
        Schema::create('proovedors', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_id');
            $table->string('Num_id');
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('Nom_con');
            $table->string('Tel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proovedors');
    }
};
