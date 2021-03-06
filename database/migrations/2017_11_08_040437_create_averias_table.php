<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAveriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Averia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('fecha');
            $table->text('descripcion');
            $table->integer('embarcacion_id')->unsigned();
            $table->foreign('embarcacion_id')->references('id')->on('Embarcacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Averia');
    }
}
