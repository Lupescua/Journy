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
//Auth::routes();

Route::get('/', 'HomepageController@index')  ;
Route::get('/location', 'LocationController@index') ;
Route::get('/location_old', 'LocationController@index2') ;
Route::get('/login', 'LoginController@index')->name('login') ;

Route::get('/new_experience/{id?}', 'ExperienceController@index') ;
Route::post('/new_experience', 'ExperienceController@store') ;
Route::get('/experience/{name?}', 'ExperienceController@create') ;

//Route::get('/experience/{about_us}', 'ExperienceController@create') ;

Route::get('/booking/{step?}', 'BookingController@index')->name('bookingstep') ;

Route::post('upload', 'UploadController@upload');

Route::get('/register', 'UserController@step1')->name('register');
Route::post('/register', 'UserController@step1store');
Route::get('/new_user', 'UserController@step2') ;
Route::post('/new_user', 'UserController@store') ;

Route::get('/new_user/{id}', 'UserController@show') ;


Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('/modal', 'ModalController@index');

Route::get('/privacy_policy', function () {
    return view('user.privacy_policy');
});
Route::get('/terms_and_conditions', function () {
    return view('user.terms_and_conditions');
});
