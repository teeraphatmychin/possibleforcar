<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		
		@section('title','รายละเอียดรถ')
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
								<p><a href="{{route('index')}}">หน้าแรก</a> / <em> โปรโมชั่นรถยนต์</em> / <em> รายละเอียดรถยนต์</em></p>
								<h2>สเป็ค <em>รถยนต์</em></h2>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
					<div class="col-md-6">
						<div id="single-car" class="slider-pro">
							<div class="sp-slides">
							
								<div class="sp-slide">
									{{--  <img class="sp-image" src="https://placehold.it/570x450" alt="" />  --}}
									<img class="sp-image" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/570_450/1.jpg" alt="">	
								</div>

						        <div class="sp-slide">
									{{--  <img class="sp-image" src="https://placehold.it/570x450" alt="" />  --}}
									<img class="sp-image" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/570_450/2.jpg" alt="">
								</div>

								<div class="sp-slide">
									{{--  <img class="sp-image" src="https://placehold.it/570x450" alt="" />  --}}
									<img class="sp-image" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/570_450/3.jpg" alt="">
								</div>

								<div class="sp-slide">
									{{--  <img class="sp-image" src="https://placehold.it/570x450" alt="" />  --}}
									<img class="sp-image" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/570_450/4.jpg" alt="">
								</div>

								<div class="sp-slide">
									{{--  <img class="sp-image" src="https://placehold.it/570x450" alt="" />  --}}
									<img class="sp-image" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/570_450/5.jpg" alt="">
								</div>

							</div>

							<div class="sp-thumbnails">
								{{--  <img class="sp-thumbnail" src="https://placehold.it/120x80" alt="" />  --}}
								<img class="sp-thumbnail" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/120_80/1.jpg" alt="">
								<img class="sp-thumbnail" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/120_80/2.jpg" alt="">
								<img class="sp-thumbnail" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/120_80/3.jpg" alt="">
								<img class="sp-thumbnail" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/120_80/4.jpg" alt="">
								<img class="sp-thumbnail" src="{{ URL::to('/') }}/images/allcar/{{$detail_car->brand}}/{{$detail_car->model}}/120_80/5.jpg"lt="">								
							</div>
					    </div>
					</div>
					<div class="col-md-6">
						<div class="car-details">
							<a href="{{url('/single_car',$detail_car->id)}}"><h4></h4></a>
							<h4>{{$detail_car->brand }} {{ $detail_car->model}}</h4>
							<span>{{$detail_car->price}} บาท</span>
							
							<div class="container">
								<div class="row">
									<ul class="car-info col-md-6">
										<li><i class="flaticon flaticon-calendar"></i><p>{{$detail_car->year_model}}</p></li>
										<li><i class="flaticon flaticon-speed"></i><p>{{$detail_car->speed}} p/h</p></li>
										<li><i class="flaticon flaticon-road"></i><p>{{$detail_car->road}}</p></li>
										<li><i class="flaticon flaticon-fuel"></i><p>{{$detail_car->engine}}</p></li>
									</ul>
									<ul class="car-info col-md-6">
										<li><i class="flaticon flaticon-art"></i><p>White</p></li>
										<li><i class="flaticon flaticon-shift"></i><p>{{$detail_car->type}}</p></li>
										<li><i class="flaticon flaticon-car"></i><p>4/5</p></li>
										<li><i class="flaticon flaticon-motor"></i><p>3000cm3</p></li>
									</ul>
								</div>
							</div>
							<div class="similar-info">
									{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">สนใจโปรโมชั่นนี้</button>		 --}}
									<!-- Trigger the modal with a button -->
									<button type="button" class="btn btn-success" id="myBtn2">สนใจโปรโมชั่นนี้</button>
									<!-- Modal -->
									<div class="modal fade" id="myModal2" role="dialog" >
																									   
										<div class="modal-dialog modal-dialog-centered" style="z-index: 9999999999999999999999;">
										
										<!-- Modal content-->
										<div class="modal-content" >
											<div class="modal-header" ;>
											<h4 class="modal-title" >{{$detail_car->brand}} {{$detail_car->model}}</h4>
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
																		   <label class="control-label col-md-12"> สะดวกให้ติดต่อทางไลน์หรือเฟสบุ๊ค : </label>
																		   <div class="col-md-12">
																				<input type="text" name="customer_social" id="customer_social" class="form-control" placeholder="">
																		   </div>
																	   </div>
																	   
																	  <br />
																	  <div class="form-group" align="center">
																	   <input type="hidden" name="action" id="action" />
																	   <input type="hidden" name="hidden_id" id="hidden_id" />
																	   <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="ส่งข้อมูล" />
																	  </div>
																	</form>
															



												</div>
											
											</div>
										
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{--    --}}
	<section>
			<div class="container">
				<form id="frmAdd" name="frmAdd" method="post" action="">
					<ul class="nav nav-tabs">
						<li class="nav-item"><a class="nav-link active" href="#CalTab1" data-toggle="tab">เงินดาวน์ (%)</a></li>
						<li class="nav-item"><a class="nav-link" href="#CalTab2" data-toggle="tab">เงินดาวน์ (บาท)</a></li>
					</ul>
					<div id="myTabContent" class="tab-content" >
						<div id="CalTab1" class="tab-pane fade  active in">
							<div class="form-main">
								<div class="form-group">
									<label for="price1">ราคารถ/บาท</label>
									<input type="text" class="form-control" id="price1" placeholder="โปรดระบุ" required >
								</div>
							
							<div class="form-group">
								<label for="down_percent1">จำนวนเงินดาวน์/เปอร์เซ็นต์ (%)</label>
								<input type="number" class="form-control " id="down_percent1" placeholder="โปรดระบุ">
							</div>	
					
							
							<div class="form-group">
								<label for="pernum1">จำนวนงวด</label>
								<select name="pernum1" id="pernum1" class="form-control ">
									<option value="12">12 งวด (1 ปี)</option>
									<option value="24">24 งวด (2 ปี)</option>
									<option value="36">36 งวด (3 ปี)</option>
									<option value="48">48 งวด (4 ปี)</option>
									<option value="60">60 งวด (5 ปี)</option>
									<option value="72">72 งวด (6 ปี)</option>
								</select>
							</div>
					
							<div class="form-group">
								<label for="Interest1">ดอกเบี้ย/%ต่อปี</label>
								<input type="number" class="form-control " id="Interest1" placeholder="โปรดระบุ">
							</div>
						</div> <!-- /form-main -->
		
						<div class="row">
							<div class="form-group col-md-4">
								<label for="down_baht1">เป็นเงินดาวน์/บาท</label>
								<input type="text" class="form-control " id="down_baht1" placeholder="..." disabled="">
							</div>		
						
							<div class="form-group col-md-4">
								<label for="price_remain1">ยอดจัดไฟแนนซ์</label>
								<input type="text" class="form-control " id="price_remain1" placeholder="..." disabled="">
							</div>	
							
							<div class="form-group has-success col-md-4">
								<label for="pay_month1">ค่างวดต่อเดือน/บาท</label>
								<input type="text" class="form-control " id="pay_month1" placeholder="..." disabled="">
							</div>
						</div> <!-- /row -->
					<button type="button" class="btn btn-success btn-lg" onclick="calCar1();" >คำนวณ</button>
					<button type="reset" class="btn btn-default btn-lg">ล้างข้อมูล</button>
			
		
				</div><!-- /CalTab1 -->
			<div id="CalTab2" class="tab-pane fade">
		
				<div class="form-main">
					<div class="form-group">
						<label for="price2">ราคารถ/บาท</label>
						<input type="text" class="form-control" id="price2" placeholder="โปรดระบุ" required  >
					</div>
					
					<div class="form-group">
						<label for="down_baht2">จำนวนเงินดาวน์/บาท</label>
						<input type="text" class="form-control " id="down_baht2" placeholder="โปรดระบุ">
					</div>	
					
					<div class="form-group">
						<label for="pernum2">จำนวนงวด</label>
						<select name="pernum1" id="pernum2" class="form-control ">
								<option value="12">12 งวด (1 ปี)</option>
								<option value="24">24 งวด (2 ปี)</option>
								<option value="36">36 งวด (3 ปี)</option>
								<option value="48">48 งวด (4 ปี)</option>
								<option value="60">60 งวด (5 ปี)</option>
								<option value="72">72 งวด (6 ปี)</option>
							  </select>
					</div>
					
					<div class="form-group">
						<label for="Interest2">ดอกเบี้ย/%ต่อปี</label>
						<input type="number" class="form-control " id="Interest2" placeholder="โปรดระบุ">
					</div>
				</div> <!-- /form-main -->
		
				<div class="row">
					<div class="form-group col-md-4">
						<label for="down_percent2">เป็นเปอร์เซ็นต์เงินดาวน์/%</label>
						<input type="text" class="form-control " id="down_percent2" placeholder="..." disabled="">
					</div>		
					
					<div class="form-group col-md-4">
						<label for="price_remain2">ยอดจัดไฟแนนซ์</label>
						<input type="text" class="form-control " id="price_remain2" placeholder="..." disabled="">
					</div>	
					
					<div class="form-group has-success col-md-4">
						<label for="pay_month2">ค่างวดต่อเดือน/บาท</label>
						<input type="text" class="form-control " id="pay_month2" placeholder="..." disabled="">
					</div>
				</div> <!-- /row -->
			
			  <button type="button" class="btn btn-success btn-lg" onclick="calCar2();" >คำนวณ</button>
			  <button type="reset" class="btn btn-default btn-lg">ล้างข้อมูล</button>	
			</div><!-- /CalTab2 -->
		
		
		
		</div> <!-- /myTabContent -->
		  
		</form>
		
		
			</div>
	</section>
	<section>
		<div class="more-details">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="item wow fadeInUp" data-wow-duration="0.5s">
							<div class="sep-section-heading">
								<h2> <em>รายละเอียดรถ</em></h2>
							</div>
							<p>{{$detail_car->detail}}<br><br> <em></em><br><br></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item wow fadeInUp" data-wow-duration="0.75s">
							<div class="sep-section-heading">
								<h2>ข้อเสนิ <em>Features</em></h2>
							</div>
							<div class="info-list">
								<ul>
									<li><i class="fa fa-check-square"></i><span>Neon lights under</span></li>
									<li><i class="fa fa-check-square"></i><span>ABS brakes</span></li>
									<li><i class="fa fa-check-square"></i><span>ESP</span></li>
									<li><i class="fa fa-check-square"></i><span>ESD</span></li>
									<li><i class="fa fa-check-square"></i><span>Anti-th</span></li>
									<li><i class="fa fa-check-square"></i><span>Tined glass</span></li>
									<li><i class="fa fa-check-square"></i><span>Alarm</span></li>
									<li><i class="fa fa-check-square"></i><span>Protection framework</span></li>
									<li><i class="fa fa-check-square"></i><span>Parking sensor</span></li>
									<li><i class="fa fa-check-square"></i><span>Electric windows</span></li>
									<li><i class="fa fa-check-square"></i><span>Electric mirrors</span></li>
									<li><i class="fa fa-check-square"></i><span>Xenon</span></li>
									<li><i class="fa fa-check-square"></i><span>Designed spoiler</span></li>
									<li><i class="fa fa-check-square"></i><span>Steering wheels control</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="item">
							<div class="sep-section-heading">
								<h2></h2>
							</div>
							<p></p>
							<div class="contact-info">
								<div class="row">
									<div class="phone col-md-12 col-sm-6 col-xs-6">
										<i class="fa fa-phone"></i><span>+900212368</span>
									</div>
									<div class="mail col-md-12 col-sm-6 col-xs-6">
										<i class="fa fa-envelope"></i><span>possiblecar.4@gmail.com</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
			<div class="recent-car similar-car wow fadeIn" data-wow-duration="1s">
				<div class="container">
					<div class="recent-car-content">
						<div class="row">
							<div class="col-md-12">
								<div class="section-heading">
									<div class="icon">
										<i class="fa fa-car"></i>
									</div>
									<div class="text-content">
										<h2>รถที่คล้ายกัน</h2>
										<span>คุณอาจจะสนใจรุ่นนี้</span>
									</div>
								</div>
							</div>
						</div>
						<div id="owl-similar" class="owl-carousel owl-theme">
							@foreach($slide_similars as $slide_similar)
								@if($slide_similar->type == '{{$slide_similar->type}}')
								{{--  //@if($product->category->status==1)  --}}
								<div class="item car-item">
									<div class="thumb-content">
									{{--  <a href="{{route('single_car')}}"><img src="https://placehold.it/370x260" alt=""></a>  --}}
									<a href="{{url('/single_car_test',$slide_similar->id)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$slide_similar->brand}}/{{$slide_similar->model}}/370_260/{{ $slide_similar->image }}" class="img-thumbnail" alt=""></a>
									</div>
									<div class="down-content">
										<a href="{{url('/single_car_test',$slide_similar->id)}}"><h4>{{$slide_similar->model}}</h4></a>
										<span>{{$slide_similar->price}} บาท</span>
									</div>
								</div>
								{{--  //@endif  --}}
								@endif
							@endforeach 
						</div>
					</div>
				</div>
			</div>
		</section>
		{{--  //////////////////////////////////////////////////////////////////  --}}
		
	
	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
			$('.modal').insertAfter($('body'));
			$(document).ready(function(){
			$("#myBtn2").click(function(){
				$("#myModal2").modal({backdrop: true});
					  $('.modal-title').text("สนใจโปรโมชั่นของรถรุ่นนี้");
						 $('#action_button').val("ส่งข้อมูล");
						 $('#action').val("ส่งข้อมูล");
						 $('#formModal').appendTo("body").modal('show');
						
					 });
					
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
						  $('#car_manage_table').DataTable().ajax.reload();
						 }
						 $('#form_result').html(html);
						}
					   })
					  }
					
		
		 });
			  
	});
	//


</script>

	

						
	
</body>
</html>