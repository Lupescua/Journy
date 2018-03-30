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
            'photo'=>'Jon-Snow.jpg',
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


        $continent = Continent::create([
            'name' => 'asia'
        ]);

            $region = Region::create([
                'continent_id' => $continent->id,
                'name' => 'east'
            ]);
                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'dragon'
                ]);
                $activity = Activity::create([
                    'region_id' => $region->id,
                    'name' => 'motorbike'
                ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name'=>'Long is the night we\'ve been waiting for',
                        'image'=>'eastwatch.jpg',
                        'user_id'=>'1',
                        'rating'=>'3',
                        'main_tags'=>'dragons,ice,fire',
                        'people_who_did_it'=>'55',
                        'price'=>'22.5',
                        'currency'=>'USD',
                        'max_participants'=>'3',
                        'video_id'=>'http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/mp4-low/playmobil-game-of-thrones-2012-mp4.mp4',
                        'description'=>'A personal, face-to-face encounter with this awesome animal, is guaranteed to get the adrenaline going! Dive with the sharks in Gaansbaai! Getting into the cage with the sharks around, is truly one of the most breath-taking adventure activities you will ever live to remember. When feeding actively around the boat, the sharks may occasionally brush their tail against the cage, but they NEVER attack the cage. They are very curious though and often come close-up to the cage, to take a closer look at the diver.',
                        'location_id'=>'Prague',
                        'place'=>'',
                        'duration'=>'3.5',
                        'offered'=>'1 meal, Drinks and Equipment',
                        'language'=>'English',
                        'sport_level'=>'',
                        'about_host'=>'JWe know no king but the King in the North, whose name is Stark.',
                        'what_we_do'=>'First, I\'ll show you around the SKOBA workshop and we\'ll perform the basics of handmade notebook production. Then, you will make your own notebook from authentic, locally-sourced materials such as antique Czech magazines, books and posters. You will experience the joys of making something unique with your own hands and creating an original notebook in a sustainable and socially-impactful way. And of course, the notebook is yours to take home and use!',
                        'what_we_provide'=>'Home made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and cultureHome made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and culture',
                        'who_can_come'=>'Guests ages 12 and up can attend.',
                        'where_we_be'=>'Mordor is not that far, but this is the land of Fire and Ice. We will be camping in the forests of Mithelhime and eat with the Trolls unde the bridge of Happyness. Luckylly, our music will be offered by noneother thatn Tyrion Drake Malfoy and his acompaniament of Jolly Rogers.',
                        'gps_lng'=>'14.431',
                        'gps_lat'=>'50.0745'
                    ]);


                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Motor Trip with John',
                        'image' => 'motor_trip_john.jpg',
                        'user_id'=>'1',
                        'rating'=>'3',
                        'main_tags'=>'dragons,ice,fire',
                        'people_who_did_it'=>'55',
                        'price'=>'22.5',
                        'currency'=>'USD',
                        'max_participants'=>'3',
                        'video_id'=>'http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/mp4-low/playmobil-game-of-thrones-2012-mp4.mp4',
                        'description'=>'A personal, face-to-face encounter with this awesome animal, is guaranteed to get the adrenaline going! Dive with the sharks in Gaansbaai! Getting into the cage with the sharks around, is truly one of the most breath-taking adventure activities you will ever live to remember. When feeding actively around the boat, the sharks may occasionally brush their tail against the cage, but they NEVER attack the cage. They are very curious though and often come close-up to the cage, to take a closer look at the diver.',
                        'location_id'=>'Prague',
                        'place'=>'',
                        'duration'=>'3.5',
                        'offered'=>'1 meal, Drinks and EquipmentJon Snow',
                        'language'=>'English',
                        'sport_level'=>'',
                        'about_host'=>'JWe know no king but the King in the North, whose name is Stark.',
                        'what_we_do'=>'First, I\'ll show you around the SKOBA workshop and we\'ll perform the basics of handmade notebook production. Then, you will make your own notebook from authentic, locally-sourced materials such as antique Czech magazines, books and posters. You will experience the joys of making something unique with your own hands and creating an original notebook in a sustainable and socially-impactful way. And of course, the notebook is yours to take home and use!',
                        'what_we_provide'=>'Home made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and cultureHome made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and culture',
                        'who_can_come'=>'Guests ages 12 and up can attend.',
                        'where_we_be'=>'Mordor is not that far, but this is the land of Fire and Ice. We will be camping in the forests of Mithelhime and eat with the Trolls unde the bridge of Happyness. Luckylly, our music will be offered by noneother thatn Tyrion Drake Malfoy and his acompaniament of Jolly Rogers.',
                        'gps_lng'=>'14.431',
                        'gps_lat'=>'50.0745',
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Shanghai on motor with Xin Huan',
                        'image' => 'local_motor_guide.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Borneo on Motorbike',
                        'image' => 'forrwest_bikes.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Motorbike in Cambodia with Brad',
                        'image' => 'cambodia_bike.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Macau coast on Motorbike with Steven',
                        'image' => 'bike_trip_in_macau_steven.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
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
                        'image' => 'bali_local.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
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
                        'image' => 'mongolia.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
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
                        'image' => 'locals_siberia.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Mongolia for hipsters',
                        'image' => 'mongolia_for_hipsters.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
                    ]);

                    Experience::create([
                        'continent_id' => $continent->id,
                        'region_id' => $region->id,
                        'activity_id' => $activity->id,
                        'name' => 'Phillipina Mountains trekking',
                        'image' => 'banaue.jpg',
                        'user_id'=>'',
                        'rating'=>'3',
                        'main_tags'=>'',
                        'people_who_did_it'=>'0',
                        'price'=>'',
                        'currency'=>'',
                        'max_participants'=>'',
                        'video_id'=>'',
                        'description'=>'',
                        'location_id'=>'',
                        'place'=>'',
                        'duration'=>'',
                        'offered'=>'',
                        'language'=>'',
                        'sport_level'=>'',
                        'about_host'=>'',
                        'what_we_do'=>'',
                        'what_we_provide'=>'',
                        'who_can_come'=>'',
                        'where_we_be'=>'',
                        'gps_lng'=>'',
                        'gps_lat'=>'',
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
                        Experience::create([
                            'continent_id' => $continent->id,
                            'region_id' => $region->id,
                            'activity_id' => $activity->id,
                            'name' => 'Book a Journy',
                            'image' => '28279965_1593086544078954_2118624544300176229_n.jpg',
                            'user_id'=>'1',
                            'rating'=>'5',
                            'main_tags'=>'',
                            'people_who_did_it'=>'3',
                            'price'=>'200',
                            'currency'=>'EUR',
                            'max_participants'=>'50',
                            'video_id'=>'',
                            'description'=>'Hello everybody and wellcome to our project\'s web platform. We have created this "JournY" in order to help travellers that are searching real experience in places where they might be completely lonely and to help local people, who have a great knowledge of a place where they live or they might have some skills that thay can teach others.',
                            'location_id'=>'',
                            'place'=>'Prague',
                            'duration'=>'15 min',
                            'offered'=>'Fun',
                            'language'=>'English',
                            'sport_level'=>'1',
                            'about_host'=>'We are a group of three young people, Adrian from Romania, who came with this idea several years ago and finally got the chance to bring his long awaited project to life... and Bartek from Poland and Jirina from Czech republic who were happy to form the team and create this page.',
                            'what_we_do'=>'We\'ve worked really hard but also have had lots of fun while creating this pages. Hope you will enjoy your browsing here and we will be the most happy people if you get the chance to meet your local guides on your travel through "JournY". Or if you are a person who have things to offer don"t hesitate and use our "JournY" to present your skills.',
                            'what_we_provide'=>'',
                            'who_can_come'=>'Anybody who is looking for an euthentic travel experiene',
                            'where_we_be'=>'Startup Center',
                            'gps_lng'=>'',
                            'gps_lat'=>'',
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