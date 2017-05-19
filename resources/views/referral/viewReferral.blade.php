
@extends('layouts.master')

@section('title')
    ReHAS
@endsection

@section('content')
    <div class="container">
        <div class="row {{--profile--}}">
            @include('includes.headerSessions')
            <div class="col-md-9">
                    {{-- View attributes of the referral status and available referals here--}}
                <form class="well form-horizontal">
                    <fieldset>
                        <legend><h2 style="text-align: center;">View Referrals</h2></legend>
                        <div>
                            {{-- this table data can be fetched from a controller as an array of data--}}
                            <table {{--id="myTable"--}} class="table table-hover usr_responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reg#</th>
                                    <th>Patient name</th>
                                    <th>Hospital name</th>
                                    <th>Issuing date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>12-001-001</td>
                                    <td>Otto</td>
                                    <td>Palestina</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>12-001-003</td>
                                    <td>Otto</td>
                                    <td>Palestina District Hospital</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>12-001-002</td>
                                    <td>Metemi kischwakubwa</td>
                                    <td>Muhimbili National Hospital</td>
                                    <td>date</td>
                                    <td>Denied</td>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                {{-- sample data should be deleted late--}}
                                <tr>
                                    <th scope="row">5</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>14-001-001</td>
                                    <td>Otto</td>
                                    <td>Mlimani dispensary</td>
                                    <td>date</td>
                                    <td>accepted</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection

