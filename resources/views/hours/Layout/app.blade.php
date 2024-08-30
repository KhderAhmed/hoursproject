<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Smarteyeapps</title>
    <link rel="shortcut icon" href="{{ asset('front/assets/images/fav.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}" />
</head>

<body>

    <!----- ############## Header ############### ----->

    <div class="header-cover">
        <header id="menu-jk" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-3  logo">
                        <img src="{{ asset('front/ssets/images/logo.png') }}a" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                class="fas d-block d-md-none  small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-xl-10 col-md-10 d-none d-md-block nav">
                        <ul>
                            <li><a href="{{ route('pagehome') }}">Home</a></li>
                            <li><a href="{{ route('pagefeatur') }}">Features</a></li>
                            <li><a href="{{ route('pageabout') }}">About</a></li>
                            <li><a href="{{ route('pagecontact') }}">Contact US</a></li>
                            <li><a href="{{ route('pageproduct') }}">Products</a></li>

                            @if (Route::has('login'))

                                @auth()

                                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="{{ route('my_account') }}">MyProfile</a>
          <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
          <div class="dropdown-divider"></div>
       
        </div>
      </li>
                                  <li><a href="{{ route('create_product') }}">Create</a></li>
                                    <li><a href="{{ route('my_product') }}">Show</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            @endif


                        </ul>
                    </div>

                </div>
            </div>
        </header>
    </div>





    <!----- ############# Slider ################ ----->

    <div class="slider container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto detail">
                    <h2>Hours Project </h2>



                    <div class="img-cover">
                        <img src="{{ asset('front/assets/images/smartwatch-png-3.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>




    @yield('frontuser')






</body>

<script src="{{ asset('front/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('front/assets/js/script.js') }}"></script>

</html>
