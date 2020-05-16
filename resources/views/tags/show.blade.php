
@extends('admin.index')
@section('title' ,'|$tag->name Tag')
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
    <div class="col-md-8">
        <h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
    </div>
    <div class="col-md-2">
        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
    </div>
    <div class="col-md-2">
        {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
        {{ Form::close() }}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tag->posts as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>@foreach ($post->tags as $tag)
                            <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                        </td>
                    <td><a href="{{ route('posts.show', $post->id ) }}" class="btn btn-default btn-xs">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
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