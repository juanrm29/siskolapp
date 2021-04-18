<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Siskol">
    <meta name="author" content="Admin Siskol">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/imgs/favicon.png')}}">
    <title>Siskol Application - Sistem Informasi Inventaris Sekolah</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('plugins/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- Page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="single-page-bg">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Siskol Loading</p>
    </div>
</div>
<div id="main-wrapper">
    <div class="navbar-header mt-5 ml-5">
        <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('assets/imgs/Logo_Dark.png')}}" alt="homepage" class="dark-logo" style="width:150px;"> </a> </div>
    @yield('content')
</div>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('plugins/vendors/jquery/jquery.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('assets/js/single-page.js')}}"></script>
</body>
</html>