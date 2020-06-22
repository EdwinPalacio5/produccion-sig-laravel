<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesAñosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meses_anios', function (Blueprint $table) {
            $table->bigIncrements('id_mes_anio');
            $table->unsignedBigInteger('id_anio');
            $table->foreign('id_anio')->references('id_anio')->on('anios_produccion');
            $table->unsignedBigInteger('id_mes');
            $table->foreign('id_mes')->references('id_mes')->on('meses_produccion');
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
        Schema::dropIfExists('meses_anios');
    }
}
