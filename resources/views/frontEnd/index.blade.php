
@extends('frontEnd.layouts.default')
    @section('content')
      <div class="content-body">
        <div class="container">
          <div class="row">
            <!-- Article title and short description -->
            <main class="col-md-8">
              @forelse($blogs as $blog)
              <article class="post post-1">
                <header class="entry-header">
                  <h1 class="entry-title">
                    <!-- title variable -->
                    <a href="{{ route('fullBlog',[$blog->id]) }}">{{ $blog->title }}</a>
                  </h1>
                  <div class="entry-meta">
                    <span class="post-category"><a href="{{ route('blog.catagory.show', [$blog->catagory->id]) }}">{{ $blog->catagory->name }}</a></span>
        
                    <span class="post-date"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00"><a href="#">{{ $blog->created_at }}</a></time></span>
        
                    <span class="post-author"><a href="{{ route('blog.writer.show', [$blog->user->id]) }}">{{ $blog->user->name }}</a></span>
        
                    <span class="comments-link"><a href="#">4 Comments</a></span>
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
               <p> No Blogs yet </p>
              @endforelse
            </main>
            <!-- Side clickable option items: sidebar alternative -->
            <aside class="col-md-4">
              <div class="widget widget-recent-posts">    
                <h3 class="widget-title">Recent Posts</h3>    
                <ul>
                  @foreach($recentPosts as $recent)
                  <li>
                    <a href="{{ route('fullBlog',[$recent->id]) }}">{{ $recent->title }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <!-- 
              <div class="widget widget-archives">    
                <h3 class="widget-title">Archives</h3>    
                <ul>
                  <li>
                    <a href="#">November 2014</a>
                  </li>
                </ul>
              </div>
 -->
              <div class="widget widget-category">    
                <h3 class="widget-title">Category</h3>  
                @foreach($catagories as $catagory)
                <ul>
                  <li>
                    <a href="{{ route('blog.catagory.show', [$catagory->id]) }}">{{ $catagory->name }}</a>
                  </li>
                </ul>
                @endforeach
              </div>
            </aside>
          </div>
        </div>
      </div>

@stop