
@extends('Admin.app.layouts')
@section('admin')

<div class="content">
    <div class="py-4 px-3 px-md-4">
  
        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">ContactUs</div>
   
        </div>
<div class="row">

    <div class="col-12" >
       
        <div class="card mb-3 mb-md-4">
          
            <div class="card-header">
                <h5 class="font-weight-semi-bold mb-0">All ContactUs </h5>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Subject</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Message</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">created_at</th>

                            {{-- <th class="font-weight-semi-bold border-top-0 py-2">SentAt</th> --}}
                           
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $row)
                        <tr>
                            <td class="py-3">{{$row->id}}</td>
                            <td class="py-3">{{$row->name}}</td>
                            <td class="py-3"> <div>{{$row->email}}</div></td>
                            <td class="py-3"> <div class="text-muted">{{$row->subject}}</div>
                            </td>
                            <td class="py-3">{{$row->message}}</td>
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
