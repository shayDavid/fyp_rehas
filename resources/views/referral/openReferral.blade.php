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
                    <fieldset style="align-content: center">
                        <legend><h2 style="text-align: center;">Referral Details</h2></legend>
                        <legend><h4 style="text-align: center;">Patient Demographic Information</h4></legend>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Patient ID</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card-o fa-fw"></i></span>
                                    <input name="pid" value="{{ $patient[0]->pid }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" >First Name</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input name="firstname" value="{{ $patient[0]->firstname }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" >Middle Name</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input name="middlename" value="{{ $patient[0]->middlename }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" >Last Name</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input name="lastname" value="{{ $patient[0]->lastname }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" >Gender</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                                    <input name="gender" value="{{ $patient[0]->gender }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-md-3 control-label" >Contact</label>
                            <div class="col-md-6">
                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-mobile-phone fa-fw"></i></span>
                                    <input name="contact" value="{{ $patient[0]->contact }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" >Address</label>
                            <div class="col-md-6">
                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-address-book-o fa-fw"></i></span>
                                    <input name="address" value="{{ $patient[0]->address }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" >Date of Birth</label>
                            <div class="col-md-6">
                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-address-book-o fa-fw"></i></span>
                                    <input name="dob" value="{{ $patient[0]->dob }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        {{-- Form Name--}}
                        <hr>
                        <legend><h4 style="text-align: center;font-family: FontAwesome ">Referral Information</h4></legend>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="diagnosis">Diagnosis</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
                                    <input name="diagnosis" value="{{ $singleReferral[0]->diagnosis }}"  class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="date">Issue date</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input name="date" value="{{ $singleReferral[0]->issuedate }}" class="form-control"  type="date" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="treatment_given">Treatment Given</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                                    <input name="treatment_given" value="{{ $singleReferral[0]->treatmentGiven }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="treatment_recommended">Treatment Recommended</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                                    <input name="treatment_recommended" value="{{ $singleReferral[0]->treatmentRecommended }}" class="form-control"  type="text" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="reason">Reason</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <textarea name="reason" class="form-control" rows="3" cols="50" placeholder="{{ $singleReferral[0]->referralreason }}" readonly></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="investigation">Investigation</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <textarea name="investigation" class="form-control" rows="4" cols="50" placeholder="{{ $singleReferral[0]->investigation }}" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-3">
                                    <div id="modal_accept">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#acceptModal">Accept</button>

                                        <div id="acceptModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Setting Appointment</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Date</label>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar-o fa-fw"></i></span>
                                                                    <input name="date"  class="form-control"  type="date" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Set</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ URL::route('referral_view') }}" class="btn btn-primary">Deny</a>
                                        <input type="hidden" name="_token" value="{{Session::token()}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <footer style="background-color: #2b91a1;">
        <h3 style="text-align: center; font-size: medium;">Copyright &copy; 2017 Referral Hospital. All rights reserved.</h3>
    </footer>
@endsection