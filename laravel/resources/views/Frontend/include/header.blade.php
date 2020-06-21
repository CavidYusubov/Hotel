<div class="header"><!-- Header Section -->
			<div class="pre-header"><!-- Pre-header -->
				<div class="container">
					<div class="row">
						<div class="pull-left pre-address-b"><p><i class="fa fa-map-marker"></i> {{$contact_info->location}}</p></div>
						<div class="pull-right">
							<div class="pull-left">
								<ul class="pre-link-box">
									<li><a href="{{url('/')}}/about">{{ __('index.About_top_head')}}</a></li>
									<li><a href="{{url('/contact')}}">{{ __('index.Contact_top_head')}}</a></li>
									
								</ul>
							</div>
							<div class="pull-right">
								<div class="language-box">
									<ul>
                                    @if (session()->get('locale') == 'tr') 
                                    <li><a href="lang/tr"><img alt="language" src="img/tr.svg"><span class="language-text">Türkçe</span></a></li>
                                    <li><a href="lang/en"><img alt="language" src="temp/english.png"><span class="language-text">English</span></a></li>
                                    @endif 
                                    @if (App::isLocale('en')) 
                                        <li><a href="lang/en"><img alt="language" src="temp/english.png"><span class="language-text">English</span></a></li>
										<li><a href="lang/tr"><img alt="language" src="img/tr.svg"><span class="language-text">Türkçe</span></a></li>
                                     @endif 
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('Frontend.include.menu')
		</div>