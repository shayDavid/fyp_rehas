@extends('layouts.master')
@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class=" leftbar col-md-3" id="sidebar">
                <ul  class="leftbar nav nav-pills nav-stacked">
                    <li><a href="{{route('dashboard')}}" style="color: #ffffff;"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li><br/>
                    <li><a href="{{route('received')}}" style="color: #ffffff;"><i class="fa fa-hospital-o fa-fw"></i>Received Referral</a></li><br/>
                    <li><a href="{{route('view')}}" style="color: #ffffff;"><i class="fa fa-stethoscope fa-fw"></i>View</a></li><br/>
                    <li><a href="{{route('rp')}}" style="color: #ffffff;"><i class="fa fa-home fa-fw"></i>HIS</a></li><br/>
                    <li><a href="#{{--{{route('view')}}--}}" style="color: #ffffff;"><i class="fa fa-gear fa-fw"></i>Change password</a></li><br/>
                </ul>
            </div>
            <div class="col-md-9" id="top">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title-lg" style="text-align: center; font-family: FontAwesome">Referral Hospital Dashboard</h3>
                        </div>

                        <div class="panel-body"></div>
                    </div>
            </div>
        </div>


    </div>
@endsection