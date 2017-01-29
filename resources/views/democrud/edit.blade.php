@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {!! $title !!}
            <!-- <small>advanced tables</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ URL::current() }}">Edit Demo</a></li>
            <!-- <li class="active">Data tables</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
              <div class="row">
                <div class="col-md-8">
                {!! Form::model($demo, array('route' => ['demo.update',$demo->id], 'method' => 'put', 'class' => 'form-horizontal')) !!}
                    

                        <div class="form-group">
                        {!! Form::label('name', "Full Name", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Your Full Name', 'required' => 'required')) !!}
                          </div>
                         </div>

                    
                      <div class="form-group">
                        {!! Form::label('active', "Active Status", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::select('active', $active, array('class' => 'form-control', 'required' => 'required')) !!}
                          </div>
                      </div>

                  

                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                          {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
                          </div>
                      </div>
                {!! Form::close() !!}
                </div>


              </div>
                
            </section><!-- /.content -->




    

@stop
