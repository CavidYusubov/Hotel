<div class="main-header"><!-- Main-header -->
				<div class="container">
					<div class="row">
						<div class="pull-left">
							<div class="logo">
							@if( request()->is('/*'))
							@foreach($settings as $setting)


	@if($setting->settings_key == 'logo' )
								<a href="{{url('/')}}"><img alt="Logo" src="{{ $setting->settings_value}}" class="img-responsive" /></a>
					@endif
			
								@endforeach	
								
								@else

								@foreach($settings as $setting)


@if($setting->settings_key == 'logo_dark' )
							<a href="{{url('/')}}"><img alt="Logo" src="{{ $setting->settings_value}}" class="img-responsive" /></a>
				@endif
		
							@endforeach	

								@endif
						
							</div>
						</div>
						<div class="pull-right">
							<div class="pull-left">
								<nav class="nav">
									<ul id="navigate" class="sf-menu navigate">
										<li class="{{ request()->is('/*') ? 'active' : '' }}"><a href="{{url('/')}}">{{ __('menu.HOME')}}</a>
										<!-- 	<ul>
												<li><a href="index.html">Slider Homepage</a></li>
												<li><a href="index-full-screen.html">Full Screen Homepage</a></li>
												<li><a href="http://www.2035themes.com/luxen/boxed/">Boxed Homepage</a></li>
											</ul> -->
										</li>
									<!-- 	<li class="parent-menu"><a href="#">FEATURES</a>
											<ul>
												<li><a href="#">2 Homepages</a></li>
												<li><a href="#">Ajax/PHP Booking Form</a></li>
												<li><a href="#">Ultra Responsive</a></li>
												<li><a href="under-construction.html">Countdown Page</a></li>
												<li><a href="#">2 Category Pages</a></li>
												<li><a href="404.html">404 Page</a></li>
											</ul>
										</li> -->
										<li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="{{url('/')}}/about"  >{{ __('menu.ABOUT')}}</a></li>
											<!-- <ul>
												<li><a href="about.html">About</a></li>
												<li><a href="category-grid.html">Category Grid</a></li>
												<li><a href="category-list.html">Category List</a></li>
												<li><a href="room-single.html">Room Details</a></li>
												<li><a href="gallery.html">Gallery</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-details.html">Blog Single</a></li>
												<li><a href="left-sidebar-page.html">Left Sidebar Page</a></li>
												<li><a href="right-sidebar-page.html">Right Sidebar Page</a></li>
												<li><a href="under-construction.html">Under Construction</a></li>
												<li><a href="404.html">404 Page</a></li>
											</ul> -->
										</li>
										<li class="{{ request()->is('rooms*') ? 'active' : '' }}"><a href="{{url('/rooms')}}">{{ __('menu.ROOMS')}}</a></li>
										<li class="{{ request()->is('reserv*') ? 'active' : '' }}"><a href="{{url('/reserv')}}">{{ __('menu.RESERVATION')}}</a></li>
										<li class="{{ request()->is('gallery*') ? 'active' : '' }}"><a  href="{{url('/gallery')}}">{{ __('menu.GALLERY')}}</a></li>
										<li class="{{ request()->is('contact*') ? 'active' : '' }}"><a  href="{{url('/contact')}}">{{ __('menu.CONTACT')}}</a></li>
									</ul>
								</nav>
							</div>
							<div class="pull-right">
								<div class="button-style-1 margint45">
									<a href="reservation-form-dark.html"><i class="fa fa-calendar"></i>{{ __('menu.BOOKNOW')}}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>