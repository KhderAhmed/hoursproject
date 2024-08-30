<?php

namespace App\Http\Controllers;

use App\Models\Others;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexproduct()
    {
        
        $data = Products::all();

        return view('Admin.Products.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createproduct()
    {
        return view('Admin.Products.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
  
    public function storeproduct(Request $request)
    {
        $others= new Products();
        $others ->name = $request->name;
        $others ->price = $request->price;
        $others ->category = $request->category;
        $others ->quanttay = $request->quanttay;  
        $others ->description = $request->description;  
        $image = $request->imge;
    
           if ($image) {
    
               $imagename = time() . '.' . $image->getClientOriginalExtension();
    
               $request->imge->move('productsimage', $imagename);
    
               $others->imge = $imagename;
             
           }
    
           $others->save();  
    
                return redirect()->route('product')->with('message','Successfully'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editproduct(string $id)
    {
        $data = Products::find($id);
        return view('Admin.Products.update',compact('data'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateproduct(Request $request, string $id)
    {
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
  
        $others = Products::find($id);
        $others ->user_id = $user_id;
        $others->usertype = $usertype;
        $others ->name = $name;
        $others ->name = $request->name;
        $others ->price = $request->price;
        $others ->category = $request->category;
        $others ->quanttay = $request->quanttay;  
        $others ->description = $request->description;  
        $image = $request->imge;
    
           if ($image) {
    
               $imagename = time() . '.' . $image->getClientOriginalExtension();
    
               $request->imge->move('productsimage', $imagename);
    
               $others->imge = $imagename;
             
           }
    
           $others->save();  
    
                return redirect()->route('product')->with('message','Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyproduct(string $id)
    {
        $others = Products::find($id);

        $others->delete();
 
     return redirect()->back()->with('message','Successfully');
    }
    public function stutaccpet($id)
    {
        $status = Products::find($id);
   
        $status -> is_visible =1;
   
        $status->save();
   
        return redirect()->back()->with('message','Successfully');
    }
   
   
       public function stutasremove($id)
       {
           $status = Products::find($id);

           $status -> is_visible =0;
   
           $status->save();
   
           return redirect()->back()->with('message','Successfully');
       }
       public function is_futshredtrue($id)
       {
           $status = Products::find($id);
      
           $status -> is_futshred =1;
      
           $status->save();
      
           return redirect()->back()->with('message','Successfully');
       }
      
      
          public function is_futshredfulse($id)
          {
              $status = Products::find($id);
   
              $status -> is_futshred =0;
      
              $status->save();
      
              return redirect()->back()->with('message','Successfully');
          }
}
