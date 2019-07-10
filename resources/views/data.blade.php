
@foreach($postGrids as $postGrid)
            <div class="col-md-4">
                <div class="car-item">
                    <div class="thumb-content">
                        <div class="car-banner">
                                <a href="{{url('/detail-car',$postGrid->id)}}">ดิลพิเศษ</a>
                        </div>
                        <div class="thumb-inner">
                            {{--  <a href="{{route('single_car')}}"><img src="http://placehold.it/370x260" alt=""></a>  --}}
                            <a href="{{url('/detail-car',$postGrid->id)}}"><img src="{{ URL::to('/') }}/images/allcar/{{$postGrid->brand}}/{{$postGrid->model}}/370_260/{{ $postGrid->image }}" class="img-thumbnail" alt=""></a>

                        </div>
                    </div>
                    <div class="down-content">
                            <a href="{{url('/detail-car',$postGrid->id)}}"><h4>{{$postGrid->brand}}{{$postGrid->model}}</h4></a>
                            <span> เริ่มต้น {{$postGrid->price}} บาท</span>
                            <div class="line-dec"></div>
                            <p> {{ str_limit( $postGrid->title, 90)}}</p>
                            <ul class="car-info">
                                    
                                <li><div class="item"><i class="flaticon flaticon-calendar"></i><p>{{$postGrid->year_model}}</p></div></li>
                                <li><div class="item"><i class="flaticon flaticon-speed"></i><p>{{$postGrid->speed}}p/h</p></div></li>
                                <li><div class="item"><i class="flaticon flaticon-road"></i><p>{{$postGrid->road}}km</p></div></li>
                                <li><div class="item"><i class="flaticon flaticon-fuel"></i><p>{{$postGrid->engine}}.</p></div></li>
                        </ul>
                    </div>
                </div>
            </div>
@endforeach
