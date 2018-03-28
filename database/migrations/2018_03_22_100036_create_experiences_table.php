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
            $table->string('user_id')->nullable();;
            $table->string('name')->nullable();
            $table->integer('continent_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('activity_id')->nullable();
            $table->string('image')->nullable();
            $table->string('rating')->nullable();
            $table->string('main_tags')->nullable();
            $table->string('people_who_did_it')->nullable();
            $table->string('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('max_participants')->nullable();
            $table->string('video_id')->nullable();
            $table->text('description')->nullable();
            $table->string('location_id')->nullable();
            $table->string('place')->nullable();
            $table->string('duration')->nullable();
            $table->string('offered')->nullable();
            $table->string('language')->nullable();
            $table->string('sport_level')->nullable();
            $table->text('about_host')->nullable();
            $table->text('what_we_do')->nullable();
            $table->text('what_we_provide')->nullable();
            $table->text('who_can_come')->nullable();
            $table->text('where_we_be')->nullable();
            $table->float('gps_lat')->nullable();
            $table->float('gps_lng')->nullable();
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
