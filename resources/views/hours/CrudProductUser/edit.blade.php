@extends('hours.Layout.app')

@section('frontuser')
<section id="center" class="contact-us-single">

<form action="{{ route('my_product_update',$editproduct->id) }}" method="post" enctype="multipart/form-data">
            
    @csrf 
        <div class="col-sm-6 cop-ck">
            <h2>Edit Your Products</h2>
            <div class="row cf-ro">
                <div class="col-sm-3"><label> Name :</label></div>
                <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name"value="{{$editproduct->name}}" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Price :</label></div>
                <div class="col-sm-8"><input type="text" name="price" placeholder="Enter Price " value="{{$editproduct->price}}"class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Quanttay :</label></div>
                <div class="col-sm-8"><input type="text" name="quanttay" placeholder="Enter quanttay "value="{{$editproduct->quanttay}}" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Category :</label></div>
                <div class="col-sm-8"><input type="text" name="category" placeholder="Enter Category"value="{{$editproduct->category}}" class="form-control input-sm"></div>
            </div>
           
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Description:</label></div>
                <div class="col-sm-8">
                    <textarea rows="5" placeholder="Enter Your description"name="description" value="{{$editproduct->description}}" class="form-control input-sm"></textarea>
                </div>
            </div>
            <div class="row cf-ro">
                <label>Old Image : </label>
                <img src="/productsimage/{{$editproduct->imge}}" height="100" width="100" class="img_deg">
            </div>
            <div class="row cf-ro"> 
                <div class="col-sm-3"><label></label></div>
                <div class="col-sm-8">
                    <button class="btn btn-success btn-sm">Update</button>
                </div>
            </div>
        </div>
        </form>
    </div>
 
</section>
@endsection
    