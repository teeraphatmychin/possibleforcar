<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	
	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	{{--  <link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/bootstrap.min.css') }}">  --}}
	<link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/style.css') }}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{ asset('frontend/boighor/boighors/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
	
        {{--  แถวแรก  finish--}}
		<!-- Start BEst Seller Area -->
		
	
    {{--  แถวสอง  --}}
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">รถยนต์ <span class="color--theme">ทุ่กรุ่น ทุ่กแบรนด์</span></h2>
							<p>อัพเดทล่าสุด ที่นี่ที่เดียว พร้อมอัพเดตเรื่องราว ทุกความเคลื่อนไหว ของรถยนต์ทุกรุ่นได้ที่นี่</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
							<a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
							@foreach($postCategories as $postcategory)
                            	<a class="nav-item nav-link" data-toggle="tab" href="#nav-{{$postcategory->name }}" role="tab">{{$postcategory->name }}</a>
							@endforeach
                        </div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcars as $postcar)
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
											<div class="hot__box">
												<@if ($postcar->status_car == 1)
												<span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
											@endif
											@if($postcar->status_car == 2)
												<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
											@endif
											@if($postcar->status_car == 3)
												<span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
												@endif
											@if($postcar->status_car == 4)
												<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
												@endif
											@if($postcar->status_car == 5)
												<span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
												@endif
											@if($postcar->status_car == 6)
												<span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
											@endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar->slug) }}"></a>{{ $postcar->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar->price }}</li>
												<li class="old_prize">฿{{ $postcar->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
							
							
							
						</div>
						
					</div>
					<!-- End Single Tab Content -->


					{{--    --}}
					
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-Toyota" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar2s as $postcar2)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar2->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar2->category_id}}/{{$postcar2->model}}/370_260/{{ $postcar2->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar2->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar2->category_id}}/{{$postcar2->model}}/370_260/{{ $postcar2->image }}" alt="product image"></a>
											<div class="hot__box">
												<@if ($postcar2->status_car == 1)
												<span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
											@endif
											@if($postcar2->status_car == 2)
												<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
											@endif
											@if($postcar2->status_car == 3)
												<span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
												@endif
											@if($postcar2->status_car == 4)
												<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
												@endif
											@if($postcar2->status_car == 5)
												<span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
												@endif
											@if($postcar2->status_car == 6)
												<span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
											@endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar2->slug) }}"></a>{{ $postcar2->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar2->price }}</li>
												<li class="old_prize">฿{{ $postcar2->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar2->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar2->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->		
							</div>
							@endforeach
							
							
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-Honda" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar3s as $postcar3)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar3->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar3->category_id}}/{{$postcar3->model}}/370_260/{{ $postcar3->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar3->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar3->category_id}}/{{$postcar3->model}}/370_260/{{ $postcar3->image }}" alt="product image"></a>
											<div class="hot__box">
												<@if ($postcar3->status_car == 1)
												<span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
											@endif
											@if($postcar3->status_car == 2)
												<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
											@endif
											@if($postcar3->status_car == 3)
												<span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
												@endif
											@if($postcar3->status_car == 4)
												<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
												@endif
											@if($postcar3->status_car == 5)
												<span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
												@endif
											@if($postcar3->status_car == 6)
												<span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
											@endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar3->slug) }}"></a>{{ $postcar3->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar3->price }}</li>
												<li class="old_prize">฿{{ $postcar3->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar3->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar3->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
							
							
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-Isuzu" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar4s as $postcar4)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar4->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar4->category_id}}/{{$postcar4->model}}/370_260/{{ $postcar4->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar4->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar4->category_id}}/{{$postcar4->model}}/370_260/{{ $postcar4->image }}" alt="product image"></a>
											<div class="hot__box">
												@if ($postcar4->status_car == 1)
													<span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
												@endif
												@if($postcar4->status_car == 2)
													<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
												@endif
												@if($postcar4->status_car == 3)
													<span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
													@endif
												@if($postcar4->status_car == 4)
													<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
													@endif
												@if($postcar4->status_car == 5)
													<span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
													@endif
												@if($postcar4->status_car == 6)
													<span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
												@endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar4->slug) }}"></a>{{  $postcar4->model  }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar4->price }}</li>
												<li class="old_prize">฿{{ $postcar4->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar4->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar4->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
							
							
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-Ford" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar5s as $postcar5)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar5->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar5->category_id}}/{{$postcar5->model}}/370_260/{{ $postcar5->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar5->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar5->category_id}}/{{$postcar5->model}}/370_260/{{ $postcar5->image }}" alt="product image"></a>
											<div class="hot__box">
												@if ($postcar5->status_car == 1)
													<span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
												@endif
												@if($postcar5->status_car == 2)
													<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
												@endif
												@if($postcar5->status_car == 3)
													<span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
													@endif
												@if($postcar5->status_car == 4)
													<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
													@endif
												@if($postcar5->status_car == 5)
													<span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
													@endif
												@if($postcar5->status_car == 6)
													<span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
												@endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar5->slug) }}"></a>{{ $postcar5->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar5->price }}</li>
												<li class="old_prize">฿{{ $postcar5->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar5->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar5->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
							
							
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-Mazda" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar6s as $postcar6)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar6->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar6->category_id}}/{{$postcar6->model}}/370_260/{{ $postcar6->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar6->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar6->category_id}}/{{$postcar6->model}}/370_260/{{ $postcar6->image }}" alt="product image"></a>
											<div class="hot__box">
												@if ($postcar6->status_car == 1)
													<span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
												@endif
												@if($postcar6->status_car == 2)
													<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
												@endif
												@if($postcar6->status_car == 3)
													<span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
													@endif
												@if($postcar6->status_car == 4)
													<span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
													@endif
												@if($postcar6->status_car == 5)
													<span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
													@endif
												@if($postcar6->status_car == 6)
													<span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
												@endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar6->slug) }}"></a>{{ $postcar6->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar6->price }}</li>
												<li class="old_prize">฿{{ $postcar6->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar6->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar6->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
							
							
						</div>
					</div>
					<!-- End Single Tab Content -->
					
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-MG" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar7s as $postcar7)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar7->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar7->category_id}}/{{$postcar7->model}}/370_260/{{ $postcar7->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar7->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar7->category_id}}/{{$postcar7->model}}/370_260/{{ $postcar7->image }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar7->slug) }}"></a>{{ $postcar7->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar7->price }}</li>
												<li class="old_prize">฿{{ $postcar7->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar7->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar7->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
							
							
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-Nissan" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							@foreach($postcar8s as $postcar8)
							<div class="single__product">
								
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar8->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar8->category_id}}/{{$postcar8->model}}/370_260/{{ $postcar8->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar8->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar8->category_id}}/{{$postcar8->model}}/370_260/{{ $postcar8->image }}" alt="product image"></a>
											<div class="hot__box">
												@if ($postcar8->status_car == 1)
                                    <span class="glyphicon glyphicon-certificate"> ส่วนลดเยอะที่สุด </span>
                                @endif
                                @if($postcar8->status_car == 2)
                                    <span class="glyphicon glyphicon-certificate">ดาวน์ต่ำสุด  </span>
                                @endif
                                @if($postcar8->status_car == 3)
                                    <span class="glyphicon glyphicon-certificate">แถมเยอะสุด </span>
                                    @endif
                                @if($postcar8->status_car == 4)
                                     <span class="glyphicon glyphicon-certificate">ดาวน์ต่ำส่วนลดเยอะ </span>
                                     @endif
                                @if($postcar8->status_car == 5)
                                    <span class="glyphicon glyphicon-certificate"> ธรรมดา </span>
                                    @endif
                                @if($postcar8->status_car == 6)
                                    <span class="glyphicon glyphicon-certificate"> ดาวน์ต่ำของแถมเยอะ </span>
                                @endif
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('blog.single', $postcar8->slug) }}"></a>{{ $postcar8->model }}</h4>
											<ul class="prize d-flex">
												<li>฿{{ $postcar8->price }}</li>
												<li class="old_prize">฿{{ $postcar8->price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														{{--  <li><a class="cart" href="{{ route('cart',$postcar8->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
														{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar8->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
							@endforeach
						
							
						</div>
					</div>
					<!-- End Single Tab Content -->

				</div>
			</div>
		</section>
{{--  ส่วนที่สาม  --}}
		<!-- Best Sale Area -->
		{{-- <section class="best-seel-area pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center pb--50">
							<h2 class="title__be--2">รถยนต์ <span class="color--theme">ยอดขายถล่มทลาย </span></h2>
							<p>เป็นเจ้าของได้แล้ววันนี้กับรถยนต์สุดฮิต</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slider center">
				<!-- Single product start -->
				@foreach($postcars as $postcar)
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									{{--  <li><a class="cart" href="{{ route('cart',$postcar->id) }}"><i class="bi bi-shopping-bag4"></i></a></li>  --}}
									{{--  <li><a class="wishlist" href="{{ route('wishlist',$postcar->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>  --}}
									{{-- <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach
				<!-- Single product end -->
				
			</div>
		</section> --}} --}}
		<!-- Best Sale Area Area -->
		
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		    <!-- Modal -->
		    <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <!-- Start product images -->
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="images/product/big-img/1.jpg">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="product-info">
		                            {{-- <h1>{{ $posts->brand }}</h1> --}}
		                            <div class="rating__and__review">
		                                <ul class="rating">
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                </ul>
		                                <div class="review">
		                                    <a href="#">4 customer reviews</a>
		                                </div>
		                            </div>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    {{-- <span class="new-price">{{ $posts->price }}</span> --}}
		                                    {{-- <span class="old-price">{{ $posts->price }}</span> --}}
		                                </div>
		                            </div>
		                            <div class="quick-desc">
		                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
		                            </div>
		                            <div class="select__color">
		                                <h2>Select color</h2>
		                                <ul class="color__list">
		                                    <li class="red"><a title="Red" href="#">Red</a></li>
		                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                </ul>
		                            </div>
		                            <div class="select__size">
		                                <h2>Select size</h2>
		                                <ul class="color__list">
		                                    <li class="l__size"><a title="L" href="#">L</a></li>
		                                    <li class="m__size"><a title="M" href="#">M</a></li>
		                                    <li class="s__size"><a title="S" href="#">S</a></li>
		                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
		                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
		                                </ul>
		                            </div>
		                            <div class="social-sharing">
		                                <div class="widget widget_socialsharing_widget">
		                                    <h3 class="widget-title-modal">Share this product</h3>
		                                    <ul class="social__net social__net--2 d-flex justify-content-start">
		                                        <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
		                                        <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
		                                        <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
		                                        <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <div class="addtocart-btn">
		                                <a href="#">Add to cart</a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- END QUICKVIEW PRODUCT -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{ asset('frontend/boighor/boighors/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/popper.min.js') }}"></script>
	//<script src="{{ asset('frontend/boighor/boighors/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/plugins.js') }}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/active.js') }}"></script>
	
</body>
</html>