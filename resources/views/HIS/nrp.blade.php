@extends('layouts.rpMaster')
@section('nameTitle') Non-Referral @endsection
@section('header')
    {{--<header>--}}
    <div id="wrapper">
        <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0; background-color:#36A172 ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('nrp')}}" style="color: #FFFFFF; padding-left:
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
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>&nbsp;Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('hisLogout') }}"><i class="fa fa-sign-out fa-fw"></i>&nbsp;Logout</a>
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
    <div class="container-fluid">
        <div class="row">
            <section class="col-xs-12">
                <nav class="nav navbar-primary">
                    <div class="container-fluid">
                        <ul class="nav nav-justified" style="font-family: FontAwesome">
                            <li><a href="{{route('nrp')}}">Home</a></li>
                            <li><a href="#{{--{{route('')}}--}}">Outpatients</a></li>
                            <li><a href="{{route('home')}}">eReferral</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                </nav>
            </section>
            <section style="padding-top: 12px">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-md-9 col-md-offset-2">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="success"><strong>Welcome, Dr.&nbsp; {{ Session::get('doctorName') }}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                            <h3 class="text-right small text-letterspacing">{{Session::get('hospitalName')}}</h3>
                            <hr>
                            <div style="padding-top: 12px">
                                <p><strong>Guidelines</strong></p>
                                <p>You are successful login to Non-Referral HIS</p>
                                <hr>
                                <p>You can start to process referral by just clicking "<strong>eReferral</strong>"&nbsp;link above</p>
                                <hr>

                                <strong>eReferral</strong>
                                <hr>
                                <p>This link redirects a doctor, here referred as "Referral Practitioner" to
                                <ul>
                                    <li class="info">eReferral module where you can create referrals and send them to appropriate referral Hospital</li><hr>
                                    <li class="info">View all referrals created before and their status.</li><hr>
                                </ul>
                                </p>

                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('footer')
    <footer style="background-color: #36A172;">
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Non-Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection
