<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_pedido', function (Blueprint $table) {
            $table->bigIncrements('id_linea_pedido');
            $table->unsignedBigInteger('id_insumo');
            $table->foreign('id_insumo')->references('id_insumo')->on('insumos');
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->decimal('horas_programadas_total', 6, 2);
            $table->decimal('horas_trabajadas_total', 6, 2);
            $table->decimal('porcentaje_avance_total', 6, 2);
            $table->decimal('eficiencia_alcanzada', 6, 2);
            $table->integer('cantidad_item_total');
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
        Schema::dropIfExists('lineas_pedido');
    }
}
