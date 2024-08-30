<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('Back/img/favicon.ico')}}">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{asset('Back/demo/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('Back/demo/chartist-plugin-tooltip.css')}}">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset('Back/graindashboard/css/graindashboard.css')}}">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    <!-- Header -->
@include('Admin.app.header')    
    <!-- End Header -->
    <main class="main">
        <!-- Sidebar Nav -->
        @include('Admin.app.sidebar')  
        <!-- End Sidebar Nav -->
        @yield('admin')
        <!-- Footer -->
        @include('Admin.app.footer')  
        <!-- End Footer -->
    </div>
</main>
<script src="{{asset('Back/graindashboard/js/graindashboard.js')}}"></script>
<script src="{{asset('Back/graindashboard/js/graindashboard.vendor.js')}}"></script>

<!-- DEMO CHARTS -->
<script src="{{asset('Back/demo/resizeSensor.js')}}"></script>
<script src="{{asset('Back/demo/chartist.js')}}"></script>
<script src="{{asset('Back/demo/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('Back/demo/gd.chartist-area.js')}}"></script>
<script src="{{asset('Back/demo/gd.chartist-bar.js')}}"></script>
<script src="{{asset('Back/demo/gd.chartist-donut.j')}}s"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>