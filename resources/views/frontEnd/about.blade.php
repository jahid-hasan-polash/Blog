@extends('frontEnd.layouts.default')
    @section('content')
<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-12">
						<h1 class="page-title">About the Blog</h1>
						<article class="post">
							<div class="entry-content clearfix">
								<!-- Image -->
								<figure class="img-responsive-center">
									<img class="img-responsive" src="{{ asset('frontEnd/img/me.jpg') }}" alt="Developer Image">
								</figure>
								
								<!-- description -->
								<p>{{ $about }}</p>
								<div class="height-40px"></div>
								<h2 class="title text-center">Social</h2>
								<ul class="social">
									<li class="facebook"><a href="#"><span class="ion-social-facebook"></span></a></li>
									<li class="twitter"><a href="#"><span class="ion-social-twitter"></span></a></li>
									<li class="google-plus"><a href="#"><span class="ion-social-googleplus"></span></a></li>
									<li class="tumblr"><a href="#"><span class="ion-social-tumblr"></span></a></li>
								</ul>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>

@stop