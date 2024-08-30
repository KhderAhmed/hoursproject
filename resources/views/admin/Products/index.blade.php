
@extends('Admin.app.layouts')
@section('admin')

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
    <div> <a href="{{ route('productcreate') }}" ><button class="btn btn-success">create new Products</button></a></div>
        </div>
<div class="row">

    <div class="col-12" >
       
        <div class="card mb-3 mb-md-4">
          
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
                            <th class="font-weight-semi-bold border-top-0 py-2">Fuetured</th>
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
                                <a href="{{route('productstutaccpet',$row->id)}}"
                                    onclick="return confirm('Are You Sure Accept This')"
                                     class="btn btn-outline-primary"> Active</a>
                 
                             
                             <a href="{{route('productstutasremove',$row->id)}}"
                                    onclick="return confirm('Are You Sure Remove This')" 
                                    class="btn btn-danger"> Pending</a></td>
                                    <td class="py-3">
                                        <a href="{{route('productsis_futshredtrue',$row->id)}}"
                                            onclick="return confirm('Are You Sure Accept This')"
                                             class="btn btn-outline-primary"> True</a>
                         
                                     
                                     <a href="{{route('productis_futshredfulse',$row->id)}}"
                                            onclick="return confirm('Are You Sure Remove This')" 
                                            class="btn btn-danger"> Fulse</a></td>
                            </td>
                            <td class="py-3">
                                <div class="position-relative">
 <a id="dropDown16Invoker" class="link-dark d-flex" href="#" 
 aria-controls="dropDown16" aria-haspopup="true" aria-expanded="false" 
 data-unfold-target="#dropDown16" data-unfold-event="click" 
 data-unfold-type="css-animation" data-unfold-duration="300" 
 data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                        <i class="gd-more-alt icon-text"></i>
                                    </a>

                                    <ul id="dropDown16" class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="dropDown16Invoker" style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                        <li class="unfold-item">
                     <a class="unfold-link media align-items-center text-nowrap" href="{{route('productedit',$row->id)}}">
                                                <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                <span class="media-body">Edit</span>
                                            </a>
                                        </li>
                                        <li class="unfold-item">
                
                                            <a class="unfold-link media align-items-center text-nowrap" 
                                            onclick="return confirm('Are You Sucre Delete This')"
                                            href="{{route('productdelete',$row->id)}}">
                                                <i class="gd-close unfold-item-icon mr-3"></i>
                                                <span class="media-body">Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
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
