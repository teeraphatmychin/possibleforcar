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
									<p><a href="{{route('index')}}">Homepage</a> / <em> Blog</em> / <em> Grid</em></p>
									<h2>Blog <em>Grids</em></h2>
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
				<div class="col-md-12">
					<div class="blog-grid-post">
						<div class="row">
								@include('blog_data')
							
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

{{--  <div class="ajax-load text-center" style="display:none">
	<p><img src="https://demo.itsolutionstuff.com/plugin/loader.gif">Loading More</p>
</div>  --}}
{{--  
/*  <script type="text/javascript">
	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()-50) {
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
</script>  */  --}}
</body>
</html>