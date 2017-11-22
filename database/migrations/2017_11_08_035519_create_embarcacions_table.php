<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbarcacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Embarcacion', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo_barco')->unique();
            $table->string('nombre');
            $table->string('tipo');
            $table->integer('capacidad');
            $table->string('dimensiones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Embarcacion');
    }
}
