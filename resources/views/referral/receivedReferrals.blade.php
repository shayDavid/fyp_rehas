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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>&nbsp;User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp;Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('hisLogout') }}"><i class="fa fa-sign-out fa-fw"></i>&nbsp;Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
    </div>
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="leftbar col-md-3" id="sidebar">
                <ul class="leftbar nav nav-pills nav-stacked">
                    @include('includes.sidebarRp')
                </ul>
            </div>
            <div id="top" class="col-md-9">
                {{-- View attributes of the referral status and available referals here--}}
                <form class="well form-horizontal">
                    <fieldset>
                        <legend><h2 style="text-align: center;">Received Referrals</h2></legend>
                        <div>
                            {{-- this table data can be fetched from a controller as an array of data--}}
                            <table id="receivedReferral" class="table table-hover table-responsive"
                            summary="this table display data received from non-referral hospitals,
                            Referral hospital can decide whether to accept or deny referral letter">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Reg#</th>
                                    <th>Patient name</th>
                                    <th>Hospital name</th>
                                    <th>Issuing date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
@section('footer')
    <footer style="background-color: #36A172;">
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection