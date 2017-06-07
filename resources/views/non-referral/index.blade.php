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
                        <div class="panel panel-default">

                            <div class="panel-heading" style="text-align: center">
                                <h1 class="panel-title">Welcome to Referral Hospital Appointment System</h1>
                            </div>

                            <div class="panel-body">
                                <ul>
                                    <p>Referral Hospital Appointment System issues referral appointents to patients from Non- referral hospitals to Referral hospitals.</p>
                                    <li id="inLine"><p>The doctor fill the referral form from the 'eReferrals'.</p></li>
                                    <li id="inLine"><p>The referral status will be viewed in the 'view referrals'.</p></li>
                                    <li id="inLine"><p>Doctor can generate report whenever necessary.</p></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

