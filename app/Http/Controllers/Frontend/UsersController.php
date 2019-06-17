<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Notifications\VerifyUsersEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class UsersController extends Controller
{
    public function login()
    {

        return view('frontend.auth.login');

    }

    public function processLogin(Request $request)
    {

        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required'

        ]);

        $credentials = $request->except(['_token']);

        $checkVerify = User::where('email', $request->email)->select(['email_verified_at'])->first();

        if ($checkVerify->email_verified_at == NULL) {

            return redirect()->route('login')->with('error', 'Your Email is not verified, Please verify your email');

        } elseif (Auth::attempt($credentials)) {

            return redirect()->route('dashboard');

        } else {

            return redirect()->route('login')->with('error', 'Invalid Credentials !');

        }


    }


    public function register()
    {

        return view('frontend.auth.registration');

    }

    public function storeUserInfo(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'

        ]);


        $user = new User();
        $user->role_id = 3;
        $user->name = $request->input('name');
        $user->email = trim(strtolower($request->input('email')));
        $user->password = bcrypt($request->input('password'));
        $user->email_verification_token = str_random(32);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();

        $user->notify(new VerifyUsersEmail($user));



        return redirect()->route('register')->with('msg', 'Register Successfull');

    }

    public function verify_email($token){

        $user = User::where('email_verification_token',$token)->first();
        $user->email_verified_at = Carbon::today();
        $user->save();

        return redirect()->route('login')->with('msg', 'Your Verify is successful, You can login.');

    }


    public function logout()
    {

        Auth::logout();
        return redirect()->route('login')->with('msg', 'Logout Successfull');

    }

}
