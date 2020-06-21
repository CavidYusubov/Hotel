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
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit About us Page content</h4>
                            </div>
                            <div class="header" 
                            style="background-image:url('{{url('/')}}/{{$about->title_background_image}}');
                                height: 132px;
   text-align:center;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: inherit;
    background-size: cover;
                            
                            ">
                                <h4 class="title" style="background-color: #ffffff8c;">About us Head image</h4>
                                <form method="post" action="{{route('about.update_head_image')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="head_image" class="form-control" >
                               <input type="hidden" name="old_image" value="{{$about->title_background_image}}">
                               <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                </form>
                            </div>
                            <div class="content">
                                <form method="post" action="{{route('about.update')}}">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <img src="{{url('/')}}/temp/english.png" alt="" class="src"></label>
                                                <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$about->title_en}}" name="title_en">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <img src="{{url('/')}}/img/tr.svg" alt="" class="src"></label>
                                                <input type="text" class="form-control" placeholder="Title in Turkish" value="{{$about->title_tr}}" name="title_tr">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text <img src="{{url('/')}}/temp/english.png" alt="" class="src"></label>
                                                <textarea id="editor1" class="form-control"  name="text_en">{{$about->text_en}}</textarea>
                                                <script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label>Text <img src="{{url('/')}}/img/tr.svg" alt="" class="src"></label>
                                                <textarea id="editor2" class="form-control"  name="text_tr">{{$about->text_tr}}</textarea>
                                         
                                                <script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ), {
      

        // Configure the endpoint. See the "Configuration" section above.
        cloudServices: {
           
            uploadUrl: '{{url("/")}}/temp/'
        }
    } )
        .catch( error => {
            console.error( error );
        } );
        
</script>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                    <div class="clearfix"></div>
                                </form>
                                <form method="post" action="{{route('about.update_images')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                    <div class="col-md-12">

                                    <div class="about-services margint60 clearfix"><!-- About Services -->
					@php  $s=1;$g=1; @endphp
                    @foreach($about_images as $about_image)
					<div class="col-lg-4 col-sm-6">
						<img alt="About Services" class="img-responsive" src="{{url('/')}}/{{$about_image->image}}">
                        <input type="hidden" name="old_image{{$g++}}" value="{{$about_image->image}}">
                        Add new Image<input type="file" class="form-control" name="image{{$s++}}">
						<br><img src="{{url('/')}}/temp/english.png" alt="" class="src"> <input type="text" value="{{$about_image->title_en}}" name="title_en{{$s++}}" class="form-control">
                        <br><img src="{{url('/')}}/img/tr.svg" alt="" class="src"> <input type="text" value="{{$about_image->title_tr}}" name="title_tr{{$s++}}"  class="form-control">
						<img src="{{url('/')}}/temp/english.png" alt="" class="src"><textarea class="form-control" name="text_en{{$s++}}"  rows="6" cols="50">{{$about_image->text_en}}</textarea>
                        <img src="{{url('/')}}/img/tr.svg" alt="" class="src"><textarea class="form-control"  rows="6" cols="50" name="text_tr{{$s++}}">{{$about_image->text_tr}}</textarea>
                    </div>
                @endforeach
				</div>
                                        </div>
                                    </div>
                                   


                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                        <div class="header">
                                <h4 class="title">About us Slider</h4>
                            </div>
                        <div class="slideshow-container">
@foreach($about_slider as $about_slide)
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
                @foreach($about_slider as $about_slide)
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
                            <form method="post" action="{{route('about.update_slider_image')}}" enctype="multipart/form-data">
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