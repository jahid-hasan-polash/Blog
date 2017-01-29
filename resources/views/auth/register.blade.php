<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>adminLTE InfancyIT| SignUp</title>
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
        <p class="login-box-msg">Sign Up</p>
        @include('includes.alert') 

        {!! Form::open(array('route' => 'postregister', 'method' => 'post')) !!}

            <div class="form-group has-feedback">
                {!! Form::label('name', "Full Name", array('class' => 'control-label')) !!}
                {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

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

            <div class="form-group has-feedback">
                {!! Form::label('confirm_password', "Confirm Password", array('class' => 'control-label')) !!}
                {!! Form::password('confirm_password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group has-feedback">
                {!! Form::label('about', "About You", array('class' => 'control-label')) !!}
                {!! Form::textarea('about', null, array('class' => 'form-control', 'placeholder' => 'Say anything about you', 'required' => 'required')) !!}
                <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>

            <div class="form-group">
                <div class="row">
                <div class="col-xs-4">
                  {!! Form::submit('Register', array('class' => 'btn btn-primary btn-block btn-flat', 'type'=>'submit')) !!}
                </div>
            </div>
              </div>

        {!! Form::close() !!}

        <a href="{{ route('login') }}" class="text-center">Already have an account?</a>

      </div>
    </div>


    <!-- jQuery 2.1.4 -->
    {!! Html::script('plugins/jQuery/jQuery-2.1.4.min.js') !!}
    <!-- Bootstrap 3.3.5 -->
    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    <!-- iCheck -->
    {!! Html::script('plugins/iCheck/icheck.min.js') !!}

  </body>
</html>
