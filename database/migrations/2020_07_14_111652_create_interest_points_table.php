<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('direction',100);
            $table->string('phone', 10);
            $table->time('hour_start', 0);
            $table->time('hour_end', 0);
            $table->decimal('latitude',13,10);
            $table->decimal('longitude',13,10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interest_points');
    }
}
