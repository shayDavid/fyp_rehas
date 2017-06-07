@extends('layouts.rpMaster')
@section('header')
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
            50px; font-family: FontAwesome; font-size: x-large">ReHAS</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="ereferral">
                        <i class="fa fa-envelope fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i>
                    </a>
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
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
    </div>
@endsection
@section('main')
    <div class="container container-fluid">
        <div class="row">
            <div class=" leftbar col-md-3" id="sidebar">
                <ul  class="leftbar nav nav-pills nav-stacked">
                   @include('includes.sidebarRp')
                </ul>
            </div>
            <div class="col-md-9" id="top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title-lg" style="text-align: center; font-family: FontAwesome">Referral Hospital Dashboard</h3>
                        </div>

                        <div class="panel-body">
                            <div class="article-header"></div>
                            <div class="article-body"></div>
                            <div></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer>
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection