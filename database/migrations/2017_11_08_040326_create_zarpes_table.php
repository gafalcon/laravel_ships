<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZarpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Zarpe', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->datetime('fecha_salida');
            $table->datetime('fecha_arribo');
            $table->string('calidad');
            $table->integer('capitan_id')->unsigned();
            $table->foreign('capitan_id')->references('id')->on('Capitan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Zarpe');
    }
}
