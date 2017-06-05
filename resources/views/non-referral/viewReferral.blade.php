@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.headerSessions')
            <section id="top">
                <div class="col-md-9">
                    {{-- View attributes of the referral status and available referals here--}}
                    <form class="well form-horizontal">
                        <fieldset>
                            <legend><h2 style="text-align: center;">View Referrals</h2></legend>
                            <div class="nav navbar-collapse">
                                <form class="form-horizontal">
                                    <div class="input-group">
                                        <input id="searchMenu" type="text" class="form-control" placeholder="search...">
                                    <span class="input-group-btn"><button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i></button></span>
                                    </div>
                                </form>
                            </div>
                            <div>
                                {{-- this table data can be fetched from a controller as an array of data--}}
                                <table id="viewReferral" class="table table-responsive table-hover"
                                       summary="This table shows already processed referral letters from non-referral hospital">
                                    <caption class="text-center"></caption>
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
                                    {{--sample data should be deleted late--}}
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
            </section>
        </div>
    </div>
    @endsection


