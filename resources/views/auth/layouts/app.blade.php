<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> Smarteyeapps</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('Auth/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('Auth/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('Auth/assets/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('Auth/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{asset('Auth/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
 @yield('AuthPa')
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('Auth/assets/modules/jquery.min.js') }}"></script>
  <script src="{{asset('Auth/assets/modules/popper.js') }}"></script>
  <script src="{{asset('Auth/assets/modules/tooltip.js') }}"></script>
  <script src="{{asset('Auth/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{asset('Auth/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{asset('Auth/assets/modules/moment.min.js') }}"></script>
  <script src="{{asset('Auth/assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('Auth/assets/js/scripts.js') }}"></script>
  <script src="{{asset('Auth/assets/js/custom.js') }}"></script>
</body>
</html>