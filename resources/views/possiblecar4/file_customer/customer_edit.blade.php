@extends('possiblecar4.file_customer.parent_customer')

@section('main')
<div align="right">
	<a href="{{ route('customer_crud.index') }}" class="btn btn-default">Back</a>
</div>
<br />
<br />
<form method="post" action="{{ route('customer_crud.update', $data->id)}}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Name</label>
		<div class="col-md-8">
			<input type="text" name="customer_name" value="{{ $data->customer_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">phone</label>
		<div class="col-md-8">
			<input type="text" name="customer_phone" value="{{ $data->customer_phone }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">brand</label>
		<div class="col-md-8">
			<input type="text" name="brand" value="{{ $data->brand }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">model</label>
		<div class="col-md-8">
			<input type="text" name="model" value="{{ $data->model }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">year_model</label>
		<div class="col-md-8">
			<input type="text" name="year_model" value="{{ $data->year_model }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">interest</label>
		<div class="col-md-8">
			<input type="text" name="interest" value="{{ $data->interest }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">status</label>
		<select name="customer_status" id="customer_status" >
			<option value="เลือกแบรนด์">เลือกแบรนด์</option>
			<option value="1"{{$data->customer_status}}>ติดต่อเซล</option>
			<option value="2"{{$data->customer_status}}>สถานะการดำเนินงาน</option>
			<option value="3"{{$data->customer_status}}>ขายได้</option>
			<option value="4"{{$data->customer_status}}>ไม่ได้</option>
			<option value="5"{{$data->customer_status}}>มีปัญหา</option>
		</select>		
		</div>
	</div>
	
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



