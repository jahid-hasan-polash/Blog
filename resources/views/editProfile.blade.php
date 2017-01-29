@extends('layouts.default')
@section('content')
@include('includes.alert')
        <section class="content-header">
          <h1>
            {{ $title }}
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="{!! URL::current() !!}">Edit Profile</li>
          </ol>
        </section>

            <section class="content">
              <div class="row">
                <div class="col-md-8">
                {!! Form::open(array('route' => ['user.update',$user->id], 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
                    

                        
                      <div class="form-group">
                        {!! Form::label('name', "Name", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::text('name', $user->name, array('class' => 'form-control', 'placeholder' => 'name', 'required' => 'required')) !!}
                          </div>
                         </div>
                    
                      <div class="form-group">
                        {!! Form::label('email', "Email", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::email('email', $user->email, array('class' => 'form-control', 'placeholder' => 'email', 'required' => 'required')) !!}
                          </div>
                      </div>


                      <div class="form-group">
                        {!! Form::label('about', "Quote", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                            {!! Form::textarea('about', $user->quotes, array('class' => 'form-control', 'placeholder' => 'about')) !!}
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                          {!! Form::submit('Post', array('class' => 'btn btn-success')) !!}
                          </div>
                      </div>
                    {!! Form::close() !!}
                    </div>
                  </div>
                
            </section>
 
@endsection

@section('style')

  {!! Html::style('plugins/datepicker/datepicker3.css') !!}
  {!! Html::style('dist/css/flags.css') !!}

@endsection

@section('script')

  {!! Html::script('dist/js/jquery.flagstrap.js') !!}\
  {!! Html::script('plugins/datepicker/bootstrap-datepicker.js') !!}

  <script type="text/javascript">
    $('#basic').flagStrap();

    $("#birthday").datepicker({
          format: 'yyyy-mm-dd',
          endDate: '+0d',
          autoclose: true 
    });

  </script>

@endsection