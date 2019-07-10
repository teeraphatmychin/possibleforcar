@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Manage Users</div>
                    <div class="card-body">
                            <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nam</th>
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
            </div>
        </div>
    </div>
@endsection