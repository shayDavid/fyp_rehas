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
                            <h3 class="text-right small text-letterspacing">{{Session::get('hospitalName')}}</h3>
                            <hr>

                            <strong>Create Referral</strong>
                            <hr>
                            <p>This functionality allows a doctor, here referred as "Non-Referral Practitioner" to
                            <ul>
                                <li class="info">Search patient by using patient identity as registered in HIS</li><hr>
                                <li class="info">If patient is registered, System displays referral form to be filled</li><hr>
                                <li class="info">After filling all required fields Doctor creates referral, System acknowledges successful referrals</li><hr>
                                <li class="info">Else if, patient is not registered, System display an error message</li>
                            </ul>
                            </p>
                            <hr>
                            <strong>View Referral</strong><hr>
                            <p>
                            <ul><li class="info">This functionality allows Doctor to view all created referrals details</li><hr></ul>
                            </p>


                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

