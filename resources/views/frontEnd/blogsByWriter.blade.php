@extends('frontEnd.layouts.default')
    @section('content')
    <div class="content-body">
			<div class="container">
				<h1 class="entry-title"> Writer: {{ $writerName }} </h1><hr>
				<div class="row">
					<main class="col-md-12">
						@forelse($blogs as $blog)
						<article class="post post-1">
			                <header class="entry-header">
			                  <h1 class="entry-title">
			                    <!-- title variable -->
			                    <a href="{{ route('fullBlog',[$blog->id]) }}">{{ $blog->title }}</a>
			                  </h1>
			                  <div class="entry-meta">
			                    <div class="entry-meta">
				                    <span class="post-category"><a href="{{ route('blog.catagory.show', [$blog->catagory->id]) }}">{{ $blog->catagory->name }}</a></span>
				        
				                    <span class="post-date"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00"><a href="#">{{ $blog->created_at }}</a></time></span>
				        
				                    <span class="post-author"><a href="{{ route('blog.writer.show', [$blog->user->id]) }}">{{ $blog->user->name }}</a></span>
				        
				                    <span class="comments-link"><a href="#">4 Comments</a></span>
				                  </div>
			                  </div>
			                </header>
			                <!-- Description variable -->
			                <div class="entry-content clearfix">
			                  <p>{{ substr( $blog->description, 0, 60 ) . "...."  }}</p>
			                    <div class="read-more cl-effect-14">
			                    <a href="{{ route('fullBlog',[$blog->id]) }}" class="more-link">Continue reading <span class="meta-nav">→</span></a>
			                  </div>
			                </div>
			             </article>
						@empty
						No Posts are in this category.
						@endforelse
					</main>
				</div>
			</div>
		</div>

@stop