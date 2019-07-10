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
				
					@include('carListingData')	
				
			</div>
		</div>
	</div>
	

	@extends('layout.partials.footer')
	@extends('layout.partials.footer-scripts')
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
@extends('layout.partials.footer-scripts')

<div class="ajax-load text-center" style="display:none">
	<p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More</p>
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
	            $("#post_data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>

{{--    --}}


{{--    --}}
</body>
</html>
