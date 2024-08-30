

@extends('hours.Layout.app')

@section('frontuser')
<div id="products" class="our-products container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Our Products</h2>
         
        </div>
        <div class="product-roew row">
            @foreach ($allproduct as $item)
            <div class="col-md-3">
                <div class="pro-cover">
                    <div class="product-img">
                        <img src="/productsimage/{{$item->imge}}" alt="">
                    </div>
                    <div class="product-detail">
                        <h4>{{$item->name}}</h4>
                        <p>{{$item->description}}</p>
                        <h2>${{$item->price}}</h2>
                    </div>
                </div>
            </div>
            @endforeach
          
     
        </div>
    </div>
</div>



    <!--*************** Our Products Starts Here ***************-->





    @endsection
    