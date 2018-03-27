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
            $table->string('user_id');
            $table->string('name');
            $table->string('main_img');
            $table->string('rating');
            $table->string('main_tags');
            $table->string('people_who_did_it');
            $table->string('price');
            $table->string('currency');
            $table->string('max_participants');
            $table->string('video_id');
            $table->text('description');
            $table->string('location_id');
            $table->string('address');
            $table->string('duration');
            $table->string('offered');
            $table->string('language');
            $table->string('sport_level');
            $table->text('about_host');
            $table->text('what_we_do');
            $table->text('what_we_provide');
            $table->text('who_can_come');
            $table->text('where_we_be');
            $table->string('location_lng');
            $table->string('location_lat');
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
