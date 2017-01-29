@extends('layouts.default')
@section('content')
@include('includes.alert')
        <section class="content-header">
          <h1>
            {{ $title }}
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="{!! URL::current() !!}">Index</li>
          </ol>
        </section>

            <section class="content">
              <h3>Name: {{ $user->name }}</h3>
              <h3>Email: {{ $user->email }}</h3>
              <h3>Quote: {{ $user->quotes }}</h3>      
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <a href="{{ route('user.edit',[$user->id]) }}" class="btn btn-danger">Edit Profile</a>
            </section>

@endsection