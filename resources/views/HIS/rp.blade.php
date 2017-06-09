@extends('layouts.rpMaster')
@section('nameTitle') Referral @endsection
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
                        <li><a href="{{ route('hisLogout') }}"><i class="fa fa-sign-out fa-fw"></i>&nbsp;Logout</a>
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
    <div class="container-fluid" style="padding-top: 12px">
        <div class="row">
            <section class="col-md-3">
                <nav class="leftbar">
                    <div class="container-fluid">

                        <ul class="nav nav-pills nav-stacked" style="font-family: FontAwesome">
                            <li><a href="{{route('rp')}}" style="color: #FFFFFF;"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li><br/>
                            <li><a href="#{{--{{route('')}}--}}" style="color: #FFFFFF;"><i class="fa fa-user-circle-o fa-fw"></i>&nbsp;Outpatients</a><br/>
                            <li><a href="{{route('dashboard')}}" style="color: #FFFFFF;"><i class="fa fa-file-archive-o fa-fw"></i>&nbsp;eReferral</a></li><br/>
                            <li><a href="#" style="color: #FFFFFF;"><i class="fa fa-safari fa-fw"></i>&nbsp;Services</a></li><br/>
                            <li><a href="#" style="color: #FFFFFF;"><i class="fa fa-cog fa-fw"></i>&nbsp;Settings</a></li><br/>
                        </ul>
                    </div>
                </nav>
            </section>
            <div class="col-md-9">
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="info"><strong>Welcome, {{ Session::get('doctorName') }}</strong></td>
                    </tr>
                    </tbody>
                </table>
                <h3 class="text-right small text-letterspacing">{{Session::get('hospitalName')}}</h3>
                <hr>
                <div style="padding-top: 12px">
                    <p>Welcome to the Health Information System for Referral Hospitals</p>
                    <hr>
                    <p><strong>Guidelines</strong></p><hr>
                    <p>Among many functions of HIS, Dealing with referred patients is one of them</p>

                    <strong>View Referral</strong>
                    <hr>
                    <p>This functionality allows a doctor, here referred as "Referral Practitioner" to
                    <ul>
                        <li class="info">View all referral received from different hospitals</li><hr>
                        <li class="info">Review referral reasons, diagnosis and recommendations</li><hr>
                        <li class="info">Deciding on whether to accept or deny the referral</li><hr>
                        <li class="info">If Doctor accept a referral, Appointment should be put in place and updating the status of the referral</li><hr>
                        <li class="info">Else if, Referral is denied, Doctor will be redirected back to view page</li><hr>
                    </ul>
                    </p>

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
