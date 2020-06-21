<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotacionInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotaciones_insumos', function (Blueprint $table) {
            $table->bigIncrements('id_rotacion');
            $table->unsignedBigInteger('id_insumo');
            $table->foreign('id_insumo')->references('id_insumo')->on('insumos');
            $table->unsignedBigInteger('id_mes');
            $table->foreign('id_mes')->references('id_mes')->on('meses_produccion');
            $table->integer('cantidad_disponible');
            $table->integer('cantidad_consumida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rotacion_insumos');
    }
}
