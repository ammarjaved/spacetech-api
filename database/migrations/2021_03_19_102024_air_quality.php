<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AirQuality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('air_quality',function (Blueprint $table){
            $table->increments('id');
            $table->float('co');
            $table->float('co2');
            $table->float('nh3');
            $table->float('no2');
            $table->float('o2');
            $table->float('pm10');
            $table->float('pm2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
