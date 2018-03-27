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
