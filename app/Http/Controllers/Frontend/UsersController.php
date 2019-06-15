<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(){

        return view('frontend.auth.login');

    }

    public function processLogin(Request $request){

        $this->validate($request,[

            'email'    => 'required|email',
            'password' => 'required'

        ]);

        $credentials = $request->except(['_token']);


        if (Auth::attempt($credentials)){

            return redirect()->route('dashboard');

        }else{

            return redirect()->route('login')->with('error', 'Invalid Credentials !');

        }


    }





    public function register(){

        return view('frontend.auth.registration');

    }

    public function storeUserInfo(Request $request){

        $this->validate($request,[

            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required'

        ]);


        $users = new User();
        $users->role_id = 3;
        $users->name = $request->input('name');
        $users->email = trim(strtolower($request->input('email')));
        $users->password = bcrypt($request->input('password'));
        $users->email_verification_token = str_random(32);
        $users->created_at = Carbon::now();
        $users->updated_at = Carbon::now();
        $users->save();

        return redirect()->route('register')->with('msg', 'Register Successfull');

    }


    public function logout(){

        Auth::logout();
        return redirect()->route('login')->with('msg', 'Logout Successfull');

    }

}
