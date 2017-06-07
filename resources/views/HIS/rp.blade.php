@extends('layouts.rpMaster')
@section('nameTitle') Referral @endsection
@section('header')
    {{--<header>--}}
    <div id="wrapper">
        <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('rp')}}" style="color: #FFFFFF; padding-left:
            50px; font-family: FontAwesome; font-size: x-large">Referral Practitioner</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="ereferral">
                        <i class="fa fa-envelope fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                {{--<ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>--}}
                <!-- /.dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
    </div>
    {{--</header>--}}
@endsection
@section('main')
    <div class="container-fluid" style="padding-top: 12px">
        <div class="row">
            <section class="col-md-3">
                <nav class="leftbar">
                    <div class="container-fluid">

                        <ul class="nav nav-pills nav-stacked" style="font-family: FontAwesome">
                            <li><a href="{{route('rp')}}" style="color: #FFFFFF;"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li><br/>
                            <li><a href="#{{--{{route('')}}--}}" style="color: #FFFFFF;"><i class="fa fa-user-circle-o fa-fw"></i>Outpatients</a><br/>
                            <li><a href="{{route('dashboard')}}" style="color: #FFFFFF;"><i class="fa fa-file-archive-o fa-fw"></i>eReferral</a></li><br/>
                            <li><a href="#" style="color: #FFFFFF;"><i class="fa fa-safari fa-fw"></i>Services</a></li><br/>
                            <li><a href="#" style="color: #FFFFFF;"><i class="fa fa-gear fa-fw"></i>Settings</a></li><br/>
                        </ul>
                    </div>
                </nav>
            </section>
            <div class="col-md-6">
                <div class="panel"></div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer>
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection
