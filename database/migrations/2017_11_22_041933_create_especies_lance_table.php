<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspeciesLanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especies_lance', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('lance_id')->unsigned();
            $table->foreign('lance_id')->references('id')->on('Lance')->onDelete('cascade');
            $table->integer('especie_id')->unsigned();
            $table->foreign('especie_id')->references('id')->on('Especie')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especies_lance');
    }
}
