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
         {{--  --}}
        </head>
        @section('content')
        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                <div class="content-wrapper">
                    <div align="right">
                        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="sale_manage_table">
                            <thead>
                                <tr>
                                    <th width="1%">ID</th>
                                    <th width="5%">Name</th>
                                    <th width="5%">Phone</th>
                                    <th width="5%">Social</th>
                                    <th width="5%">Showroom</th>
                                    <th width="5%">Province</th>
                                    <th width="5%">Created</th>
                                    <th width="5%">Updated</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>                     
    
       <div id="formModal" class="modal fade" tabindex="-1" role="dialog">
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
                   <label class="control-label col-md-4" >sale_name : </label>
                   <div class="col-md-8">
                    <input type="text" name="sale_name" id="sale_name" class="form-control" />
                   </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-4">Phone : </label>
                        <div class="col-md-8">
                          <input type="text" name="sale_phone" id="sale_phone" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-md-4">sale_social : </label>
                            <div class="col-md-8">
                              <input type="text" name="sale_social" id="sale_social" class="form-control" />
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Showroom : </label>
                        <div class="col-md-8">
                            <input type="text" name="showroom" id="showroom" class="form-control" />
                        </div>
                   </div>
                  <div class="form-group">
                   <label class="control-label col-md-4">Province : </label>
                   <div class="col-md-8">
                    <input type="text" name="province" id="province" class="form-control" />
                   </div>
                  </div>
                  {{--    --}}
                  
                
                  {{--    --}}
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
       
        $('#sale_manage_table').DataTable({
         processing: true,
         serverSide: true,
         ajax:{
          url: "{{ route('saleManage.index') }}",
         },
         columns:[
            {
                data: 'id',
                name: 'id'
              },
          {
            data: 'sale_name',
            name: 'sale_name'
          },
          {
            data: 'sale_phone',
            name: 'sale_phone'
          },
          {
            data: 'sale_social',
            name: 'sale_social'
          },
          {
           data: 'showroom',
           name: 'showroom'
          },
          {
           data: 'province',
           name: 'province'
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
           url:"{{ route('saleManage.store') }}",
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
             $('#sale_manage_table').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
           }
          })
         }
       
         if($('#action').val() == "Edit")
         {
          $.ajax({
           url:"{{ route('saleManage.update') }}",
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
             $('#sale_manage_table').DataTable().ajax.reload();
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
          url:"/saleManage/"+id+"/edit",
          dataType:"json",
          success:function(html){
            $('#sale_name').val(html.data.sale_name);
            $('#sale_phone').val(html.data.sale_phone);
            $('#sale_social').val(html.data.sale_social);
           $('#showroom').val(html.data.showroom);
           $('#province').val(html.data.province);
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
          url:"saleManage/destroy/"+user_id,
          beforeSend:function(){
           $('#ok_button').text('กำลังลบ...');
          },
          success:function(data)
          {
           setTimeout(function(){
            $('#confirmModal').modal('hide');
            $('#sale_manage_table').DataTable().ajax.reload();
           }, 2000);
          }
         })
        });
       
       });
       </script>

   


