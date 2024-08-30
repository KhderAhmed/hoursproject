@extends('hours.Layout.app')

@section('frontuser')
<section id="center" class="contact-us-single">

    <form action="{{ route('my_account_stor') }}" method="post">
            
    @csrf 
        <div class="col-sm-6 cop-ck">
            <h2>Show Profile</h2>
            <div class="row cf-ro">
                <div class="col-sm-3"><label> Name :</label></div>
                <div class="col-sm-8"><input type="text" value="{{ $userprofile->name }}" name="name" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Email :</label></div>
                <div class="col-sm-8"><input type="text" name="email"  value="{{ $userprofile->email }}" class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Password :</label></div>
                <div class="col-sm-8"><input type="text" name="password" value="{{ $userprofile->password }}"class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Address :</label></div>
                <div class="col-sm-8"><input type="text" value="{{ $userprofile->addrees }}" name="addrees"class="form-control input-sm"></div>
            </div>
            <div class="row cf-ro">
                <div class="col-sm-3"><label>Phone :</label></div>
                <div class="col-sm-8"><input type="text" value="{{ $userprofile->phone }}" name="phone" class="form-control input-sm"></div>
            </div>

            <div class="row cf-ro">
                <div class="col-sm-3"><label></label></div>
                <div class="col-sm-8">
                    <button class="btn btn-success btn-sm">Update</button>
                </div>
            </div>
        </div>
        </form>
    </div>
 
</section>
@endsection
    