@extends('layouts.master')
@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class=" leftbar col-md-3">
                <ul  class="leftbar nav nav-pills nav-stacked">
                    <li><a href="#home" style="color: #ffffff;"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li><br/>
                    <li><a href="register" style="color: #ffffff;"><i class="fa fa-hospital-o fa-fw"></i>Hospital</a></li><br/>
                    <li><a href="#registeredHospital" style="color: #ffffff;"><i class="fa fa-stethoscope fa-fw"></i>Doctor</a></li><br/>
                    <li><a href="#Update"  style="color: #ffffff;"><i class="fa fa-users fa-fw"></i>Patients</a></li><br/>
                    <li><a href="#support" style="color: #ffffff;"><i class="fa fa-gear fa-fw"></i>Settings</a></li><br/>
                    <li><a href="#about" style="color: #ffffff;">About Us</a></li><br/>
                </ul>
            </div>

            <div class="col-md-9" id="top">

            </div>
        </div>


    </div>
@endsection