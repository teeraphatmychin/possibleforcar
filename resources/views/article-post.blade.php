<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@section('title','บทความ')
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
								<p><a href="{{route('index')}}">Homepage</a> / <em> Blog</em> / <em> Single Post</em></p>
								<h2>Single <em>Post</em></h2>
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
					<div class="single-post">
						<div class="item">
							<img src="https://placehold.it/750x390" alt="">
							<div class="down-content">
								<h4>{{$detail_blog->subject}}</h4>
								<ul>
									
									<li><span><em>Posted by:</em><a href="#">{{$detail_blog->post_by}}</a></span></li>
									<li><span><em>Posted on:</em>{{$detail_blog->create_at}}</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
									<li><span><em>Share on:</em><a href="https://www.facebook.com/Possible-Car-844450752587638/">Facebook</a>,<a href="#"> Youtube</a>,<a href="#"> Line</a></span></li>
								</ul>
								<p>{{$detail_blog->article}}</p>
							</div>
						</div>
						{{--    
						<div class="comments">
							<div class="sep-section-heading">
								<h2>Comments <em>3</em></h2>
							</div>
							<div class="comments-content first-comment">
								<img src="https://placehold.it/100x100" alt="">
								<div class="continue-button">
									<a href="{{route('single_post')}}">Reply<i class="fa fa-reply"></i></a>
								</div>
								<h6>Robert Williams</h6>
								<span>10/July/2015</span>
								<p>Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings.</p>
							</div>
							<div class="comments-content second-comment">
								<img src="https://placehold.it/100x100" alt="">
								<div class="continue-button">
									<a href="{{route('single_post')}}">Reply<i class="fa fa-reply"></i></a>
								</div>
								<div class="replied-button">
									<span>Replied<i class="fa fa-reply-all"></i></span>
								</div>
								<h6>Maria Morris</h6>
								<span>11/July/2015</span>
								<p>Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings.</p>
							</div>
							<div class="comments-content third-comment">
								<img src="https://placehold.it/100x100" alt="">
								<div class="continue-button">
									<a href="{{route('single_post')}}">Reply<i class="fa fa-reply"></i></a>
								</div>
								<h6>Patrick Smith</h6>
								<span>14/July/2015</span>
								<p>Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings.</p>
							</div>
						</div>
						--}}
						{{--   
						<div class="leave-comment">
							<div class="sep-section-heading">
								<h2>Leave <em>Comment</em></h2>
							</div>
							<div class="submit-comment">
								<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class=" col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" class="subject" name="s" placeholder="Subject..." value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>
										</div>
									</div>
									<div class="row">
										<div class="submit-coment col-md-12">
											<div class="primary-button">
												<a href="#">Submit now</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						 --}}
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
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-line"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="categories">
								<div class="sidebar-heading">
									<h4>Categories</h4>
								</div>
								<ul>
									<li><a href="#">เร็วๆนี้</a></li>
									<li><a href="#">เร็วๆนี้</a></li>
									
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
										<a href="{{url('/single_posts',$detail_blog->id)}}">
											<img src="https://placehold.it/70x70" alt="">
											<h6>$detail_blog->subject</h6>
											<span>$detail_blog->create_at</span>
										</a>
									</li>
									<li>
										<a href="{{url('/single_posts',$detail_blog->id)}}">
											<img src="https://placehold.it/70x70" alt="">
											<h6>$detail_blog->subject</h6>
											<span>$detail_blog->create_at</span>
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
									<li><a href="#">เร็วๆนี้</a></li>
									<li><a href="#">เร็วๆนี้</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="tags">
								<div class="sidebar-heading">
									<h4>เรื่องอื่นๆที่เกี่ยวกับรถ</h4>
								</div>
								<ul>
									<li><a href="#">รีไฟแนนซ์รถ</a></li>
									<li><a href="#">รถแลกเงิน</a></li>
									
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
	