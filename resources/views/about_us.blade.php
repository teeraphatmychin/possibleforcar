<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@section('title','เกี่ยวกับเรา')
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
									<p><a href="{{route('index')}}">Homepage</a> / <em> About Us</em></p>
									<h2>About <em>Us</em></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		{{--  <div class="services-first about-services wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="service-item">
							<i class="fa fa-car"></i>
								<div class="text-content">
								<h6>Sell &amp; Buy Cars</h6>
								<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90''s.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<i class="fa fa-gear"></i>
								<div class="text-content">
								<h6>Buy Defect Cars</h6>
								<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90''s.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<i class="fa fa-truck"></i>
								<div class="text-content">
								<h6>Road Assistance</h6>
								<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90''s.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<i class="fa fa-search"></i>
								<div class="text-content">
								<h6>Car Dealer Research</h6>
								<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90''s.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<i class="fa fa-globe"></i>
								<div class="text-content">
								<h6>World Wide Known</h6>
								<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90''s.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<i class="fa fa-users"></i>
								<div class="text-content">
								<h6>Best Dealers</h6>
								<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90''s.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  --}}
	
		<section>
			<div class="more-about-us">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="http://placehold.it/555x310" alt="">
						</div>
						<div class="col-md-6">
							<div class="right-content">
								<span>รู้หรือไม่ โชว์รูมรถและเซลล์จากคนละที่ให้ข้อเสนอและราคาที่ไม่เหมือนกัน</span>
								<h4>เราจะช่วยให้คุณเลือกซื้อรถให้คุ้มค่าที่สุด</h4>
								<p>คุณไม่ต้องไปหลายโชว์รูมด้วยตัวเอง เรามีข้อมูลโชว์รูมและเซลล์ที่จะให้ข้อเสนอ ราคา ของแถม ที่ดีและคุ้มค่าที่สุดให้กับคุณ  เพราะการซื้อรถไม่ใช่เรื่องเล็กๆ เราจึงอยากให้ท่านได้สิ่งที่ดีและคุ้มค่าที่สุด.<br><br>ติดต่อหนึ่งครั้งเสมือนติดต่อ 100 กว่าคน 1000 กว่าโปรโมชั่น</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	{{-- ปิดก่อน มีลูกค้าก่อน
		<section>
			<div class="our-clients">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-users"></i>
								</div>
								<div class="text-content">
									<h2>Our Happy Clients</h2>
									<span>Here are our happy clients</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="owl-clients" class="owl-carousel owl-theme">
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								 <div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>
								<div class="item">
									<img src="http://placehold.it/180x120" alt="">
								</div>	 --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')

</body>
</html>