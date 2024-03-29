@extends('admin.index')


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



  {{--  --}}


  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 </head>
 @section('content')
 
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                                <div align="right">
                                <button type="button" name="create_record" id="create_record" tabindex="-1" class="btn btn-success btn-sm">Create Record</button>
                                </div>
                                <br />
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="car_manage_table">
                                        <thead>
                                            <tr>
                                                <th width="5%">Image</th>
                                                <th width="5%">Brand</th>
                                                <th width="5%">model</th>
                                                <th width="5%">Year</th>
                                                <th width="5%">Price</th>
                                                <th width="5%">Created</th>
                                                <th width="5%">Updated</th>
                                                <th width="5%">Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                               
            </div>                   
        </div>
 
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
            <label class="control-label col-md-4" >Brand : </label>
            <div class="col-md-8">
             <input type="text" name="brand" id="brand" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Model : </label>
            <div class="col-md-8">
             <input type="text" name="model" id="model" class="form-control" />
            </div>
           </div>
           {{--    --}}
           <div class="form-group">
                <label class="control-label col-md-4">Year_model : </label>
                <div class="col-md-8">
                     <input type="text" name="year_model" id="year_model" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">price : </label>
                <div class="col-md-8">
                     <input type="text" name="price" id="price" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-md-4"> type: </label>
                    <div class="col-md-8">
                         <input type="text" name="type" id="type" class="form-control" />
                    </div>
               </div>
            <div class="form-group">
                <label class="control-label col-md-4"> engine: </label>
                <div class="col-md-8">
                     <input type="text" name="engine" id="engine" class="form-control" />
                </div>
           </div>
           <div class="form-group">
                <label class="control-label col-md-4"> title: </label>
                <div class="col-md-8">
                     <input type="text" name="title" id="title" class="form-control" />
                </div>
           </div>
           <div class="form-group">
                <label class="control-label col-md-4"> detail: </label>
                <div class="col-md-8">
                     <input type="text" name="detail" id="detail" class="form-control" />
                </div>
           </div>
           <div class="form-group">
                <label class="control-label col-md-4"> status_car: </label>
                <div class="col-md-8">
                     <input type="text" name="status_car" id="status_car" class="form-control" />
            </div>
           </div>
           {{--    --}}
           <div class="form-group">
            <label class="control-label col-md-4">Select Profile Image : </label>
            <div class="col-md-8">
             <input type="file" name="image" id="image" />
             <span id="store_image"></span>
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
                <h2 class="modal-title">ยืนยันการลบ</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">ต้องการลบจริง??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
<!-- jQuery -->
{{-- <script src="{{ asset('frontend/adminlte/plugins/jquery/jquery.min.js')}}"></script> --}}
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('frontend/adminlte/dist/js/demo.js')}}"></script>

<script>
$(document).ready(function(){

 $('#car_manage_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('ajax-crud.index') }}",
  },
  columns:[
   {
    data: 'image',
    name: 'image',
   
    render: function(data, type, full, meta){
    return "<img src={{ URL::to('/') }}/images/allcar/" + title + model + "/370_260/" + data + " width='70' class='img-thumbnail' />";
     //return "<img src={{ URL::to('/') }}/images/allcar/Toyota/Yaris/370_260/" + data + " width='70' class='img-thumbnail' />";
     //return "<img src={{ URL::to('/') }}/allcar/images/" + data + " width='70' class='img-thumbnail' />";
    },
    orderable: false
   },
   {
    data: 'title',
    name: 'title'
   },
   {
    data: 'model',
    name: 'model'
   },
    {
    data: 'year_model',
    name: 'year_model'
   },
   {
    data: 'price',
    name: 'price'
   },
   
   {
    data: 'created_at',
    name: 'created_at'
   },
   {
    data: 'updated_at',
    name: 'updated_at'
   },
   
   {
    data: 'action',
    name: 'action',
    orderable: false
   }
  ]
 });

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
    url:"{{ route('ajax-crud.store') }}",
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

 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result').html('');
  $.ajax({
   url:"/ajax-crud/"+id+"/edit",
   dataType:"json",
   success:function(html){
    $('#brand').val(html.data.brand);
    $('#model').val(html.data.model);
    $('#year_model').val(html.data.year_model);
    $('#price').val(html.data.price);
    $('#type').val(html.data.type);
    $('#engine').val(html.data.engine);
    $('#title').val(html.data.title);
    $('#detail').val(html.data.detail);
    $('#status_car').val(html.data.status_car);
    $('#store_image').html("<img src={{ URL::to('/') }}/images/allcar/" + html.data.image + " width='70' class='img-thumbnail' />");
    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
    $('#hidden_id').val(html.data.id);
    $('.modal-title').text("Edit New Record");
    $('#action_button').val("Edit");
    $('#action').val("Edit");
    $('#formModal').modal('show');
   }
  })
 });

 var user_id;

 $(document).on('click', '.delete', function(){
  user_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"ajax-crud/destroy/"+user_id,
   beforeSend:function(){
    $('#ok_button').text('กำลังลบ...');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#car_manage_table').DataTable().ajax.reload();
    }, 2000);
   }
  })
 });

});
</script>

