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
			{{--1920x1080--}}
				<img src="{{asset('images/indexcover1.jpg')}}" alt="">
				<div class="info">
					<div class=col-md-6>
						<h5>เราคือโชว์รูมออนไลน์</h5>
						<h3>ช่วยคุณในการเลือกโปรโมชั่น<em>ที่คุ้มค่าที่สุด</em></h3>
						<h6 class="secondary-button btn-lg ">
							<a href="{{route('car-view-grid')}}">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
							
						</h6>
					</div>
					<div class=col-md-6>
						
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
						
						<h6 class="secondary-button btn-lg">

								<a href="{{route('car-view-grid')}}">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
							</h6>
					
					<!-- Trigger the modal with a button -->
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
					<h6 class="secondary-button btn-lg">
							<a href="{{route('car-view-grid')}}">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>

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
									{{--  <a href="{{route('detail-car')}}"><img src="https://placehold.it/370x260" alt=""></a>  --}}
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
										{{--  <a href="{{route('detail-car')}}"><img src="https://placehold.it/370x260" alt=""></a>  --}}
										<a href="{{url('/detail-car',$product->id)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$product->brand}}/{{$product->model}}/370_260/{{$product->image}}" class="img-fluid" alt=""></a>
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
											<a href="{{route('article-post',$blog_slide->id)}}"><img src="https://placehold.it/370x260" alt=""></a>
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
				  			<img src="https://placehold.it/100x100" alt="">
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
				  			<img src="https://placehold.it/100x100" alt="">
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
				  			<img src="https://placehold.it/100x100" alt="">
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
				  			<img src="https://placehold.it/100x100" alt="">
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
				  			<img src="https://placehold.it/100x100" alt="">
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
				  			<img src="https://placehold.it/100x100" alt="">
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
				  			<img src="https://placehold.it/100x100" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				</div>
			</div>
		</div>
	</section>  --}}
	
	<!-- Modal -->
	<div class="modal fade" id="myModal2" role="dialog" >
																	   
		<div class="modal-dialog model-sm modal-dialog-centered ">
		
		<!-- Modal content-->
		<div class="modal-content" >
			<div class="modal-header" ;>
			<h5 class="modal-title" >สอบถามรถที่ต้องการ</h5>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
				<div class="modal-body" >
									<span id="form_result"></span>
									<form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
									 @csrf
									 <div class="form-group">
										<label class="control-label col-md-12" >ชื่อของท่าน : </label>

									   <div class="col-md-12">
										<input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="">
									   </div>
									  </div>
									  <div class="form-group">
									   <label class="control-label col-md-12">เบอร์ติดต่อของท่าน : </label>
									   <div class="col-md-12">
										<input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="">
									   </div>
									  </div>
									  {{--    --}}
									  <div class="form-group">
										   <label class="control-label col-md-12"> Line ID หรือ Facebook ของท่าน : </label>
										   <div class="col-md-12">
												<input type="text" name="customer_social" id="customer_social" class="form-control" placeholder="">
										   </div>
									   </div>
									   <div class="form-group">
											  <label class="control-label col-md-12"> รุ่นรถที่สนใจ : </label>
											  <div class="col-md-12">
												   <input type="text" name="model" id="model" class="form-control" placeholder="">
											  </div>
										  </div>
										  <div class="form-group">
												<label class="control-label col-md-12"> เงินที่ต้องการดาวน์ (ไม่ใส่ก็ได้) :</label>
												<div class="col-md-12">
													 <input type="text" name="car_down" id="car_donw" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
													<label class="control-label col-md-12"> ผ่อนเท่าไรต่อเดือน (ไม่ใส่ก็ได้) :</label>
													<div class="col-md-12">
														 <input type="text" name="installment" id="installment" class="form-control" placeholder="">
													</div>
												</div>
			  
									  <div class="form-group" align="center">
									   <input type="hidden" name="action" id="action" />
									   <input type="hidden" name="hidden_id" id="hidden_id" />
									   <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="ส่งข้อมูล"/>
									  </div>
									</form>
							
				</div>
				<div class="modal-left">
					<p align="center">เว็บกำลังเร่งการพัฒนา เราขอขอบคุณท่านที่สนับสนุนเรา</p>
				</div>
			</div>
		
		</div>
	</div>
	{{--    --}}

	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
			$('.modal').insertAfter($('body'));
			$(document).ready(function(){
			
				$("#myModal2").modal({backdrop:true});
					  $('.modal-title').text("แบบฟอร์มขอรับโปรโมชั่น ฟรีไม่มีค่าใช้จ่าย");
						 $('#action_button').val("ส่งข้อมูล");
						 $('#action').val("ส่งข้อมูล");
						 $('#formModal').appendTo("body").modal('show');
						 


					 $('#sample_form').on('submit', function(event){
					  event.preventDefault();
					  if($('#action').val() == 'ส่งข้อมูล')
					  {
					   $.ajax({
						url:"{{ route('customerOrder.store') }}",
						method:"POST",
						data: new FormData(this),
						contentType: false,
						cache:false,
						processData: false,
						dataType:"json",
						success:function(data)
						{
						 var html = '';
						 if(data.errors)
						 {
						  html = '<div class="alert alert-danger">';
						  for(var count = 0; count < data.errors.length; count++)
						  {
						   html += '<p>' + data.errors[count] + '</p>';
						  }
						  html += '</div>';
						 }
						 if(data.success)
						 {
						  html = '<div class="alert alert-success">' + data.success + '</div>';
						  $('#sample_form')[0].reset();
						 }
						 $('#form_result').html(html);
						}
					   })
					  }
					
				
		 });
			  
	});
					</script>
						
	

	
</body>
</html>
