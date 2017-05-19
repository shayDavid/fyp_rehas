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
                        <img  src="{{URL::to('images/noavatar.jpg')}}" class="img-circle" align="middle">
                        <div class="dr_title  panel panel-success">
                            <h3>Admin</h3>
                            <h3>admin</h3>
                        </div>
                        {{--side bar links--}}
                        <ul class="leftbar  nav nav-pills nav-stacked">
                            <li><a href="#home" style="color: #ffffff;">Home</a></li><br/>
                            <li><a href="register" style="color: #ffffff;">Hospital</a></li><br/>
                            <li><a href="hospital" style="color: #ffffff;">view</a></li><br/>
                            <li><a href="#Update"  style="color: #ffffff;">update</a></li><br/>
                            {{--<li><a href="#support" style="color: #ffffff;">Support</a></li><br/>
                            <li><a href="#about" style="color: #ffffff;">About Us</a></li><br/>--}}
                        </ul>
                    </section>
                </div>
            </div>
        </div>
@endsection