<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('nameTitle')</title>

    {{-- Bootstrap core css --}}

    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('node_modules/bootstrap-ui/bower_components/dist/css/bootstrap-ui.min.css')}}">
    <link rel="icon" href="{{URL::to('images/favicon.ico')}}">
    {{-- custome css --}}
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/masterNrp.css')}}">
    @yield('styles')
</head>
<body style="min-height: 658px">
    @yield('header')
    @yield('main')
    <script src="{{URL::to('js/bootstrap/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('node_modules/bootstrap-ui/bower_components/dist/js/bootstrap-ui.min.js')}}"></script>
    @yield('footer')
</body>
</html>