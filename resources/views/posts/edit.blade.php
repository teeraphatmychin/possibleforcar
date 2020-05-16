
@extends('admin.index')
@section('title' ,'|edit post')
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
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}

			{{ Form::label('category_id', "Category:", ['class' => 'form-spacing-top']) }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

			{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
			{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
			
			{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->





	
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

<script type="text/javascript">
	$('.select2-multi').select2();
	$('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
</script>