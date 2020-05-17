
{{--  <? php $titleTag = htmlspecialchars($post->title); ?>
@section('title' "| $titleTag")  --}}

<head>
<link rel="stylesheet" href="{{ asset('frontend/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="{{ asset('frontend/adminlte/plugins/ekko-lightbox/ekko-lightbox.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('frontend/adminlte/dist/css/adminlte.min.css')}}">
</head>

 
    <h1>{{ $post->title }}</h1>
    <h1>{{ $post->body }}</h1>
    <p>Post in: {{ $post->category->name }}</p>

    <div class="row">
        @foreach($post->comments as $comment)
            <p><strong> Name:</strong> {{ $comment->name }}</p>
            <p><strong>Comment:</strong><br/> {{ $comment->comment }}</p>
        @endforeach
    </div>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::open(['route'=>['comments.store',$post->id], 'method'=>'POST']) }}
            <div class="row">    
                <div class="col-md-6">
                    {{ Form::label('name',"Name") }}
                    {{ Form::text('name',null,['class'=>'form-control']) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('email','Email:') }}
                    {{ Form::text('email',null,['class'=>'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{ Form::label('comment',"Comment") }}
                    {{ Form::textarea('comment',null,['class'=>'form-control']) }}
                    {{ Form::submit('Add comment',['class'=>'btn btn-success btn-block']) }}
                </div>    
            </div>
            {{ Form::close() }}
        </div>
    </div>



    @endsection

<!-- jQuery -->
<script src="{{ asset('frontend/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('frontend/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('frontend/adminlte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->