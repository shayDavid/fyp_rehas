
@extends('layouts.master')
@section('title')
    ReHAS
@endsection

@section('content')
        <div class=" content container-fluid">
            <div class="row">
                <div class=" leftbar col-md-3" id="sidebar">
                   <!-- side bar links-->
                    <ul class="leftbar  nav nav-pills nav-stacked">
                        <li><a href="admin" style="color: #ffffff;"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li><br/>
                        <li><a href="register" style="color: #ffffff;"><i class="fa fa-hospital-o fa-fw"></i>Hospital</a></li><br/>
                        <li><a href="#registeredHospital" style="color: #ffffff;"><i class="fa fa-stethoscope fa-fw"></i>Doctor</a></li><br/>
                        <li><a href="#Update"  style="color: #ffffff;"><i class="fa fa-users fa-fw"></i>Patients</a></li><br/>

                        <li><a href="#report" style="color: #ffffff;"><i class="fa fa-file-archive-o fa-fw"></i>Reports</a></li><br/>
                       {{-- <li>
                            <a href="#" style="color: #ffffff;"><i class="fa fa-sitemap fa-fw"></i>Report and Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#Charts" style="color: #ffffff;"><i class="fa fa-line-chart fa-fw"></i>Charts</a>
                                </li>

                                <li>
                                    <a href="#report" style="color: #ffffff;"><i class="fa fa-file-archive-o fa-fw"></i>Reports</a>
                                </li>
                            </ul>
                        </li><br/>--}}
                        <li><a href="#support" style="color: #ffffff;"><i class="fa fa-gear fa-fw"></i>Settings</a></li><br/>

                    </ul>
                </div>
                <div class="col-md-9" id="top">
                    <div class="page-header">
                            <h1 style="font-family: FontAwesome">Admin dashboard</h1>
                        </div>
                    <!-- .row -->
                    <div class="row">
                        <!-- registered hospital-->
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-hospital-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>Hospitals registered</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#registeredHospital">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- /.end of registered hospital column-->

                        <!-- . reports -->
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-archive-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Reports</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#reports">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--/.end of report column -->

                        <!--doctor's list-->
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user-md fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>Doctors</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--/end of doctor's list-->
                    </div>
                    <div id="perfect_charts" class="col-lg-4"></div>
                </div>
            </div>
        </div>
@endsection