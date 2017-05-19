<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Bootstrap core css --}}
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="icon" href="{{URL::to('images/favicon.ico')}}">
    {{-- custome css --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/styles.css')}}">
    @yield('styles')
</head>
<body>
    @include('includes.header')
    <div class="container-fluid">@yield('content')
        {{--@include('includes.footer')--}}
    </div>

    @include('includes.footer')
</body>
</html>