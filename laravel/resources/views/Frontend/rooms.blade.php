@extends('Frontend.layout')
@section('content')
<div class="breadcrumb breadcrumb-1 pos-center" style="    background: url('{{url('/')}}/{{$rooms_info->background_image}}');    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">

@if(app()->getLocale() == 'tr')
							<h1>{{$rooms_info->title_tr}}</h1>
								@else
								<h1>{{$rooms_info->title_en}}</h1>
								@endif
	</div>
<div class="container margint60">
			<div class="row">
				<div class="col-lg-12 marginb20"><!-- Room Sort -->
					<div class="sortby clearfix">
						<div class="pull-left">
							<select>
								<option selected="selected">ASCENDING</option>
								<option>DESCENDING</option>
							</select>
						</div>
						<div class="pull-right sort-icon">
							<a class="fright" href="#"><img src="temp/grid-icon.png" alt=""></a> 
							<a class="fright" href="#"><img src="temp/list-icon.png" alt=""></a>
						</div>
					</div>	
				</div>
				@foreach($rooms as $room)
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="temp/room-image-1.jpg">
								<div class="home-room-details">

									
								
									@if(app()->getLocale() == 'tr')
									<h5><a href="#"> {{$room->title_tr}}</a></h5>
								@else
								<h5><a href="#">{{$room->title_en}}</a></h5>
								@endif
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
							@if(app()->getLocale() == 'tr')
							<p>{{$room->text_tr}}</p>
								@else
								<p>{{$room->text_en}}</p>
								@endif
								
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>{{$room->price}}<span class="room-bottom-time">
								
								@if(app()->getLocale() == 'tr')
								/ GÜN
								@else
								/ Day
								@endif
								</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
									@if(app()->getLocale() == 'tr')
					<a href="#">Şimdi rezerve et</a>
								@else
								<a href="#">BOOK NOW</a>
								@endif
										
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				<!-- <div class="col-lg-4 col-sm-6 clearfix">
					<div class="home-room-box clearfix">
						<div class="room-image">
							<img alt="Room Images" class="img-responsive" src="temp/room-image-1.jpg">
							<div class="home-room-details">
								<h5><a href="#">The luxury room in Istanbul</a></h5>
								<div class="pull-left">
									<ul>
										<li><i class="fa fa-calendar"></i></li>
										<li><i class="fa fa-flask"></i></li>
										<li><i class="fa fa-umbrella"></i></li>
										<li><i class="fa fa-laptop"></i></li>
									</ul>
								</div>
								<div class="pull-right room-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star inactive"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="room-details">
							<p>Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tibulum at ero[...]</p>
						</div>
						<div class="room-bottom">
							<div class="pull-left"><h4>89$<span class="room-bottom-time">/ Day</span></h4></div>
							<div class="pull-right">
								<div class="button-style-1">
									<a href="#">BOOK NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				 -->
			</div>
		</div>

        @endsection
@section('css')@endsection
@section('js')@endsection