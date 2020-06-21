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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Contact Page content</h4>
                            </div>
                            <div class="header" 
                            style="background-image:url('{{url('/')}}/{{$contact->contact_background_image}}');
                                height: 132px;
   text-align:center;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: inherit;
    background-size: cover;
                            
                            ">
                                <h4 class="title" style="background-color: #ffffff8c;">Contact Head image</h4>
                                <form method="post" action="{{route('contact.update_head_image')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="head_image" class="form-control" >
                               <input type="hidden" name="old_image" value="{{$contact->contact_background_image}}">
                               <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                </form>
                            </div>
                            <div class="content">
                                <form method="post" action="{{route('contact.update')}}">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <img src="{{url('/')}}/temp/english.png" alt="" class="src"></label>
                                                <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$contact->title_en}}" name="title_en">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <img src="{{url('/')}}/img/tr.svg" alt="" class="src"></label>
                                                <input type="text" class="form-control" placeholder="Title in Turkish" value="{{$contact->title_tr}}" name="title_tr">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text <img src="{{url('/')}}/temp/english.png" alt="" class="src"></label>
                                                <textarea id="editor1" class="form-control"  name="text_en">{{$contact->text_en}}</textarea>
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
                                                <textarea id="editor2" class="form-control"  name="text_tr">{{$contact->text_tr}}</textarea>
                                         
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

                                        
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Location map Iframe kod</label>
                                                <textarea id="" class="form-control"  name="iframe">{{$contact->iframe}}</textarea>
                                                
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone </label>
                                                <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$contact_info->phone}}" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$contact_info->email}}" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address </label>
                                                <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$contact_info->location}}" name="location">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                    <div class="clearfix"></div>
                                </form>
                               
                            
                        </div>
                    </div>
               
                    </div>

                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">


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