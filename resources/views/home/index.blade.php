<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Hotel Management System &mdash; Home Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/assets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    @include('home.layouts._loader')
    <!-- end loader -->

    <!-- header -->
    @include('home.layouts._header')
    <!-- end header inner -->

    <!-- banner -->
    @include('home.layouts._carousel')
    <!-- end banner -->

    <!-- about -->
    @include('home.layouts._about')
    <!-- end about -->

    <!-- our_room -->
    @include('home.layouts._room')
    <!-- end our_room -->

    <!-- gallery -->
    @include('home.layouts._gallery')
    <!-- end gallery -->

    <!--  contact -->
    @include('home.layouts._contact')
    <!-- end contact -->

    <!--  footer -->
    @include('home.layouts._footer')
    <!-- end footer -->


    <!-- Javascript files-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
