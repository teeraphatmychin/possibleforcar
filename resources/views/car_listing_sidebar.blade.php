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
	{{--  
	--}}
	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{route('index')}}">Homepage</a> / <em> Cars</em> / <em> Listing</em></p>
								<h2>Cars <em>Listing</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="on-listing wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="container">
				<div class="recent-car-content">
					<div class="row">
						<div class="col-md-8" id="post-data">
							<div class="row">
								
								@include('data')
							</div>
						</div>
						<div class="col-md-4">
							<div class="sidebar-widgets">
								<div class="row">
									<div class="col-md-12">
										<div class="sidebar-widget">
											<div class="search-content">
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
															<input type="text" onfocus="this.value=''" value="Type keywords...">
														</div>
														<div class="col-md-12">       
															<div class="input-select">
																<select name="brand" id="brand">
																	<option value="-1">Select Brand</option>
																	  <option>Wolkswagen</option>
																	  <option>Audi</option>
																	  <option>Bmw</option>
																	  <option>Opel</option>
																	  <option>Citroen</option>
																</select>
															</div>
														</div>
														<div class="col-md-12">       
															<div class="input-select">
																<select name="mark" id="mark">
																	<option value="-1">Select Mark</option>
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
																	<option value="-1">Min Price</option>
																	  <option>$500</option>
																	  <option>$1.000</option>
																	  <option>$1.500</option>
																	  <option>$2.000</option>
																	  <option>$2.500</option>
																</select>
															</div>
														</div>
														<div class="col-md-6">       
															<div class="input-select">
																<select name="max-price" id="max-price">
																	<option value="-1">Max Price</option>
																	  <option>$5.000</option>
																	  <option>$7.500</option>
																	  <option>$10.000</option>
																	  <option>$15.500</option>
																	  <option>$20.000</option>
																</select>
															</div>
														</div>
														<div class="col-md-12">       
															<div class="input-select">
																<select name="fuel" id="fuel">
																	<option value="-1">Fuel Type</option>
																	  <option>Gasoline</option>
																	  <option>Diesel</option>
																	  <option>Energy</option>
																</select>
															</div>
														</div>
														<div class="col-md-12">       
															<div class="input-select">
																<select name="transmission" id="transmission">
																	<option value="-1">Transmission Type</option>
																	  <option>Automatic</option>
																	  <option>Manual</option>
																</select>
															</div>
														</div>
														<div class="col-md-12">       
															<div class="input-select">
																<select name="body" id="body">
																	<option value="-1">Body Type</option>
																	  <option>Mini Car</option>
																	  <option>Coupe</option>
																	  <option>Convertible</option>
																	  <option>Pick Up</option>
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
						</div>
					</div>
				</div>
			</div>
	</div>	
	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')
<script src="https://code.jquery.com/jquery-latest.min.js"></script> 
@extends('layout.partials.footer-scripts')

<div class="ajax-load text-center" style="display:none">
	<p><img src="https://demo.itsolutionstuff.com/plugin/loader.gif">Loading More</p>
</div>

<script type="text/javascript">
	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()-100) {
	        page++;
	        loadMoreData(page);
	    }
	});

	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#post-data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>
</body>
</html>
