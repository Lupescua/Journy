<?php

use Illuminate\Database\Seeder;

use App\Continent;
use App\Region;
use App\Activity;
use App\Experience;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'Jon Snow',
            'email'=>'usetr@snow.com',
            'password'=>'ygritte',
            'adress_country'=>'Kingdom of the North',
            'adress_city'=>'Winterfall',
            'adress_state'=>'North',
            'adress_street'=>'Castle',
            'adress_zip'=>'0001',
            'prefered_language'=>'english',
            'user_tags'=>'snow,winter,wolves',
        ]);


\App\Experience::create([
    'name'=>'Long is the night we\'ve been waiting for',
    'user_id'=>'1',
    'main_img'=>'https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg',
    'rating'=>'3',
    'main_tags'=>'dragons,ice,fire',
    'people_who_did_it'=>'55',
    'price'=>'22.5',
    'currency'=>'USD',
    'max_participants'=>'3',
    'video_id'=>'http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/mp4-low/playmobil-game-of-thrones-2012-mp4.mp4',
    'description'=>'A personal, face-to-face encounter with this awesome animal, is guaranteed to get the adrenaline going! Dive with the sharks in Gaansbaai! Getting into the cage with the sharks around, is truly one of the most breath-taking adventure activities you will ever live to remember. When feeding actively around the boat, the sharks may occasionally brush their tail against the cage, but they NEVER attack the cage. They are very curious though and often come close-up to the cage, to take a closer look at the diver.',
    'location_id'=>'Prague',
    'address'=>'',
    'duration'=>'3.5',
    'offered'=>'1 meal, Drinks and EquipmentJon Snow',
    'language'=>'English',
    'sport_level'=>'',
    'about_host'=>'JWe know no king but the King in the North, whose name is Stark.',
    'what_we_do'=>'First, I\'ll show you around the SKOBA workshop and we\'ll perform the basics of handmade notebook production. Then, you will make your own notebook from authentic, locally-sourced materials such as antique Czech magazines, books and posters. You will experience the joys of making something unique with your own hands and creating an original notebook in a sustainable and socially-impactful way. And of course, the notebook is yours to take home and use!',
    'what_we_provide'=>'Home made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and cultureHome made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and culture',
    'who_can_come'=>'Guests ages 12 and up can attend.',
    'where_we_be'=>'Mordor is not that far, but this is the land of Fire and Ice. We will be camping in the forests of Mithelhime and eat with the Trolls unde the bridge of Happyness. Luckylly, our music will be offered by noneother thatn Tyrion Drake Malfoy and his acompaniament of Jolly Rogers.',
    'location_lng'=>'54343',
    'location_lat'=>'123456',
]);
        $continent = Continent::create([
            'name' => 'asia'
        ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'east'
            ]);

                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'motorbike'
                ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Motor Trip with John',
                        'image' => 'motor_trip_john.jpg'
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Shanghai on motor with Xin Huan',
                        'image' => 'local_motor_guide.jpg'
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Borneo on Motorbike',
                        'image' => 'forrwest_bikes.jpg'
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Motorbike in Cambodia with Brad',
                        'image' => 'cambodia_bike.jpg'
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Macau coast on Motorbike with Steven',
                        'image' => 'bike_trip_in_macau_steven.jpg'
                    ]);

                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'spa'
                ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Spa on Bali',
                        'image' => 'bali_local.jpg'
                    ]);


            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'west'
            ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'central'
            ]);

                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'hunting'
                ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Hunting with Mongolia warriors',
                        'image' => 'mongolia.jpg'
                    ]);


                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'trekking'
                ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Siberia walks',
                        'image' => 'locals_siberia.jpg'
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Mongolia for hipsters',
                        'image' => 'mongolia_for_hipsters.jpg'
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Phillipina Mountains trekking',
                        'image' => 'banaue.jpg'
                    ]);




        $continent = Continent::create([
            'name' => 'europe'
        ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'east'
            ]);

                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'food'
                ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'west'
            ]);

                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'sightseeing'
                ]);

        $continent = Continent::create([
            'name' => 'america'
        ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'north'
            ]);

                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'boat'
                ]);

        $continent = Continent::create([
            'name' => 'africa'
        ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'south'
            ]);


                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'photosafari'
                ]);

        // $this->call(UsersTableSeeder::class);
    }
}