@extends('Frontend.layout')
@section('content')
<div class="breadcrumb breadcrumb-1 pos-center" style="    background: url('{{url('/')}}/{{$abouts->title_background_image}}');    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">

@if(app()->getLocale() == 'tr')
							<h1>{{$abouts->title_tr}}</h1>
								@else
								<h1>{{$abouts->title_en}}</h1>
								@endif
	
	</div>
<div class="container">
			<div class="row">
				<div class="about-slider margint40"><!-- About Slider -->
					<div class="col-lg-12">
						<div class="flexslider">
							<ul class="slides">
							@foreach($galleries as $gallery)
									<li><img alt="Slider 1" class="img-responsive" src="{{$gallery->image}}" /></li>
									@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="about-info clearfix"><!-- About Info -->
					<div class="col-lg-12">
						
								@if(app()->getLocale() == 'tr')
								<h3>{{$abouts->title_tr}}</h3>
								@else
								<h3>{{$abouts->title_en}}</h3>
								@endif
								@if(app()->getLocale() == 'tr')
								
								<p class="margint30" style="text-align:justify"><?php echo $abouts->text_tr;?></p>
								@else
						
								<p class="margint30" style="text-align:justify"><?php echo $abouts->text_en;?></p>
								@endif
						
						
					</div>
					
				</div>
				<div class="about-services margint60 clearfix"><!-- About Services -->
				@foreach($abouts_images as $abouts_image)
					<div class="col-lg-4 col-sm-6">
					@if(app()->getLocale() == 'tr')
					<img alt="About Services" class="img-responsive" src="{{url('/')}}/{{$abouts_image->image}}" >
						<h5 class="margint20">{{$abouts_image->title_tr}}</h5>
						<p class="margint20">{{$abouts_image->text_tr}}</p>
								@else
								<img alt="About Services" class="img-responsive" src="{{url('/')}}/{{$abouts_image->image}}" >
						<h5 class="margint20">{{$abouts_image->title_en}}</h5>
						<p class="margint20">{{$abouts_image->text_en}}</p>
								@endif
					
					</div>
					@endforeach
				</div>
				<!-- <div class="about-destination margint40 marginb40 clearfix"> About Destination 
					<div class="title pos-center marginb40">
						<h2>DESTINATIONS</h2>
						<div class="title-shape"><img alt="Shape" src="img/shape.png"></div>
					</div>
					<div class="col-lg-8 col-sm-12 about-title pos-center">
		                <div class="tab-content">
		                    <div class="tab-pane fade in active" id="tab1">
		                        <img src="temp/maps.jpg" alt="" class="img-responsive" />
		                    </div>
		                    <div class="tab-pane fade" id="tab2">
		                        <img src="temp/maps.jpg" alt="" class="img-responsive" />
		                    </div>
		                    <div class="tab-pane fade" id="tab3">
		                        <img src="temp/maps.jpg" alt="" class="img-responsive" />
		                    </div>
		                </div>
					</div>
					<div class="col-lg-4 col-sm-12 tabbed-area tab-style">
					    <div class="about-destination-box active-tab">
			                <a href="#tab1"><h6>MAP DESTINATION</h6></a>
			                <a href="#tab1"><p class="margint10">Duis mollis, est non commodo luctus, nisi erat odiot urna mollis ornare vel eu leo. semper. </p></a>
					    </div>                    
					    <div class="about-destination-box">
			                <a href="#tab2"><h6>BUS DESTINATION</h6></a>
			                <a href="#tab2"><p class="margint10">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat .Do gravida at eget metus.</p></a>
					    </div> 
					    <div class="about-destination-box">
			                <a href="#tab3"><h6>OWN CAR</h6></a>
			                <a href="#tab3"><p class="margint10">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere era at eget metus.</p></a>
					    </div>
					</div>
				</div> -->
			</div>
		</div>
@endsection
@section('css')@endsection
@section('js')@endsection