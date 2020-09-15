<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCooperativaIdColumnUnidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unidads', function (Blueprint $table) {
            $table->unsignedBigInteger('cooperativa_id');
            $table->foreign('cooperativa_id')->references('id')->on('cooperativas')->onDelete('restrict');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidads', function (Blueprint $table) {
            $table->dropForeign(['cooperativas_id']);
        });
    }
}
