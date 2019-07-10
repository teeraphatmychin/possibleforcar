//@extends('possiblecar4.file_car.parent_car')


@section('main')
<div align="right">
	<a href="{{ route('car_crud.index') }}" class="btn btn-default">Back</a>
</div>
<br />
<br />
<form method="post" action="{{ route('car_crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">brand</label>
		<div class="col-md-8">
			<input type="text" name="brand" value="{{ $data->brand}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">model</label>
		<div class="col-md-8">
			<input type="text" name="model" value="{{ $data->model}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">year-model</label>
		<div class="col-md-8">
			<input type="text" name="year_model" value="{{ $data->year_model }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">price</label>
		<div class="col-md-8">
			<input type="text" name="price" value="{{ $data->price }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">type</label>
		<div class="col-md-8">
			<input type="text" name="type" value="{{ $data->type}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">detail</label>
		<div class="col-md-8">
			<input type="text" name="detail" value="{{ $data->detail}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">engine</label>
		<div class="col-md-8">
			<input type="text" name="engine" value="{{ $data->engine}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">status_car</label>
		<div class="col-md-8">
			<input type="text" name="countdownstatus_car" value="{{ $data->status_car}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">countdown</label>
		<div class="col-md-8">
			<input type="text" name="countdown" value="{{ $data->countdown}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select car Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/allcar/{{$data->brand}}/{{$data->model}}/370_260/{{ $data->image }}" class="img-thumbnail" />

			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



