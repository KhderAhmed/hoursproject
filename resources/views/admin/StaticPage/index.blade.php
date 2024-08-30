
@extends('Admin.app.layouts')
@section('admin')

<div class="content">
    <div class="py-4 px-3 px-md-4">
  
        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">StaticPages</div>
            <div> <a href="{{ route('saticpagescreate') }}" ><button class="btn btn-success">create new StaticPages</button></a></div>
   
        </div>
<div class="row">

    <div class="col-12" >
       
        <div class="card mb-3 mb-md-4">
          
            <div class="card-header">
                <h5 class="font-weight-semi-bold mb-0">All StaticPages </h5>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">Loction</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Phone</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Action</th>
                    
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $row)
                        <tr>
                            <td class="py-3">{{$row->loction}}</td>
                            <td class="py-3">{{$row->PhoneNum}}</td>
                            <td class="py-3"> <div>{{$row->email}}</div></td>
     <td class="py-3">      <a class="unfold-link media align-items-center text-nowrap" 
        onclick="return confirm('Are You Sucre Delete This')"
        href="{{route('staticdelete',$row->id)}}">
            <i class="gd-close unfold-item-icon mr-3"></i>
            <span class="media-body">Delete</span>
        </a>  </td>
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
