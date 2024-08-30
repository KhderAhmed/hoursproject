<?php

namespace App\Http\Controllers;

use App\Models\StaticPages;
use Illuminate\Http\Request;

class StaticController extends Controller
{
   public function createsaticpages()
   {
    
    return view('Admin.StaticPage.create');  
   }


   public function storestaic(Request $request)
   {
    StaticPages::insert([
   'loction'=>$request->loction,
   'email'=>$request->email,
   'PhoneNum'=>$request->PhoneNum,
  
       ]);
   
       return redirect()->back();
   }

   public function indexsaticpages()
    {
        
        $data = StaticPages::all();

        return view('Admin.StaticPage.index',compact('data'));  
    }
    public function destroystatic(string $id)
    {
        $others = StaticPages::find($id);

        $others->delete();
 
     return redirect()->route('staticpages')->with('message','Successfully');
    }

}
