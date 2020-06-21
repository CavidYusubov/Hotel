
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
@foreach($settings as $setting)
@if($setting->settings_key == 'title')
@if(app()->getLocale() == 'tr')
{{$setting->settings_value }}
@endif
@endif
@if($setting->settings_key == 'title_en')
@if(app()->getLocale() == 'en')
{{$setting->settings_value }}
@endif
@endif
@endforeach
</title>
<meta name="description" content="
@foreach($settings as $setting)
@if($setting->settings_key == 'description')
@if(app()->getLocale() == 'tr')
{{$setting->settings_value }}
@endif
@endif
@if($setting->settings_key == 'description_en')
@if(app()->getLocale() == 'en')
{{$setting->settings_value }}
@endif
@endif
@endforeach
">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="
@foreach($settings as $setting)
@if($setting->settings_key == 'icon')
{{$setting->settings_value }}
@endif
@endforeach
" />
<style>
p {
    margin: 0 0 10px;
    text-align: justify!important;
}</style>
<!-- CSS FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/supersized.css">
<link rel="stylesheet" href="css/supersized.shutter.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/datepicker.css">
<link rel="stylesheet" href="css/selectordie.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/2035.responsive.css">

<script src="js/vendor/modernizr-2.8.3-respond-1.1.0.min.js"></script>
<!-- Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper">
	<div id="home">
    @include('Frontend.include.header')
		<div class="book-slider">
			<div class="container">
				<div class="row pos-center">
					<div class="reserve-form-area">
						<form action="#" method="post" id="ajax-reservation-form">
							<ul class="clearfix">
								<li class="li-input">
									<label>ARRIVAL</label>
									<input type="text" id="dpd1" name="dpd1" class="date-selector" placeholder="&#xf073;" />
								</li>
								<li class="li-input">
									<label>DEPARTURE</label>
									<input type="text" id="dpd2" name="dpd2" class="date-selector" placeholder="&#xf073;" />
								</li>
								<li class="li-select">
									<label>ROOMS</label>
									<select name="rooms" class="pretty-select">
										<option selected="selected" value="1" >1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								<li class="li-select">
									<label>ADULT</label>
									<select name="adult" class="pretty-select">
										<option selected="selected" value="1" >1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								<li class="li-select">
									<label>CHILDREN</label>
									<select name="children" class="pretty-select">
										<option selected="selected" value="0" >0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								<li>
									<div class="button-style-1">
										<a id="res-submit" href="#"><i class="fa fa-search"></i>SEARCH</a>
									</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-book-slider">
			<div class="container">
				<div class="row pos-center">
					<ul>
						<li><i class="fa fa-shopping-cart"></i> WOOCOMMERCE COMPATIBLE</li>
						<li><i class="fa fa-globe"></i> LANGUAGE COMPATIBLE</li>
						<li><i class="fa fa-coffee"></i> COFFEE & BREAKFAST FREE</li>
						<li><i class="fa fa-windows"></i> FREE WI-FI ALL ROOM</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="about clearfix"><!-- About Section -->
			<div class="container">
				<div class="row">
					<div class="about-title pos-center margint60">
						<h2>{{ __('index.head')}}</h2>
						<div class="title-shape"><img alt="Shape" src="img/shape.png"></div>
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent <span class="active-color">commodo</span> cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum</p>
					</div>
					<div class="otel-info margint60">
						<div class="col-lg-6 col-sm-12">
							<div class="title-style-1 marginb40">
							
							@if(app()->getLocale() == 'tr')
							<h5>QALERİ</h5>
								@else
								<h5>GALLERY</h5>
								@endif
								
								<hr>
							</div>
							<div class="flexslider">
								<ul class="slides">
									@foreach($galleries as $gallery)
									<li><img alt="Slider 1" class="img-responsive" src="{{$gallery->image}}" /></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>
								@if(app()->getLocale() == 'tr')
								{{$abouts->title_tr}}
								@else
								{{$abouts->title_en}}
								@endif
								</h5>
								<hr>
							</div>
							@if(app()->getLocale() == 'tr')
								<?php echo substr( $abouts->text_tr,0,1050);?><a href="{{url('about')}}">[...]</a>
								@else
								<?php echo $abouts->text_en;?>
								@endif
						</div>
						<div class="col-lg-4 col-sm-6">
							
							<div class="home-news">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
			<div class="container">
				<div class="row">	
					<div class="title-style-2 marginb40 pos-center">
					@if(app()->getLocale() == 'tr')
							<h3>ODALARI KEŞF ET</h3>
								@else
								<h3>EXPLORE ROOMS</h3>
								@endif
						
						
						<hr>
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
				</div>
			</div>
		</div>
		<div id="parallax123" class="parallax parallax-one clearfix margint60"><!-- Parallax Section -->
			<div class="support-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										@if(app()->getLocale() == 'tr')
										<h4>BİZİ ARA</h4>
										<p class="margint20">Bizi bu numaralardan araya bilirsiniz</p>
										@else
										<h4>CALL US</h4>
										<p class="margint20">You can call us </p>
										@endif
									
									
								
										<p class="margint20"></p>
									
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										@if(app()->getLocale() == 'tr')
										<h4>Telefon numaramız</h4>
										<p class="margint20">Bizi bu numaralardan araya bilirsiniz
										<br>{{$contact_info->phone}}
										</p>
										@else
										<h4>PHONE NUMBER</h4>
										<p class="margint20">You can call us
										<br>{{$contact_info->phone}}
										 </p>
										@endif
											</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										@if(app()->getLocale() == 'tr')
										<h4>Bize E-posta gönder</h4>
										<p class="margint20">Bize bu e-posta ile ulaşa bilirsiniz
										<br>
										</p>
										@else
										<h4>SEND US E-MAIL</h4>
										<p class="margint20">You can Send us email
										<br>
										 </p>
										@endif
									
											</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										@if(app()->getLocale() == 'tr')
										<h4>Bize E-posta gönder</h4>
										<p class="margint20">Bize bu e-posta ile ulaşa bilirsiniz
										<br>{{$contact_info->email}}
										</p>
										@else
										<h4>SEND US E-MAIL</h4>
										<p class="margint20">You can Send us email
										<br>{{$contact_info->email}}
										 </p>
										@endif	</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										@if(app()->getLocale() == 'tr')
										<h4>Bize ulaşın</h4>
										<p class="margint20">Bize bu e-posta ile ulaşa bilirsiniz
										<br>
										</p>
										@else
										<h4>VISIT US</h4>
										<p class="margint20">You can visit us
										<br>
										 </p>
										@endif
										</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										@if(app()->getLocale() == 'tr')
										<h4>Bize ulaşın</h4>
										<p class="margint20">Bize bu e-posta ile ulaşa bilirsiniz
										<br>{{$contact_info->location}}
										</p>
										@else
										<h4>VISIT US</h4>
										<p class="margint20">You can visit us
										<br>{{$contact_info->location}}
										 </p>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter-section"><!-- Newsletter Section -->
			<div class="container">
				<div class="row">
					<div class="newsletter-top pos-center margint30">
						<img alt="Shape Image" src="img/shape.png" >
					</div>
					<div class="newsletter-form margint40 pos-center">
						<div class="newsletter-wrapper">
							<div class="pull-left">
							@if(app()->getLocale() == 'tr')
							<h2>Haberler için Abone olun</h2>
										@else
										<h2>Sign up newsletter</h2>
										@endif
								
							</div>
							<div class="pull-left">
								<form action="#" method="post" id="ajax-contact-form">
								@if(app()->getLocale() == 'tr')
								<input type="text" placeholder="E-mail adresinizi girin">
									<input type="submit" value="Abone ol" >
										@else
										<input type="text" placeholder="Enter a e-mail address">
									<input type="submit" value="SUBSCRIBE" >
										@endif
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@include('Frontend.include.footer')