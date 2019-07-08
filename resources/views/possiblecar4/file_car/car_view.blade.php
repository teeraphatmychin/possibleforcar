@extends('possiblecar4.file_car.parent_car')


@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('car_crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/allcar/{{$data->brand}}/{{$data->model}}/370_260/{{ $data->image }}" class="img-thumbnail" />
	<h3>brand - {{ $data->brand }} </h3>
	<h3>model - {{$data->model}}</h3>
	<h3>year-model - {{$data->year_model}}</h3>
	<h3>price - {{$data->price}}</h3>
	<h3>type - {{$data->type}}</h3>
	<h3>engine - {{$data->engine}}</h3>
	<h3>detail - {{$data->detail}}</h3>
	<h3>image - {{$data->image}}</h3>
	<h3>status_car - {{$data->status_car}}</h3>
	<h3>countdown - {{$data->countdown}}</h3>
	<h3>create - {{$data->created_at}}</h3>
	<h3>update - {{$data->updated_at}}</h3>
</div>
@endsection
