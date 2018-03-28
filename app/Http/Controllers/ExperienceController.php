<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index($name){
        $experience = Experience::where('name', $name)->first();
        return view('experience.experience',compact('experience'));


//        return view('experience.experience',compact('experiences'));
    }

    public function create(){
        return view('experience.experience');
    }

    public function store(){
        return view('experience.experience');
    }

    public function show(){
        return view('experience.experience');
    }
}
