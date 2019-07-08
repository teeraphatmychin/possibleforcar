@extends('possiblecar4.file_car.parent_car')


@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('car_crud.index') }}" class="btn btn-default">Back</a>
</div>

	<form method="post" action="{{ route('car_crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter brand</label>
		<div class="col-md-8">
			<input type="text" name="brand" value="{{old('brand')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter model</label>
		<div class="col-md-8">
			<input type="text" name="model" value="{{old('brand')}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">year-model</label>
		<div class="col-md-8">
			<input type="text" name="year_model" value="{{ old('year_model') }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">price</label>
		<div class="col-md-8">
			<input type="text" name="price" value="{{ old('price')}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">type</label>
		<div class="col-md-8">
			<input type="text" name="type" value="{{ old('type')}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">detail</label>
		<div class="col-md-8">
			<input type="text" name="detail" value="{{ old('detail')}}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">engine</label>
		<div class="col-md-8">
			<input type="text" name="engine" value="{{ old('engine')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	

	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



