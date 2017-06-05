
{{--<section class="col-md-9" id="top">--}}
    <div class="col-md-9" id="top">
        <form id="referral_form" class="well form-horizontal" method="post" action="{{ route('create_referral') }}">
            <fieldset style="align-content: center">
                {{-- Form Name--}}
                <legend><h2 style="text-align: center;">Create Referral</h2></legend>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="diagnosis">Diagnosis</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
                            <input name="diagnosis" placeholder="diagnosis" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="date">Issue date</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input name="date" placeholder="date" class="form-control"  type="date">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="treatment_given">Treatment Given</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                            <input name="treatment_given" placeholder="treatment given" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="treatment_recommended">Treatment Recommended</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
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
                            <select name="destination" class="form-control" id="referralHospitals">
                                <option value="muhimbili">Muhimbili</option>
                                <option value="mwananyamala">Mwananyamala</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary center-block" data-submit="modal">Send</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </fieldset>
        </form>
    </div>
{{--
</section>--}}
