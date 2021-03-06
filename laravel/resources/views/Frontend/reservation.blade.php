@extends('Frontend.layout')
@section('content')

<div class="breadcrumb breadcrumb-1 pos-center">
		<h1>RESERVATION FORM</h1>
	</div>
	<div class="free-book">
		<div class="book-slider">
			<div class="container">
				<div class="row pos-center">
					<div class="pos-center white-title marginb60">
						<h2>Reservation Form</h2>
						<img src="img/shape.png">
					</div>
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
									<div class="button-style-1 margint30">
										<a id="res-submit" href="#"><i class="fa fa-search"></i>SEARCH</a>
									</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div id="parallax123" class="parallax parallax-one clearfix"><!-- Parallax Section -->
			<div class="support-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>NO FEES</h4>
										<p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>NO FEES</h4>
										<p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />+61 3 8376 6284</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>QUICK RESERVATION</h4>
										<p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>QUICK RESERVATION</h4>
										<p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />luxen@2035themes.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>CALL TO YOU</h4>
										<p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>CALL TO YOU</h4>
										<p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />+61 3 8376 6284</p>
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
								<h2>Sign up newsletter</h2>
							</div>
							<div class="pull-left">
								<form action="#" method="post" id="ajax-contact-form">
									<input type="text" placeholder="Enter a e-mail address">
									<input type="submit" value="SUBSCRIBE" >
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @endsection
@section('css')@endsection
@section('js')@endsection