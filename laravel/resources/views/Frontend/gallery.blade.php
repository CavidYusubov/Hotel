@extends('Frontend.layout')
@section('content')
<div class="breadcrumb breadcrumb-1 pos-center">
	
@if(app()->getLocale() == 'tr')
							<h1>{{$gallery_page->title_tr}}</h1>
								@else
								<h1>{{$gallery_page->title_en}}</h1>
								@endif
	</div>
	<div class="content"><!-- Gallery Section -->
		<div class="container">
			<div class="row">	
				
			@foreach($galleries as $gallery)
									
									
				<div class="col-lg-4 col-sm-6 gallery-box">
					<a href="{{$gallery->image}}" rel="prettyPhoto[pp_gal]"><img alt="Gallery" class="img-responsive" src="{{$gallery->image}}"></a>
					
					<a href="{{$gallery->image}}" rel="prettyPhoto[pp_gal]"><h5>{{$gallery->title_en}}</h5></a>
				
				</div>	
				@endforeach
			</div>
		</div>
	</div>
    @endsection
@section('css')@endsection
@section('js')@endsection