<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaPedidoRequisitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pedido_requisito', function (Blueprint $table) {
            $table->bigIncrements('id_linea_pedido_requisito');
            $table->unsignedBigInteger('id_requisito');
            $table->foreign('id_requisito')->references('id_requisito')->on('requisitos');
            $table->unsignedBigInteger('id_linea_pedido');
            $table->foreign('id_linea_pedido')->references('id_linea_pedido')->on('lineas_pedido');
            
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
        Schema::dropIfExists('linea_pedido_requisito');
    }
}
