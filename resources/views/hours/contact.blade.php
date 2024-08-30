
@extends('hours.Layout.app')

@section('frontuser')
<section id="center" class="contact-us-single">


        <form action="{{ route('pagecontactstore') }}" method="post">
            @csrf 
        <div class="col-sm-6 cop-ck">
            <h2>Contact Form</h2>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Enter Name :</label></div>
                <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Email Address :</label></div>
                <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Enter Subject :</label></div>
                <div class="col-sm-8"><input type="text" name="subject" placeholder="Entersubject" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Enter Message:</label></div>
                <div class="col-sm-8">
                    <textarea rows="5" placeholder="Enter Your Message"name="message"  class="form-control input-sm"></textarea>
                </div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label></label></div>
                <div class="col-sm-8">
                    <button class="btn btn-success btn-sm">Send Message</button>
                </div>
            </div>
        </div>
        </form>
    </div>
  
</section>
@endsection
    