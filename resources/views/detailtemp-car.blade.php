

<html>
		<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <title>Car manage</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
		 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		</head>
		<body>
		





















									   <div align="right">
									   <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
									   </div>
									   <br />
									  
	   </html>
	   <div id="formModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
		 <div class="modal-content">
		  <div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
				 <h4 class="modal-title">Add New Record</h4>
		   </div>
			   <div class="modal-body">
				<span id="form_result"></span>
				<form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
				 @csrf
				 <div class="form-group">
				   <label class="control-label col-md-4" >ชื่อของท่าน : </label>
				   <div class="col-md-8">
					<input type="text" name="customer_name" id="customer_name" class="form-control" />
				   </div>
				  </div>
				  <div class="form-group">
				   <label class="control-label col-md-4">เบอร์ติดต่อของท่าน : </label>
				   <div class="col-md-8">
					<input type="text" name="customer_phone" id="customer_phone" class="form-control" />
				   </div>
				  </div>
				  {{--    --}}
				  <div class="form-group">
					   <label class="control-label col-md-4"> สะดวกให้ติดต่อทางไลน์หรือเฟสบุ๊ค : </label>
					   <div class="col-md-8">
							<input type="text" name="customer_social" id="customer_social" class="form-control" />
					   </div>
				   </div>
				   
				  <br />
				  <div class="form-group" align="center">
				   <input type="hidden" name="action" id="action" />
				   <input type="hidden" name="hidden_id" id="hidden_id" />
				   <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
				  </div>
				</form>
			   </div>
			</div>
		   </div>
	   </div>
	   
	   <div id="confirmModal" class="modal fade" role="dialog">
		   <div class="modal-dialog modal-dialog-centered">
	   
			   <div class="modal-content">
				   <div class="modal-header">
					   <button type="button" class="close" data-dismiss="modal">&times;</button>
					   <h2 class="modal-title">Confirmation</h2>
				   </div>
				   <div class="modal-body">
					   <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
				   </div>
				   <div class="modal-footer">
					   <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
					   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				   </div>
			   </div>
		   </div>
	   </div>
	   
	   
	   <script>
	   $(document).ready(function(){
	   	   
		$('#create_record').click(function(){
		 $('.modal-title').text("Add New Record");
			$('#action_button').val("Add");
			$('#action').val("Add");
			$('#formModal').modal('show');
		});
	   
		$('#sample_form').on('submit', function(event){
		 event.preventDefault();
		 if($('#action').val() == 'Add')
		 {
		  $.ajax({
		   url:"{{ route('customerOrder.store') }}",
		   method:"POST",
		   data: new FormData(this),
		   contentType: false,
		   cache:false,
		   processData: false,
		   dataType:"json",
		   success:function(data)
		   {
			var html = '';
			if(data.errors)
			{
			 html = '<div class="alert alert-danger">';
			 for(var count = 0; count < data.errors.length; count++)
			 {
			  html += '<p>' + data.errors[count] + '</p>';
			 }
			 html += '</div>';
			}
			if(data.success)
			{
			 html = '<div class="alert alert-success">' + data.success + '</div>';
			 $('#sample_form')[0].reset();
			 $('#car_manage_table').DataTable().ajax.reload();
			}
			$('#form_result').html(html);
		   }
		  })
		 }
	   
		 if($('#action').val() == "Edit")
		 {
		  $.ajax({
		   url:"{{ route('ajax-crud.update') }}",
		   method:"POST",
		   data:new FormData(this),
		   contentType: false,
		   cache: false,
		   processData: false,
		   dataType:"json",
		   success:function(data)
		   {
			var html = '';
			if(data.errors)
			{
			 html = '<div class="alert alert-danger">';
			 for(var count = 0; count < data.errors.length; count++)
			 {
			  html += '<p>' + data.errors[count] + '</p>';
			 }
			 html += '</div>';
			}
			if(data.success)
			{
			 html = '<div class="alert alert-success">' + data.success + '</div>';
			 $('#sample_form')[0].reset();
			 $('#store_image').html('');
			 $('#car_manage_table').DataTable().ajax.reload();
			}
			$('#form_result').html(html);
		   }
		  });
		 }
		});
 
	   });
	   </script>
	   