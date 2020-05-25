
{{--  <? php $titleTag = htmlspecialchars($post->title); ?>
@section('title' "| $titleTag")  --}}

<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop-Single | Bookshop Responsive Bootstrap4 Template</title>
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
	<link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/bootstrap.min.css') }}">
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
		

     
   
    
        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
											<a href="1.jpg"><img src="{{ URL::to('/') }}/images/allcar/{{$post->category_id}}/{{$post->model}}/370_260/{{ $post->image }}" alt=""></a>
											  {{-- <a href="1.jpg"><img src="images/product/1.jpg" alt=""></a>
		        							  <a href="2.jpg"><img src="images/product/2.jpg" alt=""></a>
		        							  <a href="3.jpg"><img src="images/product/3.jpg" alt=""></a>
		        							  <a href="4.jpg"><img src="images/product/4.jpg" alt=""></a>
		        							  <a href="5.jpg"><img src="images/product/5.jpg" alt=""></a>
		        							  <a href="6.jpg"><img src="images/product/6.jpg" alt=""></a>
		        							  <a href="7.jpg"><img src="images/product/7.jpg" alt=""></a>
		        							  <a href="8.jpg"><img src="images/product/8.jpg" alt=""></a> --}}
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>{{ $post->title }}</h1>
        								<div class="product-reviews-summary d-flex">
        									<ul class="rating-summary d-flex">
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
        									</ul>
        								</div>
        								<div class="price-box">
        									<span></span>
        								</div>
										<div class="product__overview">
											<p>{{$post->title}}</p>
											@foreach(explode(',',$post->conditions) as $row)
											<p>{{ $row }}</p>
											@endforeach
                                           
        								</div>
        								<div class="box-tocart d-flex">
        									{{-- <span>รับโปรโมชั่น</span> --}}
        									<div class="addtocart__actions">
												<button class="tocart" type="submit" id="myBtn2" title="Add to Cart">รับโปรโมชั่น</button> 
												{{--  --}}
        									</div>
											<div class="product-addto-links clearfix">
												<a class="wishlist" href="#"></a>
												<a class="compare" href="#"></a>
											</div>
        								</div>
										<div class="product_meta">
											<span class="posted_in">Categories: 	
												{{-- <a href="#">{{ $categoriesfilter->name }}</a>, --}}
											</span>
										</div>
										{{-- <div class="product-share">
											<ul>
												<li class="categories-title">Share :</li>
												<li>
													<a href="#">
														<i class="icon-social-twitter icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-tumblr icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-facebook icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-linkedin icons"></i>
													</a>
												</li>
											</ul>
										</div> --}}
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">รายละเอียด</a>
								<a class="nav-item nav-link" data-toggle="tab" href="#nav-calculator" role="tab">คำนวณเงินดาวน์</a>
								<a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">รีวิว</a>
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
									<p>{{ $post->body }}</p>
										<ul>
											<li>• Two-tone gray heather hoodie.</li>
											<li>• Drawstring-adjustable hood. </li>
											<li>• Machine wash/dry.</li>
										</ul>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									<div class="review__attribute">
										<h1>Customer Reviews</h1>
										<h2>Hastech</h2>
										<div class="review__ratings__type d-flex">
											<div class="review-ratings">
												<div class="rating-summary d-flex">
													<span>Quality</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>

												<div class="rating-summary d-flex">
													<span>Price</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="rating-summary d-flex">
													<span>value</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
											</div>
											<div class="review-content">
												@foreach($post->comments as $comment)
												<p>{{ $comment->name }}</p>
												<p>{{ $comment->comment }}</p>
												<p>Post in:{{$post->category->name}}</p>
												<br/>
												@endforeach
											</div>
										</div>
									</div>
									<div class="review-fieldset">
										<div class="review-field-ratings">
											<div class="product-review-table">
												<div class="review-field-rating d-flex">
													<span>คูณภาพ</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Price</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Value</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
											</div>
                                        </div>
                                        


										<div class="review_form_field">
                                            {{ Form::open(['route'=>['comments.store',$post->id], 'method'=>'POST']) }}

											<div class="input__box">
												{{--  <span>Nickname</span>
                                                <input id="nickname_field" type="text" name="nickname">  --}}
                                                {{ Form::label('name',"Name") }}
                                                {{ Form::text('name',null,['class'=>'form-control']) }} 
											</div>
											<div class="input__box">
												{{--  <span>Summary</span>
                                                <input id="summery_field" type="text" name="summery">  --}}
                                                {{ Form::label('email','Email:') }}
                                                {{ Form::text('email',null,['class'=>'form-control']) }}
											</div>
											<div class="input__box">
												{{--  <span>Review</span>
                                                <textarea name="review"></textarea>  --}}
                                                {{ Form::label('comment',"Review") }}
                                                {{ Form::textarea('comment',null,['class'=>'form-control']) }}
											</div>
											<div class="review-form-actions">
                                                {{--  <button>Submit Review</button>  --}}
                                                {{ Form::submit('Add comment',['class'=>'btn btn-success btn-block']) }}
                                            </div>
                                            {{ Form::close() }}

										</div>
									</div>
	                        	</div>
								<!-- End Single Tab Content -->
								<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade" id="nav-calculator" role="tabpanel">
									<div class="calculator__attribute">
										<div class="review__ratings__type d-flex">
											@include('pages.calculator')
										</div>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        </div>
        				</div>
						<div class="wn__related__product pt--80 pb--50">
							<div class="section__title text-center">
								<h2 class="title__be--2">รถยนต์ที่คล้ายกัน</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									<!-- Start Single Product -->
									@foreach($postcars as $postcar)
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">รถยนต์ ขายดี</span>
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
														<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
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
									@endforeach
								</div>
							</div>
						</div>
						<div class="wn__related__product">
							<div class="section__title text-center">
								<h2 class="title__be--2">รายการล่าสุด</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									<!-- Start Single Product -->
									@foreach($postcars as $postcar)
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('blog.single', $postcar->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$postcar->category_id}}/{{$postcar->model}}/370_260/{{ $postcar->image }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">รถยนต์ ขายดี</span>
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
														<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
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
									@endforeach
									
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						<ul>
									@foreach($categories as $category)
        							<li><a href="#">{{ $category->name }}<span>({{ $category->posts()->count() }})</span></a></li>
        							@endforeach
        						</ul>
        					</aside>
        					<aside class="wedget__categories pro--range">
        						<h3 class="wedget__title">Filter by price</h3>
        						<div class="content-shopby">
        						    <div class="price_filter s-filter clear">
        						        <form action="#" method="GET">
        						            <div id="slider-range"></div>
        						            <div class="slider__range--output">
        						                <div class="price__output--wrap">
        						                    <div class="price--output">
        						                        <span>Price :</span><input type="text" id="amount" readonly="">
        						                    </div>
        						                    <div class="price--filter">
        						                        <a href="#">Filter</a>
        						                    </div>
        						                </div>
        						            </div>
        						        </form>
        						    </div>
        						</div>
        					</aside>
        					<aside class="wedget__categories poroduct--compare">
        						<h3 class="wedget__title">Compare</h3>
        						<ul>
        							<li><a href="#">x</a><a href="#">Condimentum posuere</a></li>
        							<li><a href="#">x</a><a href="#">Condimentum posuere</a></li>
        							<li><a href="#">x</a><a href="#">Dignissim venenatis</a></li>
        						</ul>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
        							@foreach($postTags as $postTag)
        							<li><a href="#">{{ $postTag->name }}</a></li>
									@endforeach
        							
        						</ul>
        					</aside>
        					<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form--2" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		

		{{--  --}}
		<div class="modal fade" id="myModal2" role="dialog" >
																									   
			<div class="modal-dialog modal-dialog-centered" style="z-index: 9999999999999999999999;">
			
			<!-- Modal content-->
			<div class="modal-content" >
				<div class="modal-header" ;>
				<h4 class="modal-title" >{{$post->category_id}} {{$post->model}}</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
					<div class="modal-body" >
					
						

										<span id="form_result"></span>
										<form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
										 @csrf
										 <div class="form-group">
											 <div class="row">
												<label class="control-label col-md-3" >ชื่อของท่าน : </label>
										   		<div class="col-md-7">
										  
												<input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="">
										   
										   </div>   
										</div>
										  </div>
										  <div class="form-group">
										   <label class="control-label col-md-3">เบอร์ติดต่อของท่าน : </label>
										   <div class="col-md-7">
											<input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="">
										   </div>
										  </div>
										  {{--    --}}
										  <div class="form-group">
											   <label class="control-label col-md-3"> สะดวกให้ติดต่อทางไลน์หรือเฟสบุ๊ค : </label>
											   <div class="col-md-7">
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
		{{--  --}}
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
		                                <img alt="big images" src="{{ asset('refinn.jpg') }}">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="product-info">
		                            <h1>Simple Fabric Bags</h1>
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
		                                    <span class="new-price">$17.20</span>
		                                    <span class="old-price">$45.00</span>
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
		                        </div><!-- .product-info -->
		                    </div><!-- .modal-product -->
		                </div><!-- .modal-body -->
		            </div><!-- .modal-content -->
		        </div><!-- .modal-dialog -->
		    </div>
		    <!-- END Modal -->
		</div>
		<!-- END QUICKVIEW PRODUCT -->

	</div>
	<!-- //Main wrapper -->

	

	<!-- JS Files -->
	<script src="{{ asset('frontend/boighor/boighors/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/popper.min.js')}}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/plugins.js')}}"></script>
	<script src="{{ asset('frontend/boighor/boighors/js/active.js')}}"></script>
	
</body>
</html>

 
    
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


