<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmbarcacionToZarpe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Zarpe', function (Blueprint $table) {

            $table->integer('embarcacion_id')->unsigned();
            $table->foreign('embarcacion_id')->references('id')->on('Embarcacion')->onDelete('cascade');           //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Zarpe', function (Blueprint $table) {
            //
            $table->dropForeign('Zarpe_embarcacion_id_foreign');
        });
    }
}
