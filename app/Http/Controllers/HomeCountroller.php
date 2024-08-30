<?php

namespace App\Http\Controllers;

// use App\Models\ConatctUs;

use App\Models\ConatctUs;
use App\Models\Products;
use App\Models\StaticPages;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HomeCountroller extends Controller
{

  public function indexpage()
  {
    $allproduct = Products::where('is_visible','=',1)->get();

     return view("index",compact('allproduct'));
  }


  public function aboutpage()
    {
      $data['staticcompoments'] = StaticPages::all();
       return view("hours.about",$data);
    }


    public function productpage()
    {
      $allproduct = Products::where('is_visible','=',1)->get();


       return view("hours.product",compact('allproduct'));
    }

    public function featurespage()
    {
      $futureproduct = Products::where('is_futshred','=',1)->get();

       return view("hours.features",compact('futureproduct'));
    }
    public function  contactpage()
    {

      return view("hours.contact");
    }

    public function contactpagestore(Request $request)
    {
      ConatctUs::insert([
    'name'=>$request->name,
    'email'=>$request->email,
    'subject'=>$request->subject,
    'message'=>$request->message,
        ]);
    
        return redirect()->back();
    }
    
    public function index()
{
  $data['TotalUser'] = User::count();
  $data['Totalconact'] = ConatctUs::count();
  $data['TotalProduct'] = Products::count();
        if (Auth::id()){
 
            $usertype=Auth()->user()->usertype;
 
            if ($usertype == 'user'){
 
              return view('index');
            }
 
      else if ($usertype == 'admin'){
 
        return view('admin.dashbord.index',$data);
 
 }else{
          return redirect()->back();
      }
        }
    }
   




}
