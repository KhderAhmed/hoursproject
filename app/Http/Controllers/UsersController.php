<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Validator;

class UsersController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }


    public function postregister(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'addrees' => $request->addrees,

        ]);

        return redirect()->route('login');
    }
    public function postlogin(Request $request)
    {
        $validator = Validator::make(request()->all(), [

            'email' => 'required|email',

            'password' => 'required|min:8',

        ]);

        if ($validator->fails()) {

            return redirect()->route('login')->with('error', $validator->errors());

        }
        $check = $request->all();

        if (Auth::guard('web')->attempt(['email' => $check['email'], 'password' => $check['password']])) {

            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return redirect()->route('pagehome')->with('success', 'The Email Not Be Valditer');

            } else if ($usertype == 'admin') {

                return redirect()->route('home');

            } else {
                return redirect()->back();
            }
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }


    public function my_account(Request $request)
    {

        $userprofile = User::find(Auth::user()->id);


        return view('hours.Profile.edit', compact('userprofile'));

    }





    public function my_account_stor(Request $request)
    {

        $uservalted = request()->validate([

            'email' => 'required|unique:users,email,' . Auth::user()->id
        ]);

        $uservalted = User::find(Auth::user()->id);
        $uservalted->name = $request->name;
        $uservalted->email = $request->email;

        if (!empty($request->password)) {

            $uservalted->password = Hash::make($request->password);
        }

        $uservalted->save();

        return redirect()->route('pagehome')->with('success', ' The Profile Has Been Update');

    }

}



















