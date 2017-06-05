@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            {{--@include('includes.headerSessions')--}}
            <div class=" leftbar col-md-3">
                <ul class="leftbar  nav nav-pills nav-stacked">
                    @include('includes.sidebar')
                </ul>
            </div>
            <div class="col-md-9" id="top">
                <form class="well form-horizontal" action="" method="post" id="registration_form">
                    <fieldset>
                        {{-- Form Name--}}
                        <legend><h2 style="text-align: center">Hospital Registration</h2></legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Hospital Name</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hospital-o"></i></span>
                                    <input id="hospital_id" name="hospital_name" class="form-control" placeholder="hospital name" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">E-mail</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="email_id" name="email" class="form-control" placeholder="E-mail address" type="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="phone">Phone</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone" placeholder="(022)275-1212" class="form-control" type="tel">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Address</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="address" placeholder="Address" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="region">Region</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="region" placeholder="region" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="district">District</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="state" class="form-control selectpicker" >
                                        <option value=" " >Please select district</option>
                                        <option>Ilala</option>
                                        <option>Kigamboni</option>
                                        <option >Kinondoni</option>
                                        <option >Temeke</option>
                                        <option >ubungo</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="website">Website</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                    <input name="website" placeholder="Website or domain name" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="ownership">Ownership</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="ownership" class="form-control selectpicker" >
                                        <option value=" " >Type of ownership</option>
                                        <option>Public Hospital</option>
                                        <option>Private Hospital</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit"></label>
                            <div class="col-md-4">
                                <button id="btnSubmit" type="submit" class="btn btn-primary" >Send <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
