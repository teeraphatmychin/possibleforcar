<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
		@section('title','ติดต่อเรา')
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
								<p><a href="{{route('index')}}">Homepage</a> / <em> Contact Us</em></p>
								<h2>Contact <em>Us</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{-- 
	<div class="contact-us wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div id="map"></div>
	</div> --}}

	<section>
		<div class="contact-content wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="send-message">
							<div class="sep-section-heading">
								<h2>Send Us <em>Message</em></h2>
							</div>
							<form id="contact_form" action="/contact_us" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class=" col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="name" placeholder="ชื่อของท่่าน..." value="{{old('name')}}">
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="mail" placeholder="อีเมลล์..." value="{{old('mail')}}">
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<input type="text" class="subject" name="subject" placeholder="เรื่องที่สอบถาม..." value="{{old('subject')}}">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<textarea id="message" class="input" name="message" placeholder="ข้อความ..." value="{{old('message')}}"></textarea>
										
									</div>
								</div>
								<div class="row">
									<div class="submit-coment col-md-12">
										<div class="primary-button">
											<a href="#" onclick="document.getElementById('contact_form').submit();">Send now <i class="fa fa-paper-plane"></i></a>
										</div>
									</div>
								</div>
								@csrf
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-info">
							<div class="sep-section-heading">
								<h2>Contact <em>Informations</em></h2>
							</div>
							<p>คุณไม่ต้องไปหลายโชว์รูมด้วยตัวเอง เรามีข้อมูลโชว์รูมและเซลล์ที่จะให้ข้อเสนอ ราคา ของแถม ที่ดีและคุ้มค่าที่สุดให้กับคุณ  เพราะการซื้อรถไม่ใช่เรื่องเล็กๆ เราจึงอยากให้ท่านได้สิ่งที่ดีและคุ้มค่าที่สุด.<br><br>ติดต่อหนึ่งครั้งเสมือนติดต่อ 100 กว่าคน 1000 กว่าโปรโมชั่น</p>
							<div class="info-list">
								<ul>
									<li><i class="fa fa-phone"></i><span>+66900212368</span></li>
									<li><i class="fa fa-envelope"></i><span>possiblecar.4@gmail.com</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')



    {{-- <!-- Google Map -->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src=" {{asset('js/jquery.gmap3.min.js')}}"></script>

	<!-- Google Map Init-->
   <script>
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru
		  var uluru = {lat: 50.688363, lng: 10.436397};
		  // The map, centered at Uluru
		  var map = new google.maps.Map(
		      document.getElementById('map'), {zoom: 4, center: uluru});
		  // The marker, positioned at Uluru
		  var marker = new google.maps.Marker({position: uluru, map: map});
		}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script> --}}

</body>
</html>