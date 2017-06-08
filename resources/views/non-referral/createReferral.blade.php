@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.headerSessions')
            <div class="col-md-9" id="top">
                <form id="referral_form" class="well form-horizontal" method="post" action="{{ route('create_referral') }}">
                    <fieldset style="align-content: center">
                        <h3 class="text-right small text-letterspacing">{{Session::get('hospitalName')}}</h3><hr>
                        <legend><h2 style="text-align: center;">Create Referral</h2></legend>
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
                        <input type="hidden" name="middlename" value="{{ $patient[0]->middlename }}">
                        <input type="hidden" name="dob" value="{{ $patient[0]->dob }}">
                        <hr>
                        <legend><h4 style="text-align: center;">Referral Information</h4></legend>

                        {{-- Form Name--}}
                        <hr>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="diagnosis">Diagnosis</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
                                    <input name="diagnosis" placeholder="diagnosis" class="form-control"  type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="date">Issue date</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input name="date" placeholder="date" class="form-control"  type="date" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="treatment_given">Treatment Given</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                                    <input name="treatment_given" placeholder="treatment given" class="form-control"  type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="treatment_recommended">Treatment Recommended</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                                    <input name="treatment_recommended" placeholder="treatment recommended" class="form-control"  type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="reason">Reason</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <textarea name="reason" class="form-control" rows="3" cols="50" placeholder="reason for referral" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="investigation">Investigation</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <textarea name="investigation" class="form-control" rows="4" cols="50" placeholder="investigation to be done" required></textarea>
                                </div>
                            </div>
                        </div>
                        {{--uploading input field, table is not included in the database --}}
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="fileUploading">Upload file</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" name="fileUploading">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class=" col-md-3 control-label">Destination:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select name="destination" class="form-control" id="referralHospitals" required>
                                        @foreach($referralHospitals as $referralHos)
                                            <option value="{{ $referralHos->name }}">{{ $referralHos->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary center-block">Create Referral</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection