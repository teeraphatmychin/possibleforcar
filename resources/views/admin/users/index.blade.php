@extends('admin.index')

<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('frontend/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('frontend/adminlte/dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

@section('content')
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
      <div class="content-wrapper">
        
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
              @foreach($users as $user)
               <tbody>
                <tr>
                  <th>{{$user->name}}</th>
                  <th>{{$user->email}}</th>
                  <th>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</th>
                  <th>
                    <a href="{{route('admin.users.edit',$user->id)}}" class="float-left">
                       <button type="button" class="btn btn-primary btn-sm">Edit </button>
                     </a>
                     <a href="{{route('admin.impersonate',$user->id)}}" class="float-left">
                        <button type="button" class="btn btn-success btn-sm">Impersonate User </button>
                      </a>
                    <form action="{{route('admin.users.destroy',$user->id)}}" method="POST" class="float-left">
                      {{method_field('DELETE')}}
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </th>
                </tr>
              @endforeach
              </tbody>
            </table>
            {{$users -> links()}}
                    </div>
                </div>
          
              </body>
@endsection

<!-- jQuery -->
{{-- <script src="{{ asset('frontend/adminlte/plugins/jquery/jquery.min.js')}}"></script> --}}
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('frontend/adminlte/dist/js/demo.js')}}"></script>