@extends('layouts.master')

@section('title')
    ReHAS
@endsection

@section('content')
    <div class="container" id="page-wrap">
        <div class="row">
            @include('includes.headerSessions')
            <div class="content container">
                <div class="row">
                    <section class="col-md-9" id="top" >
                        <div style="padding-top: 12px">
                            <p><strong>Guidelines</strong></p>
                            <p>You can access ReHAS functionalities by following appropriate links as follows</p>
                            <hr>

                            <strong>View Referral</strong>
                            <hr>
                            <p>This functionality allows a doctor, here referred as "Referral Practitioner" to
                            <ul>
                                <li class="info">View all referral received from different hospitals</li><hr>
                                <li class="info">Review referral reasons, diagnosis and recommendations</li><hr>
                                <li class="info">Deciding on whether to accept or deny the referral</li><hr>
                                <li class="info">If Doctor accept a referral, Appointment should be put in place and updating the status of the referral</li><hr>
                                <li class="info">Else if, Referral is denied, Doctor will be redirected back to view page</li><hr>
                            </ul>
                            </p>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

