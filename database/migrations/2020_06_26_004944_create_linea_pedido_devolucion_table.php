<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaPedidoDevolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pedido_devolucion', function (Blueprint $table) {
            $table->bigIncrements('id_linea_pedido_devolucion');
            $table->unsignedBigInteger('id_linea_pedido');
            $table->foreign('id_linea_pedido')->references('id_linea_pedido')->on('lineas_pedido');
            $table->unsignedBigInteger('id_motivo_devolucion');
            $table->foreign('id_motivo_devolucion')->references('id_motivo_devolucion')->on('motivo_devolucion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_pedido_devolucion');
    }
}
