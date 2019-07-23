<?php


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin-Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('/') }}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('/') }}/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!--<form role="form" method="POST" action="{{ route('login') }}">-->
                        {!! Form::open( [ 'url' => '/login', 'method' => 'POST' ] ) !!}
                            <!--@csrf-->
                            <div class="form-group">

                                {{ Form::email ('email', null, ['class'=>'form-control  @error("email") is-invalid @enderror', 'placeholder'=>'enter your email'] )}}

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">

                                {{ Form::password ('password', ['class'=>'form-control  @error("password") is-invalid @enderror', 'placeholder'=>'enter your password'] )}}

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="checkbox">
                                <label>{{ Form::checkbox ( 'name', 'rememberMe' )}}Remember me</label>
                            </div>
                            <div class="form-group">
                                {{ Form::submit ('Login', ['class'=>'btn btn-success btn-block', 'name'=>'btn'] )}}
                            </div>
                        <!--</form>-->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('/') }}/admin/js/jquery-1.10.2.js"></script>
    <script src="{{ asset('/') }}/admin/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{ asset('/') }}/admin/js/sb-admin.js"></script>

</body>

</html>
