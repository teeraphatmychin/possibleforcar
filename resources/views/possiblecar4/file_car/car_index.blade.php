
@extends('layouts.app')
{{--  @extends('possiblecar4.file_car.parent_car')  --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Manage car</div>
                    <div class="card-body">
					<div align="right">
						<a href="{{ route('car_crud.create') }}" class="btn btn-success btn-sm">Add</a>
					</div>
					<br />
					@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
					@endif


					<table class="table table-bordered table-striped">
						<tr>
							<th width="10%">Image</th>
							<th width="10%">brand</th>
							<th width="10%">model</th>
							<th width="10%">year-model</th>
							<th width="5%">price</th>
							<th width="5%">type</th>
							<th width="10%">created_at</th>
							<th width="10%">updated_at</th>
							<th width="20%">Action</th>
						</tr>
						@foreach($data as $row)
							<tr>
								<td><img src="{{ URL::to('/') }}/images/allcar/{{$row->brand}}/{{$row->model}}/370_260/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
								<td>{{ $row->brand }}</td>
								<td>{{ $row->model }}</td>
								<td>{{$row->year_model}}</td>
								<td>{{$row->price}}</td>
								<td>{{$row->type}}</td>
								<td>{{$row->created_at}}</td>
								<td>{{$row->updated_at}}</td>
								
								<td>
										<form action="{{route('car_crud.destroy', $row->id)}}" method="post">
											<a href="{{route('car_crud.show', $row->id)}}" class="btn btn-primary">Show</a>
											<a href="{{route('car_crud.edit', $row->id)}}" class="btn btn-warning">Edit</a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger">Delete</button>
										</form>
								</td>
							</tr>
						@endforeach
					</table>
					{!! $data->links() !!}
                  </div>
                </div>
            </div>
        </div>
	</div>
		 
@endsection