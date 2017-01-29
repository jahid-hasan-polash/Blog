@extends('layouts.default')
@section('content')
@include('includes.alert')
        <section class="content-header">
          <h1>
            {{ $title }}
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="{!! URL::current() !!}">Create Demo</li>
          </ol>
        </section>

            <section class="content">
              <div class="row">
                <div class="col-md-8">
                {!! Form::open(array('route' => 'demo.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
                    

                        <div class="form-group">
                        {!! Form::label('name', "Full Name", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Full Name', 'required' => 'required')) !!}
                          </div>
                         </div>

                    
                      <div class="form-group">
                        {!! Form::label('email', "Email Address", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'info@infancyit.com', 'required' => 'required')) !!}
                          </div>
                      </div>


                      <div class="form-group">
                        {!! Form::label('select', "Select Options", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::select('select', $select, array('class' => 'form-control', 'required' => 'required')) !!}
                          </div>
                      </div>

                      <div class="form-group">
                        {!! Form::label('birthday', "Birthday", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::text('birthday', null, array('class' => 'form-control', 'placeholder' => '2050-05-06','id' => 'birthday', 'required' => 'required')) !!}
                          </div>
                      </div>


              <!-- country picker with flag  -->
                      <div class="form-group">
                        {!! Form::label('country', "Country", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                              <div id="basic" class="" data-input-name="country" data-button-size="btn-md" data-button-type="btn-default" data-scrollable="true" data-scrollable-height="250px"></div> <!-- except id everything is optional parameter --> 
                          </div>
                      </div>
                <!-- country picker with flag end  -->

                      <div class="form-group">
                        {!! Form::label('aboutmyself', "About Me", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::textarea('aboutmyself', '', array('class' => 'form-control', 'rows' => 4, 'placeholder' => 'About Yourself, About Your Girlfriend, About InfancyIT')) !!}
                          </div>
                      </div>

                      <div class="form-group">
                        {!! Form::label('fb', "Facebook Link", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::text('fb', '', array('class' => 'form-control', 'placeholder' => 'https://facebook.com/username')) !!}
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                          {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
                          </div>
                      </div>
                    {!! Form::close() !!}
                    </div>

                    <div class="col-md-4">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                        {!! Html::image('dist/demo.png', 'User profile picture', array('class' => 'img-responsive img-circle')) !!}
                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                      </div>
                    </div>
                    <div class="nav-tabs-custom">
                      <!-- <ul class="nav nav-tabs"> -->
                        <!-- <li><a href="{{ route('profile') }}">My Profile</a></li> -->
                        <br>
                        <center><button class="btn"><a href="#timeline" data-toggle="tab">Change Photo</a></button></center>
                        <!-- <li class="active"><a href="">Edit Profile</a></li> -->
                      <!-- </ul> -->
                      <div class="tab-content">
                        <div class="tab-pane" id="timeline">
                          {!! Form::open(array('route' => 'post.edit.photo', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true)) !!}
                            
                            <div class="form-group">
                              <label for="propic" class="col-sm-2 control-label">Upload Photo</label>
                              <div class="col-sm-10">
                                <input type="file" name="propic" class="form-control" id="inputPhoto">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Confirm</button>
                              </div>
                            </div>
                          {!! Form::close() !!}
                        </div><!-- /.tab-pane -->
                      </div><!-- /.tab-content -->
                    </div><!-- /.nav-tabs-custom -->
                  </div><!-- /.col -->


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