<?php

namespace App\Http\Controllers;

use App\Experience;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Input as Input;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    //display the registration form
    public function step1(Request $request)
    {
            return view('auth.register');
    }

    public function step1store(Request $request)
    {
        $request = request();
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        return redirect()->action('UserController@step2')->withInput()->with('step','2');
    }


    public function step2(Request $request)
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

        User::create('users', function (Blueprint $table) { // schema for table 'users'
            $table->increments('id');                         // add column 'id' that will be AI PK
            $table->string('name');                           // create a string column 'name'
            $table->string('email')->unique();                // create a string column 'email' which will be unique
            $table->string('password');                       // create a string column 'password'
            $table->rememberToken();                          // add a special remember token column
            $table->timestamps();                             // add common columns 'created_at' and 'updated_at'
        });


        return view('user.user_create');
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
            $user->password = $request->pass;
            $user->email = $request->email;
            $user->adress_country = $request->adress_country;
            $user->adress_city = $request->adress_city;
            $user->adress_state = $request->adress_state;
            $user->adress_street = $request->adress_street;
            $user->adress_zip = $request->adress_zip;
            $user->prefered_language = $request->prefered_language;
            $user->user_tags = $request->user_tags;
            if(Input::hasFile('photo')){
                $file = Input::file('photo');
                $user->photo = $file->getClientOriginalName();
                $file->move('img', $file->getClientOriginalName());
            }
            $user->save();

            event(new Registered($user));
            Auth::guard()->login($user);

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

    public function createExperiences($id)
    {
//        ExperienceController@index

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
