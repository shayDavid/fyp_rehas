
@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.headerSessions')
            <section id="top">
                <div class="col-md-9">
                    {{-- View attributes of the referral status and available referals here--}}
                    <h3 class="text-right small text-letterspacing">{{Session::get('hospitalName')}}</h3><hr>
                    <form class="well form-horizontal">
                        <fieldset>
                            <legend><h2 style="text-align: center;">View Referrals</h2></legend>
                            @if(count($referrals) > 0)
                                <div>
                                    <table id="viewReferral" class="table table-responsive table-hover"
                                           summary="This table shows already processed referral letters from non-referral hospital">
                                        <caption class="text-center"></caption>
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Referral ID</th>
                                            <th>Patient Name</th>
                                            <th>Referral Hospital</th>
                                            <th>Issued Date</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @for($i = 0; $i < count($referrals); $i++)
                                                <tr>
                                                    <th scope="row">{{ $i + 1 }}</th>
                                                    <td>{{ $referrals[$i]->rid }}</td>
                                                    <td>{{ $patientName[$i] }}</td>
                                                    <td>{{ $referrals[$i]->destination }}</td>
                                                    <td>{{ $referrals[$i]->issuedate }}</td>
                                                    <td>{{ $referrals[$i]->status }}</td>
                                                    <td></td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-info"><p>No Referrals at the moment</p></div>
                            @endif
                        </fieldset>
                    </form>
                </div>
            </section>
        </div>
    </div>
    @endsection


