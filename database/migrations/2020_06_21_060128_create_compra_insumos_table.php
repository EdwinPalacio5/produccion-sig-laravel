<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_insumos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_insumo');
            $table->foreign('id_insumo')->references('id_insumo')->on('insumos');
            $table->integer('cantidad_insumo');
            $table->decimal('precio_unitario_insumo',6,2);
            $table->dateTime('fecha_compra_insumo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_insumos');
    }
}
