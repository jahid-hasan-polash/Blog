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
              <h3>Title: {{ $blog->title }}</h3>
              <h3>{{ $blog->created_at }}</h3>
              <h3>description: </h3>
              <p>{{ $blog->description }}</p>      
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <a href="{{ route('blog.edit',[$blog->id]) }}" class="btn btn-danger">Edit</a>
            </section>

@endsection