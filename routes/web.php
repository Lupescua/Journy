<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomepageController@index') ;
Route::get('/location', 'LocationController@index') ;
Route::get('/login', 'LoginController@index') ;


// Route::get('/portfolio', 'PortfolioController@index') ;
// Route::get('/contact', 'ContactController@index') ;
Route::get('/experience', 'ExperienceController@index') ;



