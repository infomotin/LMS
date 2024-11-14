<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aduca -  Education HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- end inject -->
</head>
<body>
<!--======================================
        START HEADER AREA
    ======================================-->
@include('frontend.dashboard.body.header')
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->
<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('frontend.dashboard.body.sidebar')
    <!-- end off-canvas-menu -->
    @yield('content')
    <!-- end dashboard-content-wrap -->
</section>
<!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
<!-- Modal -->
@include('frontend.body.model')
<!-- end modal -->

<!-- template js files -->
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/fancybox.js')}}"></script>
<script src="{{asset('frontend/js/chart.js')}}"></script>
<script src="{{asset('frontend/js/doughnut-chart.js')}}"></script>
<script src="{{asset('frontend/js/bar-chart.js')}}"></script>
<script src="{{asset('frontend/js/line-chart.js')}}"></script>
<script src="{{asset('frontend/js/datedropper.min.js')}}"></script>
<script src="{{asset('frontend/js/emojionearea.min.js')}}"></script>
<script src="{{asset('frontend/js/animated-skills.js')}}"></script>
<script src="{{asset('frontend/js/jquery.MultiFile.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>