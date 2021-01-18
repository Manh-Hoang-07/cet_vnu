@extends('user.dashboard')
@section('content')
<div class="container">
<div class="padding-right">
   <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Thông tin các sự kiện</h2>
    </div><!--features_items-->
<!--/recommended_items-->
    <div>      
		@foreach($events as $event)
		<div class="col-sm-4">
		    <div class="product-image-wrapper" style="border-radius: 10px;border:1px solid gray;background-color: #cbd9e0;">
		        <div class="single-products">
		            <div class="productinfo text-center">
	                    <h2>{{$event->title}}</h2>
	                    <div style="border-top: 1px solid gray;background-color: white;">
	                    Thời gian bắt đầu:<p>{{$event->time}}</p>
		                <a href="{{URL::to('/event-detail/'.$event->id)}}" type="button" class="btn btn-default add-to-cart" style="background-color: green;color: white;">Xem thêm</a>
		                </div>
		            </div>
		        </div>

		        <!-- <div class="choose">
		            <ul class="nav nav-pills nav-justified">
		                <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
		                <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
		            </ul>
		        </div> -->
		    </div>
		</div> 
		@endforeach
    </div>
</div>
</div>
@endsection