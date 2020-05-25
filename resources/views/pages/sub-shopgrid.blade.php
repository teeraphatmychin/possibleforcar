<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	  <title>Shop-Grid | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/style.css') }}">
	<!-- Cusom css -->
   <link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{ asset('frontend/boighor/boighors/js/vendor/modernizr-3.5.0.min.js')}}"></script>

</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
								<h3 class="wedget__title">Product Categories</h3>
        						<ul>
										
                                    @foreach($categories as $category)
                                        @if(!empty($_GET['category']))
                                            <?php $categories = explode('-',$_GET['category']) ?>
                                            @if(in_array($category,$categories))
                                                <?php $categorycheck="checked"; ?>
                                            @else
                                                <?php $categorycheck=""; ?>
                                            @endif
                                        @else
                                            <?php $categorycheck=""; ?>
                                        @endif
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <input name="categoryFilter" onchange="onchangeFilter()" id="filter_{{ $category->id }}" value="{{ $category->name}}" type="checkbox" />&nbsp;&nbsp;
                                                    <span class="products-category">{{ $category->name }}</span>
                                                    <span>({{ $category->posts()->count() }})</span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach

        						</ul>
        					</aside>
{{--        					<aside class="wedget__categories pro--range">--}}
{{--        						<h3 class="wedget__title">Filter by price</h3>--}}
{{--        						<div class="content-shopby">--}}
{{--        						    <div class="price_filter s-filter clear">--}}
{{--        						        <form action="#" method="GET">--}}
{{--        						            <div id="slider-range"></div>--}}
{{--        						            <div class="slider__range--output">--}}
{{--        						                <div class="price__output--wrap">--}}
{{--        						                    <div class="price--output">--}}
{{--															<input type="hidden" id="hidden_minimum_price" value="0" />--}}
{{--															<input type="hidden" id="hidden_maximum_price" value="3000000" />--}}
{{--															<p id="price_show">1000 - 65000</p>--}}
{{--                   											<div id="price_range"></div>--}}
{{--        						                        	<span>ราคา :</span><input type="text" id="amount" readonly="">--}}
{{--        						                    </div>--}}
{{--        						                    <div class="price--filter">--}}
{{--        						                        <a href="#">Filter</a>--}}
{{--        						                    </div>--}}
{{--        						                </div>--}}
{{--        						            </div>--}}
{{--        						        </form>--}}
{{--        						    </div>--}}
{{--        						</div>--}}
{{--        					</aside>--}}
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
									@foreach($postTags as $postTag)
        							<li><a href="#">{{ $postTag->name }}</a></li>
									@endforeach
        						</ul>
        					</aside>
        					<aside class="wedget__categories sidebar--banner">
								<img src="{{ asset('refinn.png') }}" alt="banner images">
								<div class="text">
									{{-- <h2>new products</h2> --}}
									{{-- <h6>save up to <br> <strong>40%</strong>off</h6> --}}
								</div>
        					</aside>
        				</div>
        			</div>
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <div class="embed-responsive embed-responsive-16by9" style="height: 100%">
                            <iframe id="car-view" class="embed-responsive-item" src="{{ route('car-view-grid-iframe') }}" allowfullscreen></iframe>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->

		</div>
		<!-- //Main wrapper -->

		<!-- JS Files -->


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
		<script src="{{ asset('frontend/boighor/boighors/js/popper.min.js') }}"></script>
		<script src="{{ asset('frontend/boighor/boighors/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/boighor/boighors/js/plugins.js') }}"></script>
		<script src="{{ asset('frontend/boighor/boighors/js/active.js') }}"></script>
        <script>

            function onchangeFilter() {
                var filter_1 = document.getElementById("filter_1");
                var filter_2 = document.getElementById("filter_2");
                var filter_3 = document.getElementById("filter_3");
                var filter_4 = document.getElementById("filter_4");
                var filter_5 = document.getElementById("filter_5");
                var filter_6 = document.getElementById("filter_6");
                var filter_7 = document.getElementById("filter_7");
                var filter_8 = document.getElementById("filter_8");
                var product_filter = []
                if(filter_1.checked == true){ product_filter.push(filter_1.value) }
                if(filter_2.checked == true){ product_filter.push(filter_2.value) }
                if(filter_3.checked == true){ product_filter.push(filter_3.value) }
                if(filter_4.checked == true){ product_filter.push(filter_4.value) }
                if(filter_5.checked == true){ product_filter.push(filter_5.value) }
                if(filter_6.checked == true){ product_filter.push(filter_6.value) }
                if(filter_7.checked == true){ product_filter.push(filter_7.value) }
                if(filter_8.checked == true){ product_filter.push(filter_8.value) }
                
                var text1 = product_filter.toString();
                var text2 = "";
                text2 = text1.split(",").join("-");

                document.getElementById('car-view').src = '/car-view-grid-iframe2/'+text2
            }
        </script>
	</body>
	</html>
