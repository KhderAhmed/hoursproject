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
                            <a href="{{ route('product') }}">Products</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create New Products</li>
                    </ol>
                </nav>
                <!-- End Breadcrumb -->

                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                    <div class="h3 mb-0">Create New Products</div>
                </div>
               
               
             
                <!-- Form -->
       
                    <form action="{{route('productstore')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control"  name="name" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Description</label>
                                <input type="text" class="form-control"  name="description" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="">Category</label>
                                <input type="text" class="form-control"  name="category" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="">Qantylly</label>
                                <input type="number" class="form-control"  name="quanttay" required>
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label >Price</label>
                                <input type="number" class="form-control" name="price" required>
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="">Image</label>
                                <input type="file" class="form-control"  name="imge" required>
                            </div></div>
                            
                    
                        <button type="submit" class="btn btn-success float-right ">Create</button>
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