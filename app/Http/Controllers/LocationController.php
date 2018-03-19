<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        return view('location');
    }
    public function index2(){
        return view('experience.experience-old-to-delete');
    }
}
