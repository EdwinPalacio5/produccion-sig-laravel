<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meses_produccion', function (Blueprint $table) {
            $table->bigIncrements('id_mes');
            $table->unsignedBigInteger('id_anio');
            $table->foreign('id_anio')->references('id_anio')->on('anios_produccion');
            $table->string('mes');
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
        Schema::dropIfExists('meses_produccion');
    }
}
