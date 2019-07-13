<!DOCTYPE html>
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
								<p><a href="{{route('index')}}">Homepage</a> / <em> Blog</em> / <em> Clasic</em></p>
								<h2>Blog <em>Classic</em></h2>
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
				<div class="col-md-8">
					<div class="blog-classic-post">
						<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="{{route('single_post')}}">20 December</a>
								</div>
								<div class="thumb-inner">
									<a href="{{route('single_post')}}"><img src="https://placehold.it/750x350" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="{{route('single_post')}}"><h4>Pabst Gastropub Synth Edge</h4></a>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/December/2018</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
								</ul>
								<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold out readymade. Health goth freegan letterpress beard quinoa try-hard narwhal synth gastropub, tote bag ugh heirloom.</p>	
								<div class="text-button">
									<a href="{{route('single_post')}}">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="{{route('single_post')}}">20 December</a>
								</div>
								<div class="thumb-inner">
									<a href="s{{route('single_post')}}"><img src="https://placehold.it/750x350" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="{{route('single_post')}}"><h4>Pabst Gastropub Synth Edge</h4></a>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/December/2018</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
								</ul>
								<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold out readymade. Health goth freegan letterpress beard quinoa try-hard narwhal synth gastropub, tote bag ugh heirloom.</p>	
								<div class="text-button">
									<a href="{{route('single_post')}}">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="s{{route('single_post')}}">20 December</a>
								</div>
								<div class="thumb-inner">
									<a href="{{route('single_post')}}"><img src="https://placehold.it/750x350" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="{{route('single_post')}}"><h4>Pabst Gastropub Synth Edge</h4></a>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/December/2018</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
								</ul>
								<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold out readymade. Health goth freegan letterpress beard quinoa try-hard narwhal synth gastropub, tote bag ugh heirloom.</p>	
								<div class="text-button">
									<a href="{{route('single_post')}}">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
						<div class="page-numbers">
							<div class="pagination-content">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
								</ul>
							</div>
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
											<img src="https://placehold.it/70x70" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="{{route('single_post')}}">
											<img src="https://placehold.it/70x70" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="{{route('single_post')}}">
											<img src="https://placehold.it/70x70" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="{{route('single_post')}}">
											<img src="https://placehold.it/70x70" alt="">
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