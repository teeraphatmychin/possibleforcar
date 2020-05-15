
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
              <div class="col-md-8">
                <h5>All post</h5>
                    
              </div>
                <div class="col-md-4">
                <a href"{{ route('posts.create') }}" class="btn btn-primary  btn-block">create post</a>
                </div>
{{--  class="{{ Request::is('/') ? "active" :"" }}"  --}}
{{--  class="{{ Request::is('about') ? "active" :"" }}"  --}}
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>title</th>
                        <th>body</th>
                        <th>created_at</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($post as $posts)
                            <tr>
                            <th>{{ $posts->id }}</th>
                            <td>{{ $posts->title }}</td>
                            <td>{{ substr($posts->body ,0,100)}}{{ strlen($posts->body)>50 ? "..." : "" }}</td>
                            <td>{{ date('M  j, Y', strtotime($posts->created_at)) }}</td>
                            <td><a href="{{ route('posts.show',$posts->id) }}" class="btn btn-default">View</a><a href="{{ route('posts.edit',$posts->id) }}" class="btn btn-default">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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