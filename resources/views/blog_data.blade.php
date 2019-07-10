@foreach($blogs as $blog)
<div class="col-md-4">
	<div class="item">
		<div class="thumb-content">
			<div class="date-post">
				<a href="{{route('article-post',$blog->id)}}">{{$blog->create_by}}</a>
			</div>
			<div class="thumb-inner">
				<a href="{{route('article-post',$blog->id)}}"><img src="http://placehold.it/370x260" alt=""></a>
			</div>
		</div>
		<div class="down-content">
			<a href="{{route('article-post',$blog->id)}}"><h4>{{$blog->subject}}</h4></a>
			<ul>
			<li><span><em>Posted by:</em><a href="#">{{$blog->post_by}}</a></span></li>
			<li><span><em>Posted on:</em>{{$blog->create_at}}</span></li>
			<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
			</ul>
			<p>{{$blog->article}}</p>
				<div class="text-button">
					<a href="{{route('article-post',$blog->id)}}">Continue Reading <i class="fa fa-arrow-right"></i></a>
			</div>							
			</div>
		</div>
    </div>
	@endforeach			
