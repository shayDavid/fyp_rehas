@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.headerSessions')
            @for($i = 0; $i < count($patient); $i++)
                <ul>
                    <li>{{ $patient[$i]->pid }}</li>
                    <li>{{ $patient[$i]->firstname }}</li>
                    <li>{{ $patient[$i]->lastname }}</li>
                    <li>{{ $patient[$i]->gender }}</li>
                    <li>{{ $patient[$i]->contact }}</li>
                </ul>
            @endfor
            <div class="col-md-9" id="top">
                <form id="referral_form" class="well form-horizontal" method="post" action="{{ route('create_referral') }}">
                    <fieldset style="align-content: center">
                       {{-- <legend><h3 style="text-align: center; font-family: FontAwesome;">Patient Demographics</h3></legend>
                        @for($i = 0; $i < count($patient); $i++)
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="patient_id">Patient ID:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                    <input name="patient_id" type="text" class="form-control"  value="{{ $patient[$i]->pid }}" type="text" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="first_name">First Name:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input name="first_name" type="text" class="form-control"  value="{{ $patient[$i]->firstname }}" type="text" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="last_name">Last Name:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input name="last_name" type="text" class="form-control"  value="{{ $patient[$i]->lastname }}" type="text" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="gender">Gender:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male fa-fw"></i></span>
                                    <input name="gender" type="text" class="form-control"  value="{{ $patient[$i]->gender }}" type="text" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="contact">Contact:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile-phone fa-fw"></i></span>
                                    <input name="contact" type="tel" class="form-control"  value="{{ $patient[$i]->contact }}" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        @endfor--}}

                        {{-- Form Name--}}
                        <hr>
                        <legend><h4 style="text-align: center;font-family: FontAwesome ">Create Referral</h4></legend>
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
                                        <option value="muhimbili">Muhimbili</option>
                                        <option value="mwananyamala">Mwananyamala</option>
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



