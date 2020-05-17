
{{--  <? php $titleTag =htmlspecialchars($post->title); ?>
@section('title' "| $titleTag")  --}}
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
    <h1>{{ $post->title }}</h1>
    <h1>{{ $post->body }}</h1>
    <p>Post in: {{ $post->category->name }}</p>

    <div class="row">
        @foreach($post->comments as comment)
            <p>{{ $comment->name }}</p>
            <p>{{ $comment->comment }}</p>
        @endforeach
    </div>
    <div class="row">
        <div class="comment-form">
            {{ Form::open(['route'=>['comments.store',$post->id], 'method'=>'POST']) }}
                <div class="col-md-6">
                {{ Form::label('name',"Name") }}
                {{ Form::text('name',null,['class'=>'form-control']) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('email','email:') }}
                    {{ Form::text('email',null,['class'=>'form-control']) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::label('comment',"Name") }}
                        {{ Form::textarea('comment',null,['class'=>'form-control']) }}
                        {{ Form::submit('Add comment',['class'=>'btn btn-success btn-block']) }}
                    </div>
            {{ Form::close() }}
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