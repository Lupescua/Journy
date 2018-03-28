<?php

namespace App\Http\Controllers;

use App\Experience;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $continent = $request->input('continent');
        return view('user.user_create');
        User::create('users', function (Blueprint $table) { // schema for table 'users'
            $table->increments('id');                         // add column 'id' that will be AI PK
            $table->string('name');                           // create a string column 'name'
            $table->string('email')->unique();                // create a string column 'email' which will be unique
            $table->string('password');                       // create a string column 'password'
            $table->rememberToken();                          // add a special remember token column
            $table->timestamps();                             // add common columns 'created_at' and 'updated_at'
        });
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->agree_to_terms != true){
            $user =  new User();
            $user->name = $request->name;
            $user->password = 'set_from_controller';
            $user->email = $request->email;
            $user->adress_country = $request->adress_country;
            $user->adress_city = $request->adress_city;
            $user->adress_state = $request->adress_state;
            $user->adress_street = $request->adress_street;
            $user->adress_zip = $request->adress_zip;
            $user->prefered_language = $request->prefered_language;
            $user->user_tags = $request->user_tags;
            $user->save();
            //redirect to show page
            return redirect(action('UserController@show',[$user->id]));
        }
            return redirect(action('UserController@index'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.user_page',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
