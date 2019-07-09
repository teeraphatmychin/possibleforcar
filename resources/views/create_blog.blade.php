

<html>
                <head>
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                 <title>Blog manage</title>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
                 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
                 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
               {{--    --}}
                   <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
               
                 {{--    --}}
                </head>
                <body>
                
                                               <div align="right">
                                               <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
                                               </div>
                                               <br />
                                               <div class="table-responsive">
                                                   <table class="table table-bordered table-striped" id="blog_manage_table">
                                                       <thead>
                                                           <tr>
                                                               <th width="5%">Image</th>
                                                               <th width="5%">subject</th>                                              
                                                               <th width="20%">title</th>
                                                               <th width="50%">article</th>
                                                               <th width="5%">post_by</th>
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
                           <label class="control-label col-md-2" >subject : </label>
                           <div class="col-md-10">
                            <input type="text" name="subject" id="subject" class="form-control" />
                           </div>
                          </div>
                          {{--    --}}
                          <div class="form-group">
                               <label class="control-label col-md-2">title : </label>
                               <div class="col-md-10">
                                    <input type="text" name="title" id="title" class="form-control" />
                               </div>
                           </div>
                         
                         
                           <div class="form-group">
                               <label class="control-label col-md-2">post_by: </label>
                               <div class="col-md-10">
                                    <input type="text" name="post_by" id="post_by" class="form-control" />
                               </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-md-1">article:</label>
                                <div class="col-md-12">
                                    <textarea name="article" id="article" class="form-control">{{old('article')}} </textarea> 
                                </div>
                          </div>
                          
                                
                         
                        
                          </div>
                          {{--    --}}
               
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


               <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
               <script>
                        var options = {
                          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                        };
                      </script>
               <script>
                        CKEDITOR.replace( 'article',options);
                </script>
               <script>
               
               $(document).ready(function(){
               
                $('#blog_manage_table').DataTable({
                 processing: true,
                 serverSide: true,
                 ajax:{
                  url: "{{ route('ajax-crudBlog.index') }}",
                 },
                 columns:[
                  {
                   data: 'image',
                   name: 'image',
                  
                   render: function(data, type, full, meta){
                   return "<img src={{ URL::to('/') }}/images/allcar/" + subject + model + "/370_260/" + data + " width='70' class='img-thumbnail' />";
                    //return "<img src={{ URL::to('/') }}/images/allcar/Toyota/Yaris/370_260/" + data + " width='70' class='img-thumbnail' />";
                    //return "<img src={{ URL::to('/') }}/allcar/images/" + data + " width='70' class='img-thumbnail' />";
                   },
                   orderable: false
                  },
                  {
                   data: 'subject',
                   name: 'subject'
                  },
                  {
                   data: 'title',
                   name: 'title'
                  },
                   {
                   data: 'post_by',
                   name: 'post_by'
                  },
                  {
                   data: 'article',
                   name: 'article'
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
                   url:"{{ route('ajax-crudBlog.store') }}",
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
                     $('#blog_manage_table').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                   }
                  })
                 }
               
                 if($('#action').val() == "Edit")
                 {
                  $.ajax({
                   url:"{{ route('ajax-crudBlog.update') }}",
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
                     $('#blog_manage_table').DataTable().ajax.reload();
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
                  url:"/ajax-crudBlog/"+id+"/edit",
                  dataType:"json",
                  success:function(html){
                   $('#subject').val(html.data.subject);
                   $('#title').val(html.data.title);
                   $('#article').val(html.data.article);
                   $('#post_by').val(html.data.post_by);
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
                  url:"ajax-crudBlog/destroy/"+user_id,
                  beforeSend:function(){
                   $('#ok_button').text('Deleting...');
                  },
                  success:function(data)
                  {
                   setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#blog_manage_table').DataTable().ajax.reload();
                   }, 2000);
                  }
                 })
                });
               
               });
               </script>
               