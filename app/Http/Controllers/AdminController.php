<?php

namespace App\Http\Controllers;

use App\Models\ConatctUs;
use Auth;
use Hash;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexuser()
    {
        
        $data['data'] = User::where('usertype','=','user')->get();
     
        
        return view('Admin.Users.index',$data);  
    }

    public function indexContactUs()
    {
        
        $data['data'] = ConatctUs::all();
       

        return view('Admin.ContactUs.index',$data);  
    }


    public function my_account_admin(Request $request)
    {

        $user = User::find(Auth::user()->id);


        return view('admin.Profile.edit', compact('user'));

    }





    public function my_account_stor_admin(Request $request)
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

        return redirect()->route('home')->with('success', ' The Profile Has Been Update');

    }

}























