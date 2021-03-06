@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.headerSessions')
            <div class="col-md-9" id="top">
                    <h3 class="text-right small text-letterspacing">{{Session::get('hospitalName')}}</h3><hr>
                    <fieldset style="align-content: center">
                        <legend><h2 style="text-align: center;">Create Referral</h2></legend>
                        @if(Session::has('msg'))
                            <div class="alert alert-danger">
                                @if(Session::has('msg'))
                                    {{ Session::get('msg') }}
                                @endif
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                @if(Session::has('success'))
                                    {{ Session::get('success') }}
                                @endif
                            </div>
                        @endif
                        <div>
                            <p>Please search for a patient that you want to refer to a referral hospital</p>
                        </div>
                        <div>
                            <form class="navbar-form" method="post" action="{{ route('patientSearch') }}">
                                <div class="input-group">
                                    <input name="search" type="text" class="form-control" placeholder="Patient ID..." required>
                                    <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                                <i class="fa fa-fw fa-search"></i>
                            </button>
                            </span>
                                </div>
                            </form>
                        </div>
                    </fieldset>
            </div>
        </div>
    </div>
@endsection



