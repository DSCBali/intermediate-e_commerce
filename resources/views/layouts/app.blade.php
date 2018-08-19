<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/colorbox.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" title="style" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/styleswitcher.css') }}">
	<link rel="alternate stylesheet" type="text/css" media="screen" title="green" href="{{ asset('assets/css/green.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="lightblue" href="{{ asset('assets/css/lightblue.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="orange" href="{{ asset('assets/css/orange.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow" href="{{ asset('assets/css/yellow.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="red" href="{{ asset('assets/css/red.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-5" href="{{ asset('assets/css/color-5.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-6" href="{{ asset('assets/css/color-6.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-7" href="{{ asset('assets/css/color-7.css') }}"/>
	<link rel="alternate stylesheet" type="text/css" media="screen" title="color-8" href="{{ asset('assets/css/color-8.css') }}"/>
</head>
<body>
    <div id="app">
        <div id="header">
            <div class="header-body">
                <div class="container beta-relative">
                    <div class="pull-left">
                        <a href="index.html" id="logo"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                        <span class="slogan">a premium HTML Template</span>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- .container -->
            </div> <!-- .header-body -->
            <div class="header-bottom">
                <div class="container">
                    <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                    <div class="visible-xs clearfix"></div>
                    <nav class="main-menu">
                        <ul class="l-inline ov">
                            <li><a href="/">Home</a></li>
                            @foreach($categories as $category)
                                <li><a href="/{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div> <!-- .container -->
            </div> <!-- .header-bottom -->
        </div> <!-- #header -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
	<script src="{{asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('assets/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
	<script src="{{asset('assets/vendors/animo/Animo.js')}}"></script>
	<script src="{{asset('assets/vendors/dug/dug.js')}}"></script>
	<script src="{{asset('assets/js/scripts.min.js')}}"></script>
	<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('assets/js/styleswitcher.js')}}"></script>
</body>
</html>
