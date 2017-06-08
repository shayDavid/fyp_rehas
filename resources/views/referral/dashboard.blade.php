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
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>&nbsp;Settings</a>
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
    <div class="container container-fluid">
        <div class="row">
            <div class=" leftbar col-md-3" id="sidebar">
                <ul  class="leftbar nav nav-pills nav-stacked">
                   @include('includes.sidebarRp')
                </ul>
            </div>
            <div class="col-md-9" id="top">
                <table>
                    <tr>
                        <td>
                           <strong>Welcome to Referral hospital Application System </strong>
                        </td>
                    </tr>
                </table>
                <hr>

                <div style="padding-top: 12px">
                    <p><strong>Guidelines</strong></p>
                    <p>You can access ReHAS functionalities by following appropriate links as follows</p>
                    <hr>

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
    <footer style="background-color: #2b91a1;">
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection