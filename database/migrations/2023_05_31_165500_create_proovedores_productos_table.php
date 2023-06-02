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
        Schema::create('proovedores_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_proovedor');
            $table->integer('cantidad');
            $table->string('num_fact');
            $table->string('lote');
            $table->string('reg_invima');
            $table->string('fecha_vencimiento');
            $table->string('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_proovedor')->references('id')->on('proovedors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proovedores_productos');
    }
};
