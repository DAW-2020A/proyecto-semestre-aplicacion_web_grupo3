<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBusstopIdColumnRutasBusstop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rutas_busstops', function (Blueprint $table) {
            $table->unsignedBigInteger('busstop_id');
            $table->foreign('busstop_id')->references('id')->on('bus_stops')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rutas_busstops', function (Blueprint $table) {
            $table->dropForeign(['busstop_id']);
        });
    }
}
