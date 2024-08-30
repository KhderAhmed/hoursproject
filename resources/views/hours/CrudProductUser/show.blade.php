
@extends('hours.Layout.app')

@section('frontuser')
<div id="products" class="our-products container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Our Products</h2>
         
        </div>
        
<div class="content">
    <div class="py-4 px-3 px-md-4">
        @if (session()->has('message'))

        <div class="alert alert-success ">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session()->get('message')}}
        </div>
    @endif
        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Products</div>
    <div> <a href="{{ route('create_product') }}" ><button class="btn btn-success">create new Products</button></a></div>
        </div>
<div class="row">

    <div class="col-15" >
       
        <div class="card mb-4 mb-md-5">
          
            <div class="card-header">
                <h5 class="font-weight-semi-bold mb-0">All Products  </h5>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Category</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Quanttay</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Price</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Description</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Image</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">created_at</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td class="py-3">{{$row->id}}</td>
                            <td class="py-3">{{$row->name}}</td>
                            <td class="py-3"> <div>{{$row->category}}</div></td>
                            <td class="py-3"> <div class="text-muted">{{$row->quanttay}}</div>
                            </td>
                            <td class="py-3">{{$row->price}}</td>
                            <td class="py-3">{{$row->description}}</td>
                            <td class="py-3"><img class="img_deg"hight="100" width="100" src="/productsimage/{{$row->imge}}"></td>
                            <td class="py-3">{{$row->created_at}}</td>
                            <td class="py-3">
                                <a href="{{route('productaccpet',$row->id)}}"
                                    onclick="return confirm('Are You Sure Accept This')"
                                     class="btn btn-outline-primary"> Active</a>
                 
                             
                             <a href="{{route('productremove',$row->id)}}"
                                    onclick="return confirm('Are You Sure Remove This')" 
                                    class="btn btn-danger"> Pending</a></td>
                                    
                            <td class="py-3">
                                <a href="{{route('my_product_delete',$row->id)}}" onclick="return confirm('Are You Sucre Delete This')"  class="btn btn-danger">Delete</a>

                                <a href="{{route('product_edit',$row->id)}}" class="btn btn-primary">Edit</a> 
                            </td>
                        </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
        {{-- <div class="product-roew row">
            @foreach($data as $row)
            <div class="col-md-3">
                <div class="pro-cover">
                    <div class="product-img">
                        <img src="/productsimage/{{$row->imge}}" alt="">
                    </div>
                    <div class="product-detail">
                        <h4>{{ $row->name }}</h4>
                        <p>{{$row->description}}</p>
                        <h2>${{$row->price}}</h2>
                        <a href="{{route('my_product_delete',$row->id)}}" onclick="return confirm('Are You Sucre Delete This')"  class="btn btn-danger">Delete</a>

                         <a href="{{route('product_edit',$row->id)}}" class="btn btn-primary">Edit</a> 
                    </div>
                </div>
            </div>
            @endforeach

            </div>
        </div>
    </div> --}}
</div>



    <!--*************** Our Products Starts Here ***************-->


