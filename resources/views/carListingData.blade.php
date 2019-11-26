@foreach($postLists as $postList)

<div class="col-md-12" id="post_data">
        <div class="car-item">
            <div class="row">
                <div class="col-md-5">
                    <div class="thumb-content">
                        <div class="car-banner">
                                <a href="{{url('/detail_car',$postList->id)}}">ดิลพิเศษ</a>
                        </div>
                        <div class="thumb-inner">
                            {{--  <a href="single_car.html"><img src="https://placehold.it/370x345" alt=""></a>  --}}
                            <a href="{{url('/detail_car',$postList->id)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$postList->brand}}/{{$postList->model}}/370_260/{{ $postList->image }}" class="img-thumbnail" alt=""></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                     <div class="down-content">
                        <a href="{{url('/detail_car',$postList->id)}}"><h4>{{$postList->brand}} {{$postList->model}}</h4></a>
                        <span> เริ่มต้น {{$postList->price}} บาท</span>
                        <div class="line-dec"></div>
                        <p> {{ str_limit( $postList->detail, 90)}}</p>
                            <ul class="car-info">
                                <li><div class="item"><i class="flaticon flaticon-calendar"></i><p>{{$postList->year_model}}</p></div></li>
                                <li><div class="item"><i class="flaticon flaticon-speed"></i><p>{{$postList->speed}}p/h</p></div></li>
                                <li><div class="item"><i class="flaticon flaticon-road"></i><p>{{$postList->road}}km</p></div></li>
                                <li><div class="item"><i class="flaticon flaticon-fuel"></i><p>{{$postList->engine}}.</p></div></li>
                        </ul>
                    </div>  
                </div>
                <div class="col-md-2">
						<br><br>
						<a href="#demo" class="btn btn-primary" data-toggle="modal" data-backdrop="false">สนใจโปรโมชั่นนี้</a>
						{{--  <div id="demo" class="collapse">  --}}
								<!-- Modal -->
								<div class="modal fade" id="demo" role="dialog">
									<div class="modal-dialog modal-dialog-centered modal-lg">
									
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
										<h4 class="modal-title">{{$postList->brand}} {{$postList->model}}</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<div class="modal-body">
											<div align="right">
													<a href="{{ route('customer_crud.index') }}" class="btn btn-default">Back</a>
												</div>  
															
												<form method="post" action="{{route('customer_crud.store') }}" enctype="multipart/form-data">
												@csrf
													<div class="form-group text-center">
														<div class="col-md-12">
															<input type="text" name="customer_name" value="{{old('customer_name')}}" class="form-control input-lg" placeholder="ชื่อของคุณ" />
														</div>
													</div>		
													<div class="form-group text-center">
														<div class="col-md-12">
															<input type="text" name="customer_phone" value="{{old('customer_phone')}}" class="form-control input-lg" placeholder="เบอร์ติดต่อของคุณ" />
														</div>
													</div>
													<div class="form-group text-center">
														<input type="submit" name="add" class="btn btn-primary input-lg" value="ส่งข้อมูล" />
													</div>
												</form>
											</div>
										</div>
										<div class="modal-footer">
										<input type="submit" name="add" class="btn btn-primary input-lg" value="ส่งข้อมูล" />

										{{--  <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>  --}}
										</div>
									</div>
									
									</div>
								</div> 			
					{{--    --}}
										 
					{{--    --}}
                </div>
            </div>
        </div>
    </div>    
@endforeach