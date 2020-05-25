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

    <link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/style.css') }}">
    <!-- Cusom css -->
    <link rel="stylesheet" href="{{ asset('frontend/boighor/boighors/css/custom.css')}}">

    <!-- Modernizer js -->
    <script src="{{ asset('frontend/boighor/boighors/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    {{--  <script src="https://kit.fontawesome.com/37ba0adb83.js"></script>  --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Slider Pro Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/sliderPro.css')}}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
    <!-- Flat Icons Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <!-- Animated Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/animated.css')}}">

    <!-- Custom-->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

{{--  hotjar  --}}
<!-- Hotjar Tracking Code for www.possiblecar.com -->
</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <div class="row">
        <div class="col-lg-12">
            <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                <div class="shop__list nav justify-content-center" role="tablist">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
                </div>
{{--                <p>Showing {{ $posts->count() }}–12 of {{ $posts->count() }} results</p>--}}
                <div class="orderby__wrapper">
                    <span>Sort By</span>
                    <select class="shot__byselect" onchange="myFunction()">
                        <option>ค่าเริ่มต้น</option>
                        <option>โปรโมชั่นล่าสุด</option>
                        <option>ถูกที่สุด</option>
                        <option>รุ่นใหม่</option>

                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="tab__container">
        <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
            <div class="row filter_data">
            @foreach($posts as $post)


                <!-- Start Single Product -->
                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12 javascript-filter-{{$post->title}}">
                        <div class="product__thumb">
                            <a class="first__img" href="{{ route('blog.single', $post->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$post->category_id}}/{{$post->model}}/370_260/{{ $post->image }}" alt="product image"></a>
                            <a class="second__img animation1" href="{{ route('blog.single', $post->slug) }}"><img src="images/books/2.jpg" alt="product image"></a>
                            <div class="hot__box">
                                @if ($post == 'ส่วนลดเยอะที่สุด')
                                    <span class="glyphicon glyphicon-certificate">{{ $post->status_car }}</span>
                                @endif
                                

                                     <span class="glyphicon glyphicon glyphicon-usd">{{ $post->status_car }}</span>
                               
                            </div>
                        </div>
                        <div class="product__content content--center">
                            <h4><a href="{{ route('blog.single', $post->slug) }}"></a>{{ $post->title }} - {{ $post->model }}</h4>
                            <ul class="prize d-flex">
                                <li>฿{{  $post->price }}</li>
                                <li class="old_prize">{{ $post->price }}</li>
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
                                                <h1>{{ $post->title }}</h1>
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
                                                        <span class="new-price">฿{{ $post->price }}</span>
                                                        <span class="old-price">฿{{ $post->price }}</span>
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

            @endforeach
            <!-- End Single Product -->


            </div>
{{--            {!! $posts->links() !!}--}}

        </div>

        <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
            <div class="list__view__wrapper">
                <!-- Start Single Product -->
                จุดเริ่ม
                @foreach($posts2 as $post2)
                    <div class="list__view">
                        <div class="thumb">
                            <a class="first__img" href="{{ route('blog.single', $post2->slug)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$post2->category_id}}/{{$post2->model}}/370_260/{{ $post2->image }}" alt="product images"></a>
                            <a class="second__img animation1" href="{{ route('blog.single', $post2->slug) }}"><img src="{{ URL::to('/') }}/images/allcar/{{$post2->category_id}}/{{$post2->model}}/370_260/{{ $post2->image }}" alt="product images"></a>
                        </div>
                        <div class="content">
                            <h2><a href="{{ route('blog.single', $post2->slug) }}"></a>{{ $post2->model}}</h2>
                            <ul class="rating d-flex">
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                            <ul class="prize__box">
                                <li>฿{{ $post2->price }}</li>
                                <li class="old__prize">{{ $post2->price}}</li>
                            </ul>
{{--                            <p>{{ substr($post2->detail, 0, 50) }}</p>--}}
                            {{--											   substr($post->detail, 0, 50) }}{{ strlen($post->detail) > 50 ? "..." : "" }}--}}
                            <ul class="cart__action d-flex">
                                <li class="cart"><a href="cart.html">Add to cart</a></li>
                                <li class="wishlist"><a href="cart.html"></a></li>
                                <li class="compare"><a href="cart.html"></a></li>
                            </ul>

                        </div>
                    </div>
            @endforeach

            <!-- End Single Product -->

            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/boighor/boighors/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/boighor/boighors/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/boighor/boighors/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/boighor/boighors/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/boighor/boighors/js/active.js') }}"></script>

</body>
</html>
