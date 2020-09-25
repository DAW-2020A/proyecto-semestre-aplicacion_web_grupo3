<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategorieplaceIdColumnInterespoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interest_points', function (Blueprint $table) {
            $table->unsignedBigInteger('categorie_places_id');
            $table->foreign('categorie_places_id')->references('id')->on('categorie_places')->onDelete('restrict');
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
            $table->dropForeign(['categorie_places_id']);
        });
    }
}
