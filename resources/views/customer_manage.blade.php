

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
                                       <div class="table-responsive">
                                           <table class="table table-bordered table-striped" id="customer_manage_table">
                                               <thead>
                                                   <tr>
                                                        <th width="5%">ID</th>
                                                       <th width="5%">name</th>
                                                       <th width="5%">phone</th>
                                                       <th width="5%">social</th>
                                                       <th width="5%">brand</th>
                                                       <th width="5%">model</th>
                                                       <th width="5%">car_down</th>
                                                       <th width="5%">installment</th>
                                                       <th width="5%">customer_status</th>
                                                       <th width="5%">sell_name</th>
                                                       <th width="5%">Created</th>
                                                       <th width="5%">Updated</th>
                                                       <th width="5%">Action</th>
                                                   </tr>
                                               </thead>
                                           </table>
                                       </div>
                                       <br />
                                       <br />
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
           </body>
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
                   <label class="control-label col-md-4" >Customer_name : </label>
                   <div class="col-md-8">
                    <input type="text" name="customer_name" id="customer_name" class="form-control" />
                   </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-4">customer_phone : </label>
                        <div class="col-md-8">
                          <input type="text" name="customer_phone" id="customer_phone" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-md-4">customer_social : </label>
                            <div class="col-md-8">
                              <input type="text" name="customer_social" id="customer_social" class="form-control" />
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">brand : </label>
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
                       <label class="control-label col-md-4">car_down : </label>
                       <div class="col-md-8">
                            <input type="text" name="car_down" id="car_down" class="form-control" />
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-md-4">installment : </label>
                       <div class="col-md-8">
                            <input type="text" name="installment" id="installment" class="form-control" />
                       </div>
                   </div>
                   <div class="form-group">
                           <label class="control-label col-md-4"> customer_status: </label>
                           <div class="col-md-8">
                                <input type="text" name="customer_status" id="customer_status" class="form-control" />
                           </div>
                      </div>
                   <div class="form-group">
                       <label class="control-label col-md-4"> sell_name: </label>
                       <div class="col-md-8">
                            <input type="text" name="sell_name" id="sell_name" class="form-control" />
                       </div>
                  </div>
                
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
       
        $('#customer_manage_table').DataTable({
         processing: true,
         serverSide: true,
         ajax:{
          url: "{{ route('customerOrder.index') }}",
         },
         columns:[
            {
                data: 'id',
                name: 'id'
              },
          {
            data: 'customer_name',
            name: 'customer_name'
          },
          {
            data: 'customer_phone',
            name: 'customer_phone'
          },
          {
            data: 'customer_social',
            name: 'customer_social'
          },
          {
           data: 'brand',
           name: 'brand'
          },
          {
           data: 'model',
           name: 'model'
          },
           {
           data: 'car_down',
           name: 'car_down'
          },
          {
           data: 'installment',
           name: 'installment'
          },
          {
            data: 'customer_status',
            name: 'customer_status'
           },
           {
            data: 'sell_name',
            name: 'sell_name'
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
             $('#customer_manage_table').DataTable().ajax.reload();
            }
            $('#form_result').html(html);
           }
          })
         }
       
         if($('#action').val() == "Edit")
         {
          $.ajax({
           url:"{{ route('customerOrder.update') }}",
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
             $('#customer_manage_table').DataTable().ajax.reload();
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
          url:"/customerOrder/"+id+"/edit",
          dataType:"json",
          success:function(html){
            $('#customer_name').val(html.data.customer_name);
            $('#customer_phone').val(html.data.customer_phone);
            $('#customer_social').val(html.data.customer_social);
           $('#brand').val(html.data.brand);
           $('#model').val(html.data.model);
           $('#car_down').val(html.data.car_down);
           $('#installment').val(html.data.installment);
           $('#customer_status').val(html.data.customer_status);
           $('#sell_name').val(html.data.sell_name);
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
          url:"customerOrder/destroy/"+user_id,
          beforeSend:function(){
           $('#ok_button').text('กำลังลบ...');
          },
          success:function(data)
          {
           setTimeout(function(){
            $('#confirmModal').modal('hide');
            $('#customer_manage_table').DataTable().ajax.reload();
           }, 2000);
          }
         })
        });
       
       });
       </script>
       