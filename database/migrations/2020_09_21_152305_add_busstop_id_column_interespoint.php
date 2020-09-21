<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBusstopIdColumnInterespoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interest_points', function (Blueprint $table) {
            $table->unsignedBigInteger('bus_stop_id');
            $table->foreign('bus_stop_id')->references('id')->on('bus_stops')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interest_points', function (Blueprint $table) {
            $table->dropForeign(['bus_stop_id']);
        });
    }
}
