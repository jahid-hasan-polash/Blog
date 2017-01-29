<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>adminLTE InfancyIT| Log in</title>
    <meta name="author" content="InfancyIT">
    <!-- <meta name="csrf-token" content="{!! csrf_token() !!}"> -->
    <link rel="shortcut icon" href="dist/favicon.ico">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('dist/css/AdminLTE.min.css') !!}
    <!-- iCheck -->
    {!! Html::style('plugins/iCheck/square/blue.css') !!}

  </head>
  <body class="hold-transition login-page">
    <div class="login-box">

      <div class="login-logo">
        <a href="{{ route('dashboard') }}"><b>InfancyIT adminLTE </b></a>
      </div><!-- /.login-logo -->

      <div class="login-box-body">
        <p class="login-box-msg">Sign in to Start Your Session</p>
        @include('includes.alert') 

        {!! Form::open(array('route' => 'postlogin', 'method' => 'post')) !!}

            <div class="form-group has-feedback">
                {!! Form::label('email', "Email Address", array('class' => 'control-label')) !!}
                {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'info@infancyit.com', 'required' => 'required')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group has-feedback">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-8">
                {!! Form::checkbox('remember', true, array('class' => 'form-control')) !!}
                {!! Form::label('remember', " Remember Me", array('class' => 'control-label')) !!}
                </div>
                <div class="col-xs-4">
                  {!! Form::submit('Log in', array('class' => 'btn btn-primary btn-block btn-flat', 'type'=>'submit')) !!}
                </div>
              </div>
              </div>

        {!! Form::close() !!}

        <a data-toggle="modal" href="#myModal">Forgot Password?</a><br>
        <a href="{{ route('register') }}" class="text-center">Create New Account</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>


                {!! Form::open(array('url' => 'password/email', 'method' => 'POST')) !!}

                {!! Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off')) !!}

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                {!! Form::submit('Get Reset Link', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- modal -->


    <!-- jQuery 2.1.4 -->
    {!! Html::script('plugins/jQuery/jQuery-2.1.4.min.js') !!}
    <!-- Bootstrap 3.3.5 -->
    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    <!-- iCheck -->
    {!! Html::script('plugins/iCheck/icheck.min.js') !!}

  </body>
</html>
