
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
                <h5>create post</h5>
                    <h5>{{ $post->title }}</h5>
                    <p>{{ $post->body }}</p>
              </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Craate at:</dt>
                    <dt>{{date('M ,j y , h:ia' ,strtotime($post->created_at)) }}</dt>
                </dl>   
                <dl class="dl-horizontal">
                    <dt>Last update:</dt>
                    <dt>{{ date('M ,j y , h:ia' ,strtotime($post->updated_at ))}}</dt>
                </dl>  
                <div class="row">
                    <div class="col-sm-6">
                        
                        <a href="{{ route('posts.edit') }}" class="btn brn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('posts.destroy') }}" class="btn brn-danger btn-block">Delete</a>

                    </div>  
                </div> 
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