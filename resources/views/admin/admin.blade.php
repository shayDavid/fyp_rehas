@extends('layouts.master')
@section('title')
    ReHAS
@endsection

@section('content')
        <div class=" content container-fluid">
            <div class="row">
                <div class=" leftbar col-md-3">
                   <!-- side bar links-->
                    <ul class="leftbar  nav nav-pills nav-stacked">
                        <li><a href="#home" class="whiteColor"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li><br/>
                        <li><a href="register" class="whiteColor"><i class="fa fa-hospital-o fa-fw"></i>Hospital</a></li><br/>
                        <li><a href="#registeredHospital" class="whiteColor"><i class="fa fa-stethoscope fa-fw"></i>Doctor</a></li><br/>
                        <li><a href="#Update"  class="whiteColor"><i class="fa fa-users fa-fw"></i>Patients</a></li><br/>
                        <li><a href="#support" class="whiteColor"><i class="fa fa-gear fa-fw"></i>Settings</a></li><br/>
                        <li><a href="#about" class="whiteColor">About Us</a></li><br/>
                    </ul>
                </div>
                <div class="col-md-9" id="top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Admin dashboard</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection