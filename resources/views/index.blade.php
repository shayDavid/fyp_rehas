<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HIS</title>

        {{-- Bootstrap core css --}}
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('node_modules/bootstrap-ui/bower_components/dist/css/bootstrap-ui.min.css')}}">
        <link rel="icon" href="{{URL::to('images/favicon.ico')}}">
        {{-- custome css --}}
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/masterNrp.css')}}">
    </head>
<body id="login_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div style="margin-top: 20%">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger" style="margin-bottom: 0">
                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
                                    @if(Session::has('fail'))
                                        <section>
                                            {{Session::get('fail')}}
                                        </section>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <br/>
                    @endif
                </div>
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center; font-family: FontAwesome">Hospital Information System Login</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="{{ route('hisLogin') }}" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="username">Username: </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input class="form-control" name="username" type="text"  placeholder="username" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="password">Password: </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input class="form-control" name="password" type="password" placeholder="password" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="Button">
                                    <button class="btn btn-primary btn-md center-block" type="submit">Login</button>
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>