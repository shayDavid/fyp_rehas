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
                    <section>
                        <table id="viewReferral" class="table table-responsive table-hover"
                               summary="This table shows already processed referral letters from non-referral hospital">
                            <caption class="text-center"></caption>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Patient ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < 3; $i++)
                                <tr>
                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $patients[$i]->pid }}</td>
                                    <td>{{ $patients[$i]->firstname }}</td>
                                    <td>{{ $patients[$i]->lastname }}</td>
                                    <td>{{ $patients[$i]->gender }}</td>
                                    <td></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </section>
                </div>

            </div>
        </div>
    </div>
@endsection

