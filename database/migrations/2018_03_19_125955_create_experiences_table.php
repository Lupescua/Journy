<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('continent_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('activity_id')->nullable();

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->float('price')->nullable();
            $table->string('place')->nullable();
            $table->float('gps_lat')->nullable();
            $table->float('gps_lng')->nullable();
            $table->string('guide')->nullable();


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
        Schema::dropIfExists('experiences');
    }
}
