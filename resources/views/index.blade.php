<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@section('title','หน้าแรก')
		@include('layout.partials.head')
		
</head>
<body>
	
	@include('layout.partials.nav')
	<div class="Modern-Slider">
	  <!-- Slide 1 -->
	  <div class="item">
	    <div class="img-fill">
		  {{-- <img src="http://placehold.it/1920x1080" alt=""> --}}
		  <img src="{{asset('images/indexcover1.jpg')}}" alt="">
	      <div class="info">
	        <div >
				<h5>เราคือโชว์รูมออนไลน์</h5>
				<h3>ช่วยคุณในการเลือกโปรโมชั่น<em>ที่คุ้มค่าที่สุด</em></h3>
          		<h6 class="secondary-button">
	          		<a href="{{route('car-view-grid')}}">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!-- // Slide 1 -->
	  <!-- Slide 2 -->
	  <div class="item">
	    <div class="img-fill">
		  
		  <img src="{{asset('images/indexcover6.jpg')}}" alt="">
	      <div class="info">
	        <div>
				<h5>เราคือโชว์รูมออนไลน์ดีที่สุดของประเทศไทย</h5>
				<h3>กำลังมองหารถคันใหม่อยู่<em></em>?</h3>
					
	          	<h6 class="secondary-button">
	          		<a href="{{route('car-view-grid')}}">ค้นหารถ <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!-- Slide 2 -->
	  <!-- Slide 3 -->
	  <div class="item">
	    <div class="img-fill">
		  
		  <img src="{{asset('images/indexcover7.jpg')}}" alt="">
	      <div class="info">
	        <div>
				<h5>เราคือโชว์รูมออนไลน์ดีที่สุดของประเทศไทย</h5>
				<h3>ช่วยเลือกโปรโมชั่นที่คุ้มค่าที่สุด<em>จากทั่วประเทศ</em></h3>
	          	<h6 class="secondary-button">
	          		<a href="{{route('car-view-grid')}}">ค้นหารถ <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!-- // Slide 3 -->
	</div>

{{-- /////////////////////////////////////////////////////////////////////// --}}
	<section class="top-slider-features wow fadeIn" data-wow-duration="1.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="slider-top-features">
						<div id="owl-top-features" class="owl-carousel owl-theme">
							@foreach($products as $product)
							{{--  //@if($product->category->status==1)  --}}
							<div class="item car-item">
								<div class="thumb-content">
									{{--  <a href="{{route('detail-car')}}"><img src="http://placehold.it/370x260" alt=""></a>  --}}
									<a href="{{url('/detail-car',$product->id)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$product->brand}}/{{$product->model}}/370_260/{{ $product->image }}" class="img-thumbnail" alt=""  ></a>
								</div>
								<div class="down-content">
									<a href="{{url('/detail-car',$product->id)}}"><h4>{{$product->model}}</h4></a>
									<span>{{$product->price}}บาท</span>
								</div>
							</div>
							{{--  //@endif  --}}
								
							@endforeach 
		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	
	<section>
		<div class="recent-cars">
			<div class="container">
				<div class="recent-car-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="text-content">
									<h2>flash Sale </h2>
									<span>ดิลใหม่มีจำนวนจำกัดรีบกดซื้อเลย</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						@foreach($products as $product)
						@if($product->status_car=='flash')	
						{{--  //@if($product->category->status==1)  --}}
							
							{{--  //@endif  --}}
							
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
											
										<a href="{{url('/detail-car',$product->id)}}">มีจำกัด</a>
									</div>
									<div class="thumb-inner">
										{{--  <a href="{{route('detail-car')}}"><img src="http://placehold.it/370x260" alt=""></a>  --}}
										<a href="{{url('/detail-car',$product->id)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$product->brand}}/{{$product->model}}/370_260/{{$product->image}}" class="img-thumbnail" alt=""></a>
									</div>
								</div>
								<div class="down-content">	
									<a href="{{url('/detail-car',$product->id)}}"><h4>{{$product->brand }} {{  $product->model}}</h4></a>
									<span>ราคาเริ่มต้น {{$product->price}} บาท</span>
									<p>{{str_limit($product->title,90)}}</p>	
						
								</div>
							</div>
						</div>
						@endif
						@endforeach 
						
					</div>
				</div>
			</div>
		</div>
	</section>

	{{--   
    <section>
			<div class="features-search-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-car"></i>
											<div class="text-content">
											<h6>Sell &amp; Buy Cars</h6>
											<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-search"></i>
											<div class="text-content">
											<h6>Car Dealer Research</h6>
											<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-users"></i>
											<div class="text-content">
											<h6>Best Dealers</h6>
											<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-globe"></i>
											<div class="text-content">
											<h6>World Wide Known</h6>
											<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="search-content wow fadeIn" data-wow-duration="0.75s">
								<div class="search-heading">
									<div class="icon">
										<i class="fa fa-search"></i>
									</div>
									<div class="text-content">
										<h2>Quick Search</h2>
										<span>We made a quick search just for you</span>
									</div>
								</div>
								<div class="search-form">
									<div class="row">
										<div class="col-md-12">       
											<div class="input-select">
												<select name="brand" id="brand">
													<option value="-1">เลือกแบรนด์</option>
													  <option>Toyota</option>
													  <option>Honda</option>
													  <option>Isuzu</option>
													  <option>Mazda</option>
													  <option>Mitsubishi</option>
													  <option>Nissan</option>
													  <option>Ford</option>
													  <option>Chevrorate</option>
													  <option>Benz</option>
													  <option>BMW</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">       
											<div class="input-select">
												<select name="mark" id="mark">
													<option value="-1">เลือกรุ่น</option>
													  <option>Audi A3</option>
													  <option>Audi A4</option>
													  <option>Audi A5</option>
													  <option>Audi A6</option>
													  <option>Audi A7</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">       
											<div class="input-select">
												<select name="min-price" id="min-price">
													<option value="-1">ราคาต่ำสุด</option>
													  <option>500,000</option>
													  <option>750,000</option>
													  <option>1,000,000</option>
													  <option>1,500,000</option>
													  <option>2,000,000</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">       
											<div class="input-select">
												<select name="max-price" id="max-price">
													<option value="-1">ราคาสูงสุด</option>
														<option>500,000</option>
														<option>750,000</option>
														<option>1,000,000</option>
														<option>1,500,000</option>
														<option>2,000,000</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="secondary-button">
												<a href="#">Search <i class="fa fa-search"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		--}}
	
		<section>
			<div class="call-to-action wow fadeIn" data-wow-duration="0.75s">
				<div class="container">
					<div class="call-to-action-content">
						<div class="row">
							<div class="col-md-12">
								<p>กรอกข้อมูลของคุณเพื่อให้เราติดต่อสอบถามรายละเอียดความต้องการของคุณ<em></em></p>
								<div class="secondary-button">
									<a href="#">กรอกเลย <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
				<div class="latest-news">
					<div class="container">
						<div class="latest-news-content">
							<div class="row">
								<div class="col-md-12">
									<div class="section-heading">
										<div class="icon">
											<i class="fa fa-file"></i>
										</div>
										<div class="text-content">
											<h2>ข่าวใหม่ล่าสุด</h2>
											<span>อ่านข่าวหรือเทคนิครถต่างๆได้ที่นี่</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							@foreach($blog_slides as $blog_slide)
							<div class="col-md-4">
								<div class="item wow fadeIn" data-wow-duration="0.75s">
									 <div class="thumb-content">
										<div class="date-post">
											<a href="{{route('article-post',$blog_slide->id)}}">{{$blog_slide->create_at}}</a>
										</div>
							
										<div class="thumb-inner">
											<a href="{{route('article-post',$blog_slide->id)}}"><img src="http://placehold.it/370x260" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{route('article-post',$blog_slide->id)}}"><h4>{{$blog_slide->subject}}</h4></a>
										<span>Posted by: <em>{{$blog_slide->post_by}}</em></span>
										<p>{{$blog_slide->article}}</p>	
										<div class="text-button">
											<a href="{{route('article-post',$blog_slide->id)}}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
								  </div>
							</div>
							
							@endforeach
						
						</div>
					</div>
				</div>
			</section>
			
	{{--  <section>
		<div class="testimonials">
			<div class="container">						 
				<div id="owl-testimonials" class="owl-carousel owl-theme">
				 	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>John Robertson</h4>
				  			<div class="line-dec2"></div>
				  			<span>Sale Agent</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>Matias Lucas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Mechanic</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>John Robertson</h4>
				  			<div class="line-dec2"></div>
				  			<span>Sale Agent</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>Matias Lucas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Mechanic</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="http://placehold.it/100x100" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				</div>
			</div>
		</div>
	</section>  --}}
	
	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')



	
</body>
</html>
