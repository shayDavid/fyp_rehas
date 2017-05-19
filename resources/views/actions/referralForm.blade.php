
@extends('layouts.master')

@section('title')
    ReHAS
@endsection

@section('content')
    <div class="content container">
        <div class="row">
            @include('includes.headerSessions')
            <div class="col-md-9">
                <form id="referral_form" class="well form-horizontal" method="post" action="">
                    <fieldset style="align-content: center">
                        {{-- Form Name--}}
                        <legend><h2 style="text-align: center;">Create Referral</h2></legend>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="diagnosis">Diagnosis</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="diagnosis" placeholder="diagnosis" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="treatment_given">Treatment Given</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="treatment_given" placeholder="treatment given" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="treatment_recommended">Treatment Recommended</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="treatment_recommended" placeholder="treatment recommended" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="reason">Reason</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    {{--<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>--}}
                                    <textarea name="reason" class="form-control" rows="3" cols="50" placeholder="reason for referral"></textarea>
                                    {{--<input name="treatment_given" placeholder="treatment given" class="form-control"  type="text">--}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="investigation">Investigation</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <textarea name="investigation" class="form-control" rows="4" cols="50" placeholder="investigation to be done"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group" style="text-align: center; ">
                            Type of Referral ( Put an  in the appropriate box)
                            <div class="radio">
                                <label><input type="radio" name="referralType">Need immediate referral</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="referralType">Referral within a month</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="referralType">Not urgent (tick one)</label>
                            </div>
                        </div>

                        <button type="button" class="btn btn-info btn-lg center-block" data-toggle="modal" data-target="#sendData">submit</button>
                        {{--Modal--}}
                        <div class="modal fade" id="sendData" role="dialog">
                            <div class="modal-dialog">
                                {{--Modal content here--}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Send referral</h4>
                                    </div>

                                    <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="">
                                            <div class="form-group">
                                                <label class=" col-md-3 control-label">Select Hospital:</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <select class="form-control" id="referralHospitals">
                                                            <option>choose hospital</option>
                                                            <option>Muhimbili National Hospital</option>
                                                            <option>Bugando</option>
                                                            <option>KCMC</option>
                                                            <option>Mbeya Regional Hospital</option>
                                                            <option>Mwananyamala Hospital</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" data-submit="modal">Send</button>
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

