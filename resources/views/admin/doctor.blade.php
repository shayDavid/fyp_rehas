@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class=" leftbar col-md-3" id="sidebar">
                <ul class="leftbar  nav nav-pills nav-stacked">
                    @include('includes.sidebar')
                </ul>
            </div>
            <div class="col-md-9" id="top">
                <form class="well form-horizontal" id="patient_form" method="post" action="">
                    <fieldset style="align-content: center">
                        <legend ><h2 style="text-align: center;">Doctor Registration</h2></legend>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="first_name">First name:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input class="form-control" name="first_name" type="text" placeholder="first name ..." required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="middle_name">Middle name:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input class="form-control" name="middle_name" type="text" placeholder="first name ...">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="last_name">Last name:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input class="form-control" name="last_name" type="text" placeholder="last name ..." required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="date">DOB</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input class="form-control" name="date" type="date" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="gender">Gender: </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select name="gender" class="form-control" id="gend_er" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="contact">Contact: </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-book fa-fw"></i></span>
                                    <input class="form-control" name="contact" type="tel" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="address">Address: </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-book-o fa-fw"></i></span>
                                    <input class="form-control" name="address" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="special_">Specialization: </label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-md fa-fw"></i></span>
                                    <input class="form-control" name="special_" type="text">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary center-block" type="submit">Register Doctor</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
