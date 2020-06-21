@extends('Backend.layout')
@section('content')

<style>

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<div class="row">
                    <div class="col-md-8">
                        <div class="card" style="padding:5px">
                            <div class="header">
                                <h4 class="title">Edit Website settings </h4>
                            </div>
                            
                    
                                <form method="post" action="{{route('settings.update')}}" enctype="multipart/form-data">
                                @csrf
                              @foreach($settings as $setting)
                              @if($setting->settings_type == 'file')
                              <label> <?php echo $setting->settings_description;?> <br>
                              @if($setting->settings_key == 'logo')
                                <img src="{{url('/')}}/{{$setting->settings_value}}" alt=""style="width:50px; background-color:black;padding:5px;" class="src"></label>

                            @else
                            <img src="{{url('/')}}/{{$setting->settings_value}}" alt=""style="width:50px" class="src"></label>
                           @endif
                           <input type="hidden" name="old_{{$setting->settings_key}}" value="{{$setting->settings_value}}">
                              <input style="width:60%" type="{{$setting->settings_type}}" name="{{$setting->settings_key}}" value="{{$setting->settings_value}}" placeholder="Website {{$setting->settings_key}}" class="form-control" >
                              @else
                              <label> <?php echo $setting->settings_description;?></label>
                                <input type="{{$setting->settings_type}}" required name="{{$setting->settings_key}}" value="{{$setting->settings_value}}" placeholder="Website {{$setting->settings_key}}" class="form-control" >
                               @endif
                               @endforeach
                               <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                </form>
                            </div>
                           
                        </div>
                   
                    <div class="col-md-4">
                        <div class="card card-user">
                        <div class="header">
                                <h4 class="title">Home Slider</h4>
                            </div>
                        <div class="slideshow-container">
@foreach($settings_slider as $about_slide)
<div class="mySlides ">
  <div class="numbertext"></div>
  <img src="{{url('/')}}/{{$about_slide->image}}" style="width:100%">
 
</div>

@endforeach
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
                        <table class="table table-hover table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                    	<th>Image</th>
                                        
                                    	
                                    </tr></thead>
                                    <tbody id="sortable">
                             @php $n=1; @endphp          
                @foreach($settings_slider as $about_slide)
                <tr id="item-{{$about_slide->id}}">
                <td>{{$n++}}</td>
                <td class="sortable"> <img src="{{url('/')}}/{{$about_slide->image}}" style="width:50%"></td>
               
                <td><a href="{{url('/')}}/HotelAdmin/about/delete/{{$about_slide->id}}"><i class="pe-7s-trash" style="color:red"></i></a></td>
                </tr>
                @endforeach
                                            
                                        	
                                     
                                        <tr>
                                        </tbody></table>
                            <hr>
                            <div class="text-center">
                            <h4> Add image</h4>
                            <form method="post" action="{{route('settings.update_slider_image')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="slider_image" class="form-control" >
                   
                               <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                </form>
                                </div>
                            
                        </div>
                    </div>

                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#sortable').sortable({
                revert: true,
                handle: ".sortable",
                stop: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{route('about.Sortable')}}",
                        success: function (msg) {
                            // console.log(msg);
                            if (msg) {
                                $.notify({
            	icon: 'pe-7s-gift',
            	message: "  {{session('success')}}"

            },{
                type: 'error',
                timer: 4000
            });
                            } else {
                                $.notify({
            	icon: 'pe-7s-gift',
            	message: "  {{session('error')}}"

            },{
                type: 'error',
                timer: 4000
            });
                            }
                        }
                    });

                }
            });
            $('#sortable').disableSelection();

        });
</script>
                <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
@endsection
@section('css')@endsection
@section('js')@endsection