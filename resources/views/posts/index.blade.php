
@extends('admin.index')
@section('title' ,'|new post')
<head>
<link rel="stylesheet" href="{{ asset('frontend/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="{{ asset('frontend/adminlte/plugins/ekko-lightbox/ekko-lightbox.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('frontend/adminlte/dist/css/adminlte.min.css')}}">
</head>
@section('content')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
     
    
      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)
						
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
</div>
</div>
@endsection
</body>
<!-- jQuery -->
<script src="{{ asset('frontend/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('frontend/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('frontend/adminlte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->