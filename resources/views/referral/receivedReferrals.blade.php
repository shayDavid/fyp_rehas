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
                        @if(count($referrals)> 0)
                            <div>
                                {{-- this table data can be fetched from a controller as an array of data--}}
                                <table id="viewReferral" class="table table-responsive table-hover"
                                       summary="This table shows already processed referral letters from non-referral hospital">
                                    <caption class="text-center"></caption>
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Referral ID</th>
                                        <th>Patient Name</th>
                                        <th>Non-referral Hospital</th>
                                        <th>Issued Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for($i = 0; $i < count($referrals); $i++)
                                        <tr>
                                            <th scope="row">{{ $i + 1 }}</th>
                                            <td>{{ $referrals[$i]->rid }}</td>
                                            <td>{{ $patientName[$i] }}</td>
                                            <td>{{ $referrals[$i]->source }}</td>
                                            <td>{{ $referrals[$i]->issuedate }}</td>
                                            <td>{{ $referrals[$i]->status }}</td>
                                            <td><a href="{{ URL::route('openReferral', $referrals[$i]->rid ) }}" class="btn btn-primary">View</a></td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info"><p>No Referrals at the moment</p></div>
                        @endif
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
@section('footer')
    <footer style="background-color: #2b91a1;">
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection