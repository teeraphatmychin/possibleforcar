
@extends('layouts.app')
{{--  @extends('possiblecar4.file_customer.parent_customer')  --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Manage customer</div>
                    <div class="card-body">
				<div align="right">
					<a href="{{ route('customer_crud.create') }}" class="btn btn-success btn-sm">Add</a>
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
						<th width="10%">Name</th>
						<th width="10%">Phone</th>
						<th width="10%">brand</th>
						<th width="5%">year_model</th>
						<th width="5%">interest</th>
						<th width="10%">created_at</th>
						<th width="10%">updated_at</th>
						<th width="20%">Action</th>
					</tr>
					@foreach($data as $row)
						<tr>
							<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
							<td>{{ $row->customer_name }}</td>
							<td>{{ $row->customer_phone }}</td>
							<td>{{$row->brand}}</td>
							<td>{{$row->year_model}}</td>
							<td>{{$row->interest}}</td>
							<td>{{$row->created_at}}</td>
							<td>{{$row->updated_at}}</td>	
							<td>
									<form action="{{route('customer_crud.destroy', $row->id)}}" method="post">
										<a href="{{route('customer_crud.show', $row->id)}}" class="btn btn-primary">Show</a>
										<a href="{{route('customer_crud.edit', $row->id)}}" class="btn btn-warning">Edit</a>
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