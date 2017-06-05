@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="leftbar col-md-3">
                <ul class="leftbar nav nav-pills nav-stacked">
                    @include('includes.sidebar')
                </ul>
            </div>
            <div class="col-md-9" id="top">
                <form id="registeredHospital" class="well form-horizontal" method="post" action="">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend><h2 style="text-align: center;">Registered Hospitals</h2></legend>
                        <div>
                            {{-- this table data can be fetched from a controller as an array of data--}}
                            <table class="table table-hover usr_responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reg#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Region</th>
                                    <th>District</th>
                                    <th>Website</th>
                                    <th>Ownership</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>12-001-001</td>
                                    <td>Muhimbili </td>
                                    <td><?php echo "info@muhimbili.go.tz" ?></td>
                                    <td>022 233 443</td>
                                    <td>P.o. Box 33345</td>
                                    <td>Dar es salaam</td>
                                    <td>Ilala</td>
                                    <td>muhimbili.go.tz</td>
                                    <td>Public</td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>12-001-002</td>
                                    <td>Mwananyamala Hospital</td>
                                    <td><?php echo "info@mwananyamala.go.tz" ?></td>
                                    <td>022 233 443</td>
                                    <td>P.o. Box 33345</td>
                                    <td>Dar es salaam</td>
                                    <td>Ilala</td>
                                    <td>mwananyamala.go.tz</td>
                                    <td>Public</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection

