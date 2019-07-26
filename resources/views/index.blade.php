<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@include('layout.partials.head')
		@section('title','รวมโปรโมชั่นรถ mazda honda toyota ')
		
		
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
								<h5>เราคือโชว์รูมออนไลน์</h5>
								<h3>ช่วยคุณในการเลือกโปรโมชั่น<em>ที่คุ้มค่าที่สุด</em></h3>
								{{--  <h6 class="secondary-button btn-lg ">
									<a href="{{ route('index') }}">เลือกโปรโมชั่น<i class="fa fa-car"></i></a>
								</h6>	  --}}
							</div>
							<div class="col-md-6 col-md-2 bg-light" style="border-radius: 10px;">
									<div class="container" style="align-content: center;">
											<span id="form_result"></span>
											 <h3 style="color:black">รับโปรโมชั่น ฟรีไม่มีค่าใช้จ่าย</h3>
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
							<h3  style="color:white;">หากท่านไม่สะดวกกรอกข้อมูล <a href="https://line.me/R/ti/p/%40521syyfm"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" height="36" border="0" align="center"></a>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
			<div class="container-fluid" style="padding:10px">
			<div class="container">     
				<div class="row">
					<div class="col-sm-6">
						<div align="center"><h3>ซื้อรถด้วยตนเอง</h3></div><br>
						<img src="{{asset('images/buyMyself.jpg')}}" alt="">{{--150x150--}}
						<h5>เดินทางไปยังโชว์รูมต่างๆเพื่อเปรียบเทียบโปรโมชั่น เสียเงินและเวลา ไม่สะดวกในการติดตาม</h5><br>
					</div>
					<div class="col-sm-6 ">
						<div align="center"><h3>ใช้บริการทางเรา</h3></div><br>
						<img src="{{asset('images/byPossiblecar.jpg')}}" alt="">{{--150x150--}}
						<h5>เรารวมโปรโมชั่นรถให้คุณกว่า 100 โชว์รูม 1000 กว่าโปรโมชั่น คุณไม่ต้องไปหลายโชว์รูมด้วยตัวเอง(เพียงแค่กรอกข้อมูลกับเรา)</h5><br>
					</div>
				</div>
				{{--  <div class="row">
					<div class="col-sm-6">
						<img src="{{asset('images/financeMyself.jpg')}}" alt="">
						<h5>ปกติทางโชว์รูมจะจัดไฟแนนซ์ให้กับท่านโดยที่คุณไม่มีสิทธ์ในการเลือกไฟแนนซ์กับธนาคารและข้อเสนอ</h5><br>
					</div>
					<div class="col-sm-6">
						<img src="{{asset('images/financeByPossiblecar.jpg')}}" alt="">
						<h5>เราเปรียบเทียบโปรโมชั่นของทุกธนาคารแล้ว คุณสามารถเลือกไฟแนนซ์กับธนาคารและโปรโมชั่นไหนก็ได้</h5><br>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img src="{{asset('images/difficult.jpg')}}" alt="">
						<h5>การทำไฟแนนซ์ ยุ่งยากในการจัดเอกสารและอาจมีค่าใช้จ่ายบางอย่าง</h5><br>
					</div>
					<div class="col-sm-6">
						<img src="{{asset('images/easy.jpg')}}" alt="">
						<h5>ทางเราดำเนินเอกสารให้หลายๆที่ให้ฟรี อีกทั้งรู้ผลอนุมัติคร่าวๆได้ทันที</h5><br>
					</div>
				</div> --}}
				<div class="row">
					<div class="col-sm-6 ">
							<img src="{{asset('images/uncomfort.jpg')}}" alt="">
							<h5>อาจเป็นการซื้อที่เสียเวลาและยุ่งยากสำหรับคุณ</h5><br>
						</div>
						<div class="col-sm-6 ">
							<img src="{{asset('images/comfort.jpg')}}" alt="">
							<h5>ซื้อรถง่าย ประหยัด คุ้มค่า สะดวกสะบายสำหรับคุณ</h5><br>
					</div>
				</div> 
			</div>
			</div>
		</section>

	

    <section>
		<div class="features-search-section">
				<div align="center"><h1>บริการทาง Possible Car</h1></div>
				<div class="container">
					<div class="row">	
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<img src="{{asset('images/byPossiblecar.jpg')}}" alt=""  width="150" height="150" align="middle" class="mx-auto d-block">{{--150x150--}}
										{{--  <i class="fa fa-car"></i>  --}}
											<div class="text-content">
												<h6>เรามีโปรโมชั่นรถให้คุณ</h6>
												<p>เพียงแค่กรอกข้อมูลกับเรา (ฟรี)</p><br>
											</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<img src="{{asset('images/service1.jpg')}}" alt=""  width="150" height="150" align="middle" class="mx-auto d-block">{{--150x150--}}
										{{--  <i class="fa fa-search"></i>  --}}
										<div class="text-content">
											<h6>กว่า 100 โชว์รูม 1000 กว่าโปรโมชั่น</h6>
											<p>จากเซลล์มีคุณภาพ ที่คัดสรรอย่างดีเพื่อคุณ</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<img src="{{asset('images/service3.jpg')}}" alt=""  width="150" height="150"  align="middle" class="mx-auto d-block">{{--150x150--}}
										{{--  <i class="fa fa-users"></i>  --}}
										<div class="text-content">
											<h6>เลือกข้อเสนอและเซลล์ที่ชอบ</h6>
											<p>ยังไม่พอเท่านี้! คุณยังสามารถต่อรองข้อเสนอได้อีก</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="service-item wow fadeIn" data-wow-duration="0.75s">
										<img src="{{asset('images/service4.jpg')}}" alt=""  width="150" height="150"  align="middle" class="mx-auto d-block">{{--150x150--}}
										{{--  <i class="fa fa-globe"></i>  --}}
										<div class="text-content">
											<h6>คุณไม่ต้องไปหลายโชว์รูมด้วยตัวเอง เพียงแค่</h6>
											<p>รับข้อมูลจากเราได้ทุกที่ ทุกเวลา 24 ชม.</p>
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

	<section class="bg-light" style="padding:20px">
		<div class="container ">
			<div class="row">
			<br/>
				<div class="col text-center">
					<h1>ความภาคภูมิใจและเกียรติยศ</h1>
					<p>เราจะพยายามและทำงานอย่างหนักเพื่อความสุขของคุณ</p>
				</div>						
			</div>
			<div class="row text-center">
				<div class="col">
					<div class="counter">
					  	<i class="fas fa-medal"></i>
					  	<h2 class="timer count-title count-number" data-to="2520" data-speed="8000"></h2>
					   	<h6 class="count-text ">กว่าโปรโมชั่นมากมายให้เลือก</h6>
					</div>
				</div>
				<div class="col">
					<div class="counter">
						<i class="far fa-thumbs-up"></i>
						<h2 class="timer count-title count-number" data-to="67" data-speed="4000"></h2>
					  	<h6 class="count-text ">คนที่เลือกใช้บริการเรา</h6>
					</div>
				</div>
				<div class="col">
					<div class="counter">
						<i class="fas fa-file-export"></i>
						<h2 class="timer count-title count-number" data-to="336" data-speed="6000"></h2>
						<h6 class="count-text ">กว่าโปรโมชั่นที่เสนอไปแล้ว</h6>
					</div>
				</div>
				<div class="col">
					<div class="counter">
						<i class="	far fa-user"></i>
						<h2 class="timer count-title count-number" data-to="126" data-speed="5000"></h2>
						<h6 class="count-text ">กว่าเจ้าหน้าที่ ที่พร้อมให้บริการคุณ</h6>
					</div>
				</div>
			</div>
		</div>
	</section>

		
	<!-- Modal -->
	<div id="success_tic" class="modal fade" role="dialog">
  		<div class="modal-dialog modal-dialog-centered">
			<!-- Modal content-->
			<div class="modal-content">
				<a class="close" href="#" data-dismiss="modal">&times;</a>
				<div class="page-body">
					<div class="head">  
						<h5 style="margin-top:5px;">ข้อมูลของท่านถูกส่งแล้ว จะมีเจ้าหน้าที่ติดต่อภายใน 24 ชม.</h5>
						<p>ขอขอบคุณที่ท่านติดต่อเรา เราจะเร่งพัฒนาให้ดียิ่งขึ้น</p>
					</div>
					<h1 style="text-align:center;">
						<div class="checkmark-circle">
							<div class="background"></div>
							<div class="checkmark draw"></div>
						</div>
					<h1>
				</div>
			</div>
    	</div>
  	</div>

	
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
								$("#success_tic").modal({backdrop:true});
						  		//html = '<div class="alert alert-success">' + data.success + '</div>';
								$('#sample_form')[0].reset();
								  
						 	}
							$('#form_result').html(html);
							 
						}
					})
				}	
						
		 	});
			  
		});
	</script>
	<script>
			(function ($) {
				$.fn.countTo = function (options) {
					options = options || {};
					
					return $(this).each(function () {
						// set options for current element
						var settings = $.extend({}, $.fn.countTo.defaults, {
							from:            $(this).data('from'),
							to:              $(this).data('to'),
							speed:           $(this).data('speed'),
							refreshInterval: $(this).data('refresh-interval'),
							decimals:        $(this).data('decimals')
						}, options);
						
						// how many times to update the value, and how much to increment the value on each update
						var loops = Math.ceil(settings.speed / settings.refreshInterval),
							increment = (settings.to - settings.from) / loops;
						
						// references & variables that will change with each update
						var self = this,
							$self = $(this),
							loopCount = 0,
							value = settings.from,
							data = $self.data('countTo') || {};
						
						$self.data('countTo', data);
						
						// if an existing interval can be found, clear it first
						if (data.interval) {
							clearInterval(data.interval);
						}
						data.interval = setInterval(updateTimer, settings.refreshInterval);
						
						// initialize the element with the starting value
						render(value);
						
						function updateTimer() {
							value += increment;
							loopCount++;
							
							render(value);
							
							if (typeof(settings.onUpdate) == 'function') {
								settings.onUpdate.call(self, value);
							}
							
							if (loopCount >= loops) {
								// remove the interval
								$self.removeData('countTo');
								clearInterval(data.interval);
								value = settings.to;
								
								if (typeof(settings.onComplete) == 'function') {
									settings.onComplete.call(self, value);
								}
							}
						}
						
						function render(value) {
							var formattedValue = settings.formatter.call(self, value, settings);
							$self.html(formattedValue);
						}
					});
				};
				
				$.fn.countTo.defaults = {
					from: 0,               // the number the element should start at
					to: 0,                 // the number the element should end at
					speed: 1000,           // how long it should take to count between the target numbers
					refreshInterval: 100,  // how often the element should be updated
					decimals: 0,           // the number of decimal places to show
					formatter: formatter,  // handler for formatting the value before rendering
					onUpdate: null,        // callback method for every time the element is updated
					onComplete: null       // callback method for when the element finishes updating
				};
				
				function formatter(value, settings) {
					return value.toFixed(settings.decimals);
				}
			}(jQuery));
			
			jQuery(function ($) {
			  // custom formatting example
			  $('.count-number').data('countToOptions', {
				formatter: function (value, options) {
				  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			  });
			  
			  // start all the timers
			  $('.timer').each(count);  
			  
			  function count(options) {
				var $this = $(this);
				options = $.extend({}, options || {}, $this.data('countToOptions') || {});
				$this.countTo(options);
			  }
			});
	</script>				
</body>
</html>
