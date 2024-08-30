
@extends('auth.layouts.app')
@section('AuthPa')

<section class="section">

    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        

          <div class="card card-primary">
            <div class="card-header"><h4>Register</h4></div>

            <div class="card-body">
              <form method="POST" action="{{ route('postregister') }}">
                @csrf
                
                <div class="row">
                  <div class="form-group col-6">
                    <label for="frist_name"> Name</label>
                    <input id="name" type="text" class="form-control" name="name" autofocus>
                  </div>
              
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  <div class="invalid-feedback">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-6">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="" class="d-block">Addrees</label>
                    <input type="text" class="form-control pwstrength" data-indicator="pwindicator" name="addrees">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="" class="d-block">Phone</label>
                    <input  type="text" class="form-control pwstrength" data-indicator="pwindicator" name="phone">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Register
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="simple-footer">

          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection