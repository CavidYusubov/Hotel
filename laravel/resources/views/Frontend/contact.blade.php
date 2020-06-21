@extends('Frontend.layout')
@section('content')
<div class="breadcrumb breadcrumb-1 pos-center">
@if(app()->getLocale() == 'tr')
							<h1>{{$contacts->title_tr}}</h1>
								@else
								<h1>{{$contacts->title_en}}</h1>
								@endif
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container">
			<div class="row">
		

				<div class="col-lg-3 col-sm-4 margint60"><!-- Sidebar -->
				<div class="luxen-widget news-widget">
					
					@if(app()->getLocale() == 'tr')
					<?php echo $contacts->text_tr;?>
								@else
								<?php echo $contacts->text_en;?>
								@endif
						</div>
					<div class="luxen-widget news-widget">
						<div class="title">
						@if(app()->getLocale() == 'tr')
							<h5>{{$contacts->title_tr}}</h5>
								@else
								<h5>{{$contacts->title_en}}</h5>
								@endif
						</div>
						<ul class="footer-links">
						
								<li><p><i class="fa fa-map-marker"></i> {{$contact_info->location}} </p></li>
									<li><p><i class="fa fa-phone"></i> {{$contact_info->phone}}  </p></li>
									<li><p><i class="fa fa-envelope"></i> <a href="mailto:{{$contact_info->email}} ">{{$contact_info->email}} </a></p></li>
								
						</ul>
					</div>
					<div class="luxen-widget news-widget">
						<div class="title">
						@if(app()->getLocale() == 'tr')
							<h5>Sosyal medya</h5>
								@else
								<h5>SOCIAL MEDIA</h5>
								@endif
						</div>
						<ul class="social-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-vine"></i></a></li>
							<li><a href="#"><i class="fa fa-foursquare"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9 col-sm-8"><!-- Contact -->
					<div id="map" class=" pos-center margint60"><!-- Contact Maps -->
				<?php echo $contacts->iframe;?>
					</div>
					<div class="contact-form margint60"><!-- Contact Form -->
						<form action="#" method="post" id="ajax-contact-form">
						@if(app()->getLocale() == 'tr')
						<input type="text" id="cname" placeholder="Adınız" name="name" >
								@else
								<input type="text" id="cname" placeholder="Name" name="name" >
								@endif
							
								@if(app()->getLocale() == 'tr')
								<input type="text" id="csubject" placeholder="Konu" name="subject" >
								@else
								<input type="text" id="csubject" placeholder="Subject" name="subject" >
								@endif
								@if(app()->getLocale() == 'tr')
								<input type="text" id="cmail" placeholder="E-Mail" name="email" >
								@else
								<input type="text" id="cmail" placeholder="E-Mail" name="email" >
								@endif
								@if(app()->getLocale() == 'tr')
								<textarea placeholder="Bize yazın..." id="ctext" name="message"></textarea>
								@else
								<textarea placeholder="Write what do you want..." id="ctext" name="message"></textarea>
								@endif
						
								@if(app()->getLocale() == 'tr')
								<input class="pull-right margint10" type="submit" value="Gönder">
								@else
								<input class="pull-right margint10" type="submit" value="SUBMIT">
								@endif
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection
@section('css')@endsection
@section('js')@endsection