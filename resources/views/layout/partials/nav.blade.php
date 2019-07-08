<div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
	
	<div id="search">
	    <button type="button" class="close">×</button>
	    <form>
	        <input type="search" value="" placeholder="type keyword(s) here" />
	        <button type="submit" class="primary-button">Search <i class="fa fa-search"></i></button>
	    </form>
	</div>  
	
	<header class="site-header wow fadeIn" data-wow-duration="1s">
		<div id="main-header" class="main-header">
			<div class="container clearfix">
				<div class="logo">
					<a href="{{ route('index') }}"></a>
				</div>
				<div id='cssmenu'>
					<ul>
					   	<li><a href='{{ route('index') }}'>หน้าแรก</a></li>
					   	<li class='active'><a href='{{ route('car_grid_no_sidebar')}}'>รถทั้งหมด</a>
					      	{{-- <ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='{{ route('car_listing_sidebar')}}'>Car Listing</a></li>
					               		<li><a href='{{ route('car_grid_sidebar')}}'>Car Grid</a></li>
					            	</ul>
					        	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href='{{route('car_listing_no_sidebar')}}'>Car Listing</a></li>
					               		<li><a href='{{route('car_grid_no_sidebar')}}'>Car Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href='{{route('single_car')}}'>Single Car</a></li>
					      	</ul> --}}
					   	</li>
					   	<li class='active'><a href='{{route('blog_grid_no_sidebar')}}'>บทความ</a>
					      	{{-- <ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='{{route('blog_listing_sidebar')}}'>Blog Classic</a></li>
					               		<li><a href='{{route('blog_grid_sidebar')}}'>Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href='#'>Nos Sidebar</a>
					            	<ul>
					               		<li><a href='{{route('blog_listing_no_sidebar')}}'>Blog Classic</a></li>
					               		<li><a href='{{route('blog_grid_no_sidebar')}}'>Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href='{{route('single_post')}}'>Single Post</a></li>
					      	</ul>		 --}}
					   </li>
					   <li><a href='{{route('about_us')}}'>เกี่ยวกับเรา</a></li>
					   <li><a href='{{route('contact_us')}}'>ติดต่อเรา</a></li>
					   <li>
					   		<a href="#search"><i class="fa fa-search"></i></a>
					   </li>
					</ul>
				</div>
			</div>
		</div>
	</header>