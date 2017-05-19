@extends('layouts.master')
@section('title')
    ReHAS
@endsection

@section('content')
        <div class=" content container-fluid">
            <div class="row">
                <div class="col-md-9">
                    {{--@include('includes.headerSessions')--}}
                    <section class=" leftbar col-md-3">
                        <img  src="{{URL::to('images/noavatar.jpg')}}" align="middle">
                        <div class="dr_title  panel panel-success">
                            <h3>Admin</h3>
                            <h3>admin</h3>
                        </div>
                        {{--side bar links --}}
                        <ul class="leftbar  nav nav-pills nav-stacked">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="register">Hospital</a></li>
                            <li><a href="hospital" >view</a></li>
                            <li><a href="#Update">update</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#about">About Us</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
@endsection