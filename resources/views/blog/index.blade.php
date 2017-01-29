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
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($blogs as $blog)
                <tbody>
                  <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ substr( $blog->description, 0, 60 )}}</td>
                    <td>
                      <a href="{{ route('blog.show',[$blog->id]) }}" class="btn btn-primary">Details</a>
                      <a href="{{ route('blog.edit',[$blog->id]) }}" class="btn btn-primary">edit</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              
                
            </section>

@endsection