<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@section('title','')
		@include('layout.partials.head')
		
</head>
<body>
	
	@include('layout.partials.nav')

	<div class="Modern-Slider">
		<!-- Slide 1 -->
		<div class="item">
			<div class="img-fill">
				<img src="{{asset('images/indexcover1.jpg')}}" alt="">{{--1920x1080--}}
				<div class="info-center">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-ms-1">
								<h5 >เราคือโชว์รูมออนไลน์</h5>
								<h3>ช่วยคุณในการเลือกโปรโมชั่น<em>ที่คุ้มค่าที่สุด</em></h3>
								{{--  <h6 class="secondary-button btn-lg ">
									<a href="{{ route('index') }}">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
								</h6>	  --}}
							</div>
							<div class="col-md-6 col-ms-1 bg-light" style="border-radius: 10px;">
									<div class="container" style="align-content: center;">
											<span id="form_result"></span>
											 <h3 style="color:black">ขอรับโปรโมชั่น ฟรีไม่มีค่าใช้จ่าย</h3>
										<form method="post" id="sample_form" class="form-row bt-light" enctype="multipart/form-data">
												@csrf
												<div class="form-group col-md-6">
													<label for="customer_name" >ชื่อของท่าน : </label>
													<input type="text" name="customer_name" id="customer_name" class="form-control form-control-lg" placeholder="">
												</div>
												<div class="form-group col-md-6">
													<label for="customer_phone">เบอร์ติดต่อของท่าน : </label>
													<input type="text" name="customer_phone" id="customer_phone" class="form-control form-control-lg" placeholder="">
												</div>
												<div class="form-group col-md-6">
													<label for="customer_social"> Line ID หรือ Facebook ของท่าน : </label>
													<input type="text" name="customer_social" id="customer_social" class="form-control form-control-lg" placeholder="">
												</div>
												<div class="form-group col-md-6">
													<label for="model"> รุ่นรถที่สนใจ : </label>
													<input type="text" name="model" id="model" class="form-control form-control-lg" placeholder="">
												</div>
												<div class="form-group col-md-6">
													<label for="car_down"> เงินที่ต้องการดาวน์ (ไม่ใส่ก็ได้) :</label>												
													<input type="text" name="car_down" id="car_donw" class="form-control form-control-lg" placeholder="">
												</div>
												<div class="form-group col-md-6">
													<label for="installment"> ผ่อนเท่าไรต่อเดือน (ไม่ใส่ก็ได้) :</label>													
													<input type="text" name="installment" id="installment" class="form-control form-control-lg" placeholder="">													
												</div>
													<div class="form-group col-md-12">
														<input type="hidden" name="action" id="action" />
														<input type="hidden" name="hidden_id" id="hidden_id" />
														<input type="submit" style="border-radius: 5px;" name="action_button" id="action_button" class="btn btn-success btn-block" value="ส่งข้อมูล"/>
													</div>
												
										</form>	
										<p align="center">เว็บกำลังเร่งการพัฒนา เราขอขอบคุณท่านที่สนับสนุนเรา</p>  			
									</div>
									
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
		<!-- // Slide 1 -->
		{{--  <!-- Slide 2 -->
		<div class="item">
			<div class="img-fill">
			
			<img src="{{asset('images/indexcover6.jpg')}}" alt="">
			<div class="info">
				<div>
					<h5>เราคือโชว์รูมออนไลน์ดีที่สุดของประเทศไทย</h5>
					<h3>กำลังมองหารถคันใหม่อยู่<em></em>?</h3>
						
						<h6 class="secondary-button btn-lg">

								<a href="#">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
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
							<a href="#">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
					</h6> 
				</div>
			</div>
			</div>
		</div>
		<!-- // Slide 3 -->  --}}

	</div>
{{-- /////////////////////////////////////////////////////////////////////// --}}

<section>
	<div class="call-to-action wow fadeIn" data-wow-duration="0.75s">
		<div class="container">
			<div class="call-to-action-content">
				<div class="row" >
					<div class="col-md-12" align="center">
						<h3  style="color:white;">หากท่านไม่สะดวกกรอกข้อมูล 	<a href="https://line.me/R/ti/p/%40521syyfm"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" height="36" border="0" align="center"></a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



 
    <section>
		<div class="features-search-section">
			<div class="container">
				<div align="center"><h1>บริการของเราคือ</h1></div>
					<div class="row">	
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-car"></i>
											<div class="text-content">
												<h6>คุณไม่ต้องไปหลายโชว์รูมด้วยตัวเอง</h6>
												<p>เพียงแค่สมัครออนไลน์กับเรา (ฟรี)</p>
											</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-search"></i>
										<div class="text-content">
											<h6>เรามีโปรโมชั่นรถให้คุณ (ฟรี)</h6>
											<p>กว่า 100 โชว์รูม 1000 กว่าโปรโมชั่น</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-users"></i>
										<div class="text-content">
											<h6>เจ้าหน้าจะเสนอโปรโมชั่นต่างๆ</h6>
											<p>มีข้อเสนอ ราคา ของแถม ที่คุ้มค่าที่สุดให้กับคุณ</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<i class="fa fa-globe"></i>
										<div class="text-content">
											<h6>คุณเลือกข้อเสนอที่ดีทีสุดสำหรับคุณ</h6>
											<p>หรือให้เราคัดเลือกแล้วติดต่อคุณ</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						{{--  <div class="col-md-4">
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
						</div>  --}}
					</div>
				</div>
			</div>
	</section>
		
	
	
	<!-- Modal -->
	<div class="modal fade" id="myModal2" role="dialog" >	   
		<div class="modal-dialog model-sm ">
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
							
				</div
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
		$(document).ready(function()
		{
			
			//$("#myModal2").modal({backdrop:true});
			//$('.modal-title').text("แบบฟอร์มขอรับโปรโมชั่น ฟรีไม่มีค่าใช้จ่าย");
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
