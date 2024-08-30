
@extends('Admin.app.layouts')
@section('admin')

<div class="content">
    <div class="py-4 px-3 px-md-4">
  
        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Users</div>
   
        </div>
<div class="row">

    <div class="col-12" >
       
        <div class="card mb-3 mb-md-4">
          
            <div class="card-header">
                <h5 class="font-weight-semi-bold mb-0">All  Users </h5>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">FullName</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Phone</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Addrees</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">created_at</th>
                    
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $row)
                        <tr>
                            <td class="py-3">{{$row->id}}</td>
                            <td class="py-3">{{$row->name}}</td>
                            <td class="py-3"> <div>{{$row->email}}</div></td>
                            <td class="py-3"> <div class="text-muted">{{$row->phone}}</div>
                            </td>
                            <td class="py-3">{{$row->addrees}}</td>
                            <td class="py-3">{{$row->created_at}}</td>
                           
                        
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
