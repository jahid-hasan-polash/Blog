<!-- resources/views/auth/reset.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Reset - InfancyIT adminLTE</title>
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
        <p class="login-box-msg">Reset Your Password</p>
        @include('includes.alert') 

        {!! Form::open(array('url' => '/password/reset', 'method' => 'POST')) !!}
            
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group has-feedback">
                {!! Form::label('email', "Email Address", array('class' => 'control-label')) !!}
                {!! Form::email('email', old('email') , array('class' => 'form-control', 'placeholder' => 'info@infancyit.com', 'required' => 'required')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group has-feedback">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group has-feedback">
                {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group has-feedback">
            {!! Form::submit('Proceed', array('class' => 'btn btn-primary btn-block btn-flat')) !!}
            </div>

        {!! Form::close() !!}

        <a href="{{ route('login') }}" class="text-center">Go to Login Section</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


    <!-- jQuery 2.1.4 -->
    {!! Html::script('plugins/jQuery/jQuery-2.1.4.min.js') !!}
    <!-- Bootstrap 3.3.5 -->
    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    <!-- iCheck -->
    {!! Html::script('plugins/iCheck/icheck.min.js') !!}

  </body>
</html>
