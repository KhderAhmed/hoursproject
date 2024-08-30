@extends('Admin.app.layouts')
@section('admin')

<div class="content">
    <div class="py-4 px-3 px-md-4">
        <div class="card mb-3 mb-md-4">
        @if (session()->has('message'))
        <div class="alert alert-success ">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session()->get('message')}}
        </div>
    @endif
            <div class="card-body">
                <!-- Breadcrumb -->
                <nav class="d-none d-md-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('staticpages') }}">Static Pages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create New Static Pages</li>
                    </ol>
                </nav>
                <!-- End Breadcrumb -->

                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                    <div class="h3 mb-0">Create New Static Pages</div>
                </div>
             
                <!-- Form -->
      
                    <form action="{{route('staicstore')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="">Phone</label>
                                <input type="text" class="form-control"  name="PhoneNum" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Loction</label>
                                <input type="text" class="form-control"  name="loction" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control"  name="email" required>
                            </div>
                      
                            
                        </div>
                        <button type="submit" class="btn btn-success float-right">Create</button>
                    </form>
                </div>
                <!-- End Form -->
            </div>
        </div>


    </div>


</div>
</div>
</main>


@endsection