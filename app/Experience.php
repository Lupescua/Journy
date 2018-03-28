<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'name', 'user_id', 'main_img', 'rating', 'main_tags', 'price', 'currency', 'max_participants', 'video_id', 'description', 'location_id', 'address', 'duration', 'offered', 'language', 'sport_level', 'about_host', 'what_we_do', 'what_we_provide', 'who_can_come', 'where_we_be', 'location_lng', 'location_lat',
    ];
}

