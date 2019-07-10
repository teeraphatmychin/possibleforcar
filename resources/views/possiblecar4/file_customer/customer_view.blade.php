//@extends('possiblecar4.file_customer.parent_customer')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('customer_crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>Name : {{ $data->customer_name }} </h3>
	<h3>Phone : {{$data->customer_phone}}</h3>
	<h3>brand : {{$data->brand}}</h3>
	<h3>year_model : {{$data->year_model}}</h3>
	<h3>interest : {{$data->interset}}</h3>
	<h3>status : {{$data->customer_status}}</h3>
	<h3>create : {{$data->created_at}}</h3>
	<h3>update : {{$data->updated_at}}</h3>
	
</div>
@endsection
