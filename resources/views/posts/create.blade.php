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
<link rel="stylesheet" href="{{ asset('frontend/css/select2-bootstrap4.css')}}">




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<!-- select2-bootstrap4-theme -->
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->


</head>
@section('content')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
     
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
      
            {!! Form::open(array('route' => 'posts.store')) !!}
              {{ Form::label('title', 'Title:') }}
              {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
      
              {{ Form::label('slug', 'Slug:') }}
              {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
      
              {{ Form::label('category_id', 'Category:') }}
              <select class="form-control" name="category_id">
                @foreach($categories as $category)
                  <option value='{{ $category->id }}'>{{ $category->name }}</option>
                @endforeach
      
              </select>
      
      
              {{ Form::label('tags', 'Tags:') }}
              <select class="form-control select2-multi" name="tags[]" >
                @foreach($tags as $tag)
                  <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                @endforeach
      
              </select>
      
              {{ Form::label('body', "Post Body:") }}
              {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
      
              {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
$(function () {
  $('select2-multi').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
      placeholder: $(this).data('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
</script>
