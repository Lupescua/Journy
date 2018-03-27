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
Auth::routes();

Route::get('/', 'HomepageController@index')  ;
Route::get('/location', 'LocationController@index') ;
Route::get('/location_old', 'LocationController@index2') ;
Route::get('/login', 'LoginController@index')->name('login') ;
Route::get('/experience', 'ExperienceController@index') ;

Route::get('/booking/{step?}', 'BookingController@index')->name('bookingstep') ;


Route::get('/new_user', 'UserController@index') ;
Route::post('/new_user', 'UserController@store') ;

Route::get('/new_user/{id}', 'UserController@show') ;

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('/modal', 'ModalController@index');
