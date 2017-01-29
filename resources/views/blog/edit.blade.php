@extends('layouts.default')
@section('content')
@include('includes.alert')
        <section class="content-header">
          <h1>
            {{ $title }}
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="{!! URL::current() !!}">Edit Blog</li>
          </ol>
        </section>

            <section class="content">
              <div class="row">
                <div class="col-md-8">
                {!! Form::open(array('route' => ['blog.update',$blog->id], 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
                    

                        <div class="form-group">
                        {!! Form::label('title', "Title", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::text('title', $blog->title, array('class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required')) !!}
                          </div>
                         </div>

                    
                      <div class="form-group">
                        {!! Form::label('description', "Description", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::textarea('description', $blog->description, array('class' => 'form-control', 'placeholder' => 'Description', 'required' => 'required')) !!}
                          </div>
                      </div>


                      <div class="form-group">
                        {!! Form::label('catagory', "Catagory", array('class' => 'col-sm-2 control-label')) !!}
                          <div class="col-sm-10">
                          {!! Form::select('catagory', $catagories, $blog->catagory_id, array('class' => 'form-control', 'required' => 'required')) !!}
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