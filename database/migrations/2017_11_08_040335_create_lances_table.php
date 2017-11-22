<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lance', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->smallInteger('temperatura_agua');
            $table->point('posicion');
            $table->decimal('toneladas');
            $table->integer('zarpes_id')->unsigned();
            $table->foreign('zarpes_id')->references('id')->on('Zarpe')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lance');
    }
}
