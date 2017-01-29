@extends('layouts.default')
@section('content')
@include('includes.alert')

    
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            My Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="{!! Menu::isActiveURL('profile') !!}">My Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-8">

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                  <a href="{{ route('edit.profile') }}"><h3 class="box-title pull-right">Edit Profile</h3></a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Contact Details</strong>
                  <p class="text-muted">
                    Email: {{ $user->email }}
                  </p>
                  <p class="text-muted">
                    Phone: {{ $user->phone or '' }}
                  </p>

                  <hr>

                  <strong><i class="fa fa-birthday-cake margin-r-5"></i> Birthday</strong>
                  <p class="text-muted"></p>

                  <hr>

                  <strong><i class="fa fa-user margin-r-5"></i> Gender</strong>
                  <p class="text-muted"></p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                  <p class="text-muted"></p>

                  <hr>

                  <strong><i class="fa fa-pencil margin-r-5"></i> Social Profiles</strong>
                  <ul>
                    <li>Personal Website: <a href="">Facebook</a></li>
                    
                  </ul>

                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> About Myself</strong>
                  <p></p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-4">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img src="">
                  <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                </div>
              </div>
              <div class="nav-tabs-custom">
                <!-- <ul class="nav nav-tabs"> -->
                  <!-- <li class="active"><a href="">My Profile</a></li> -->
                  <br>
                        <center><button class="btn"><a href="#timeline" data-toggle="tab">Change Photo</a></button></center>
                  <!-- <li><a href="{{ route('edit.profile') }}">Edit Profile</a></li> -->
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
          </div><!-- /.row -->

        </section><!-- /.content -->
      

@stop