<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Auth;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class CrudProductUserController extends Controller
{
    public function showproduct($id)
    {
        // $Product = Products::find($id);, compact('Product')

        return view('hours.CrudProductUser.show');
    }
    public function create_product()
    {
        return view('hours.CrudProductUser.create');
    }
    public function user_product_store(Request $request)
    {
        $user = Auth()->user();

        $user_id = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;

        $product = new Products();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quanttay = $request->quanttay;
        $product->description = $request->description;
        $product->user_id = $user_id;
        $product->name = $name;
        $product->usertype = $usertype;

        $image = $request->imge;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->imge->move('productsimage', $imagename);

            $product->imge = $imagename;
        }

        $product->save();


        return redirect()->back();

    }

    public function my_product()
    {
        $user = Auth::user();

        $user_id = $user->id;

        $data = Products::where('user_id', '=', $user_id)->get();

        return view('hours.CrudProductUser.show', compact('data'));

    }

    public function my_product_delete($id)
    {
        $post = Products::find($id);

        $post->delete();

        return redirect()->back()->with('massage', 'The Post Deleted Successfully');
    }



    public function my_product_edit($id)
    {

       $editproduct = Products::find($id);

        return view('hours.CrudProductUser.edit',compact('editproduct'));

        
    }


    public function my_product_update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quanttay = $request->quanttay;
        $product->description = $request->description;

        $image = $request->imge;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->imge->move('productsimage', $imagename);

            $product->imge = $imagename;
        }

        $product->save();


        return redirect()->back()->with('massage', 'The Post Updated Successfully');
    }


    public function stutaccpet($id)
    {
        $status = Products::find($id);

        $status->is_visible = 1;

        $status->save();

        return redirect()->back()->with('message', 'Successfully');
    }


    public function stutasremove($id)
    {
        $status = Products::find($id);

        $status->is_visible = 0;

        $status->save();

        return redirect()->back()->with('message', 'Successfully');
    }


}
