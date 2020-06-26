<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacion_trabajo', function (Blueprint $table) {
            $table->bigIncrements('id_estacion_trabajo');
            $table->unsignedBigInteger('id_linea_pedido');
            $table->foreign('id_linea_pedido')->references('id_linea_pedido')->on('lineas_pedido');
            $table->integer('unidades_producidas');
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
        Schema::dropIfExists('estacion_trabajo');
    }
}
