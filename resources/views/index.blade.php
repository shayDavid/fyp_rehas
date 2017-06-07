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
<body>
    <div class="container-fluid" id="LoginP">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="user_id">User Id: </label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input class="form-control" name="user_id" type="text"  value="user_id" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="password">Password: </label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input class="form-control" name="password" type="text" value="password" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label class="col-md-3 col-md-offset-2 control-label">
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>

                                <div class="Button">
                                    <button class="btn btn-primary" type="submit">Login</button>
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