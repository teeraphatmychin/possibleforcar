@<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@include('layout.partials.head')
</head>
<body>
	
	@include('layout.partials.nav')

	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
							<div class="row">
								<div class="heading-content col-md-12">
									<p><a href="{{route('index')}}">Homepage</a> / <em> Blog</em> / <em> Grid</em></p>
									<h2>Blog <em>Grids</em></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="blog-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="blog-grid-post">
							<div class="row">
								@include('blog_data')
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-widgets">
							<div class="sidebar-widget">
								<div class="search-widget">
									<input type="text" onfocus="this.value=''" value="Type keywords...">
								</div>
							</div>
							<div class="sidebar-widget">
								<div class="text-widget">
									<div class="sidebar-heading">
										<h4>Text Widget</h4>
									</div>
									<p>Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold.</p>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="sidebar-widget">
								<div class="categories">
									<div class="sidebar-heading">
										<h4>Categories</h4>
									</div>
									<ul>
										<li><a href="#">Volkswagen</a></li>
										<li><a href="#">Audi</a></li>
										<li><a href="#">Aston Martin</a></li>
										<li><a href="#">BMW</a></li>
										<li><a href="#">Mercedess</a></li>
										<li><a href="#">Land Rover</a></li>
										<li><a href="#">Jeep</a></li>
									</ul>
								</div>
							</div>
							<div class="sidebar-widget">
								<div class="recent-posts">
									<div class="sidebar-heading">
										<h4>Recent Posts</h4>
									</div>
									<ul>
										<li>
											<a href="{{route('single_post')}}">
												<img src="http://placehold.it/70x70" alt="">
												<h6>Pabst Gastropub Synth Edge</h6>
												<span>January 13, 2019</span>
											</a>
										</li>
										<li>
											<a href="{{route('single_post')}}">
												<img src="http://placehold.it/70x70" alt="">
												<h6>Pabst Gastropub Synth Edge</h6>
												<span>January 13, 2019</span>
											</a>
										</li>
										<li>
											<a href="{{route('single_post')}}">
												<img src="http://placehold.it/70x70" alt="">
												<h6>Pabst Gastropub Synth Edge</h6>
												<span>January 13, 2019</span>
											</a>
										</li>
										<li>
											<a href="{{route('single_post')}}">
												<img src="http://placehold.it/70x70" alt="">
												<h6>Pabst Gastropub Synth Edge</h6>
												<span>January 13, 2019</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="sidebar-widget">
								<div class="archives">
									<div class="sidebar-heading">
										<h4>Archives</h4>
									</div>
									<ul>
										<li><a href="#">Volkswagen</a></li>
										<li><a href="#">Audi</a></li>
										<li><a href="#">Aston Martin</a></li>
										<li><a href="#">BMW</a></li>
										<li><a href="#">Mercedess</a></li>
										<li><a href="#">Land Rover</a></li>
										<li><a href="#">Jeep</a></li>
									</ul>
								</div>
							</div>
							<div class="sidebar-widget">
								<div class="tags">
									<div class="sidebar-heading">
										<h4>Tags Cloud</h4>
									</div>
									<ul>
										<li><a href="#">Car</a></li>
										<li><a href="#">Dealer</a></li>
										<li><a href="#">Template</a></li>
										<li><a href="#">PSD</a></li>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Wordpress</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')

</body>
</html>