
@extends('hours.Layout.app')

@section('frontuser')
<section class="faq-qq">
    <div class="container">
        <div class="session-title row">
            <h2>Our Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. oluptatem, inventore</p>
        </div>
        <div class="faq-row row">
            <div class="col-md-6">
                <div class="facc">
                    @foreach ($staticcompoments as $item)
                  
                       <p><i></i>Loction : {{ $item->loction }}</p>
                       <p ><i></i> Email : {{ $item->email }}</p>
                       <p ><i></i> Phone : {{ $item->PhoneNum }}</p>
                
                    @endforeach
                  
                </div>
            </div>
            
            
            </div>
        </div>
    </div>
</section>

@endsection