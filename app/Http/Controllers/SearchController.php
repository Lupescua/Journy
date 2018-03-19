<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(){
$item_searched = request()->get('searched_term');
}

}
