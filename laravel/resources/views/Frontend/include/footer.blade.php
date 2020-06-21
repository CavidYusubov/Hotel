<div class="footer margint40"><!-- Footer Section -->
			<div class="main-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-sm-2 footer-logo">
						
						

								@foreach($settings as $setting)


@if($setting->settings_key == 'logo_dark' )
							<a href="{{url('/')}}"><img alt="Logo" src="{{ $setting->settings_value}}" class="img-responsive" /></a>
				@endif
		
							@endforeach	

							
						</div>
						<div class="col-lg-10 col-sm-10">
							<div class="col-lg-4 col-sm-4">
							@if (session()->get('locale') == 'tr') 
							<h6>Bize ulaşın</h6>
									  @endif 
                                    @if (App::isLocale('en')) 
									<h6>TOUCH WITH US</h6>  @endif 
							
								<ul class="footer-links">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google +</a></li>
									<li><a href="#">otels.com</a></li>
									<li><a href="#">Tripadvisor</a></li>
								</ul>
							</div>
							<div class="col-lg-4 col-sm-4">
							@if (session()->get('locale') == 'tr') 
							<h6>Kısayol</h6>
									  @endif 
                                    @if (App::isLocale('en')) 
									<h6>Shortlinks</h6> @endif 
								
								<ul class="footer-links">
								
								@if (session()->get('locale') == 'tr') 
								<li><a href="{{url('/')}}">Ana sayfa</a></li>
									<li><a href="{{url('/about')}}">Hakkımızda</a></li>
									<li><a href="{{url('/rooms')}}">Odalar</a></li>
									  @endif 
                                    @if (App::isLocale('en')) 
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/about')}}">About</a></li>
									<li><a href="{{url('/rooms')}}">Rooms</a></li>
									
									 @endif 
									 @if (session()->get('locale') == 'tr') 
								<li><a href="{{url('/')}}">Qaleri</a></li>
									<li><a href="{{url('/about')}}">Rezervasyon</a></li>
									<li><a href="{{url('/rooms')}}">İletişim</a></li>
									  @endif 
                                    @if (App::isLocale('en')) 
									<li><a href="{{url('/gallery')}}">Gallery</a></li>
									<li><a href="{{url('/reservation')}}">Reservations</a></li>
									<li><a href="{{url('/contact')}}">Contact</a></li>
									 @endif 
                              
									</ul>
							</div>
						
							<div class="col-lg-4 col-sm-4">
							@if (session()->get('locale') == 'tr') 
								İletişim
									  @endif 
                                    @if (App::isLocale('en')) 
									<h6>CONTACT</h6>
									 @endif 
							
								
								<ul class="footer-links">
		
								<li><p><i class="fa fa-map-marker"></i> {{$contact_info->location}} </p></li>
									<li><p><i class="fa fa-phone"></i> {{$contact_info->phone}}  </p></li>
									<li><p><i class="fa fa-envelope"></i> <a href="mailto:{{$contact_info->email}} ">{{$contact_info->email}} </a></p></li>
								
								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pre-footer">
				<div class="container">
					<div class="row">
						<div class="pull-left"><p>© Laluna 2020</p></div>
						<div class="pull-right">
							<ul>
								<!-- <li><p>CONNECT WITH US</p></li>
								<li><a><img alt="Facebook" src="temp/orkut.png" ></a></li>
								<li><a><img alt="Tripadvisor" src="temp/tripadvisor.png" ></a></li>
								<li><a><img alt="Yelp" src="temp/hyves.png" ></a></li>
								<li><a><img alt="Twitter" src="temp/skype.png" ></a></li>
							--></ul> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- JS FILES -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/superfish.pack.1.4.1.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/selectordie.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/supersized.3.2.7.min.js"></script>
<script src="js/supersized.shutter.min.js"></script>
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="js/gmaps.js"></script>
<script type="text/javascript">

	@if(request()->is('/*'))
    jQuery(function($){				
	$.supersized({
		slideshow			:1,			// Slideshow on/off
		autoplay			:1,			// Slideshow starts playing automatically
		slide_interval		:4000,		// Length between transitions
		transition			:1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed	:1000,		// Speed of transition
		pause_hover			:0,			// Pause slideshow on hover
		performance			:1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
		image_protect		:1,			// Disables image dragging and right click with Javascript
		slides				:[			// Slideshow Images
								
			@foreach($home_slider as $home_slide)
								{image : '{{$home_slide->image}}'},
								@endforeach
							 ]
		});
	});	 
    @endif 

</script>
<script>
$.noConflict();
// Code that uses other library's $ can follow here.
</script>
</body>
</html>