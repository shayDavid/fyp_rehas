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
    <div class="container">
        <div class="row">
            <div class="leftbar col-md-3" id="sidebar">
                <ul>
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
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>12-001-001</td>
                                    <td>Otto</td>
                                    <td>Palestina</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>12-001-003</td>
                                    <td>Otto</td>
                                    <td>Palestina District Hospital</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>12-001-002</td>
                                    <td>Metemi kischwakubwa</td>
                                    <td>Muhimbili National Hospital</td>
                                    <td>date</td>
                                    <td>Denied</td>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                {{-- sample data should be deleted late--}}
                                <tr>
                                    <th scope="row">5</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection