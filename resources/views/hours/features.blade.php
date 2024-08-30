
@extends('hours.Layout.app')

@section('frontuser')


<div id="blog" class="container-fluid blog">
    <div class="container">
        <div class="session-title">
            <h2>Key Features of this Hours</h2>
           
        </div>
  
        <div class="blog-row row">
            @foreach ($futureproduct as $item)
            <div class="col-lg-4 col-md-6 ">
                <div class="blog-col">
                    <img src="/productsimage/{{$item->imge}}"  alt="">
                    <h4>{{$item->category}}</h4>
                    <p>{{$item->description}}</p>
                    <p>{{$item->name}}</p>
                </div>

            </div>      
        @endforeach
 

        </div>
    </div>

</div>

@endsection