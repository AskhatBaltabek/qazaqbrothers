<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_station', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fuel_id')->unsigned();
            $table->integer('station_id')->unsigned();
            $table->float('price')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('fuel_id')
                ->references('id')
                ->on('fuels')
                ->onDelete('cascade');

            $table->foreign('station_id')
                ->references('id')
                ->on('stations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_station');
    }
}
