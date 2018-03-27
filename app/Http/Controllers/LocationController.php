<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;
use App\Region;
use App\Activity;
use App\Experience;
use App\Tag;

class LocationController extends Controller
{
    public function index(Request $request){
        $continent = $request->input('continent');
        $region = $request->input('region');
        $activity = $request->input('activity');
        // $filter3 = $request->input('filter3');

        if( !isset($continent) ){
            $experiences = Experience::limit(20)->get();
            // $tags = Tag::limit(20)->get();
        }else{
            $continentObj = Continent::where('name', $continent)->first();

            if( !isset($region) ){
                $experiences = Experience::where('continent_id', $continentObj->id)
                    ->limit(20)->get();
                // $experiencesTag = Tag::where('continent_id', $continentTagObj->id)
                //     ->limit(20)->get();
            }else{
                $regionObj = Region::where('name', $region)->where('continent_id', $continentObj->id)->first();

                if( !isset($activity) ){
                    $experiences = Experience::where('region_id', $regionObj->id)
                    ->limit(20)->get();
                }else{
                    $activityObj = Activity::where('name', $activity)->where('region_id', $regionObj->id)->first();

                    $experiences = Experience::where('activity_id', $activityObj->id)
                        ->limit(20)->get();
                }
            }

        }

        return view('location', compact(['continent', 'region', 'activity', 'experiences']));
    }
    public function index2(){
        return view('experience.experience-old-to-delete');
    }
}
