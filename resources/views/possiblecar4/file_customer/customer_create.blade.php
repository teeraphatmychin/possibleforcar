@extends('possiblecar4.file_customer.parent_customer')


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
	<a href="{{ route('customer_crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{route('customer_crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Name</label>
		<div class="col-md-8">
			<input type="text" name="customer_name" value="{{old('customer_name')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter phone</label>
		<div class="col-md-8">
			<input type="text" name="customer_phone" value="{{old('customer_phone')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter brand</label>
		<div class="col-md-8">
			<input type="text" name="brand" value="{{old('brand')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">model</label>
		<div class="col-md-8">
			<input type="text" name="model" value="{{old('model')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter year_model</label>
		<div class="col-md-8">
			<input type="text" name="year_model" value="{{old('year_model')}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter interest</label>
		<div class="col-md-8">
			<input type="text" name="interest" value="{{old('interest')}}" class="form-control input-lg" />
		</div>
	</div>
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
		<input type="submit" name="add" class="btn btn-primary input-lg" value="เพิ่ม" />
	</div>

</form>

@endsection



