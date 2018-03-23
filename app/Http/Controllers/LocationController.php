<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $filter1 = $request->input('filter1');
        $filter2 = $request->input('filter2');
        $filter3 = $request->input('filter3');

        return view('location', compact(['search', 'filter1', 'filter2', 'filter3']));
    }
    public function index2(){
        return view('experience.experience-old-to-delete');
    }
}
