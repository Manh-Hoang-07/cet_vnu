@extends('user.dashboard')
@section('content')

<div class="container">
<div class="padding-right">
	@foreach($events as $event)
    <div class="features_items">
        <h2 class="title text-center">{{$event->title}}</h2>
    </div>
    <div>      
	    <div class="product-image-wrapper">
	        <div class="single-products">
	            <div class="productinfo text-center">
                    <div style="border-top: 1px solid gray;background-color: white;">
                    	Thời gian bắt đầu:<p>{{$event->time}}</p>
	                	<p>{{$event->content}}</p>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
    @endforeach
</div>
</div>
@endsection