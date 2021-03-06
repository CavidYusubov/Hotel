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
.modal-backdrop.in {
    filter: alpha(opacity=0);
    display:none!important
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
                                <h4 class="title">Edit Gallery Page content</h4>
                            </div>
                            <div class="header" 
                            style="background-image:url('{{url('/')}}/{{$gallery_page->title_image}}');
                                height: 132px;
   text-align:center;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: inherit;
    background-size: cover;
                            
                            ">
                                <h4 class="title" style="background-color: #ffffff8c;">Gallery Head image</h4>
                                <form method="post" action="{{route('gallery.update_head_image')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="head_image" class="form-control" >
                               <input type="hidden" name="old_image" value="{{$gallery_page->title_image}}">
                               <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                </form>
                            </div>
                            <div class="content">
                                <form method="post" action="{{route('gallery.update')}}">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <img src="{{url('/')}}/temp/english.png" alt="" class="src"></label>
                                                <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$gallery_page->title_en}}" name="title_en">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title <img src="{{url('/')}}/img/tr.svg" alt="" class="src"></label>
                                                <input type="text" class="form-control" placeholder="Title in Turkish" value="{{$gallery_page->title_tr}}" name="title_tr">
                                            </div>
                                        </div>
                                        
                                    </div>

                                            </div>
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
                                    <div class="clearfix"></div>
                                </form>
              
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <button type="button" class="btn btn-info btn-lg btn-that" data-toggle="modal" data-target="#myModal">Add new gallery item</button>

                            </div>
                            <div class="content">
                            <div class="row">
                                        <div class="col-md-6">
                                      

  
<div class="container">

  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add gallery item</h4>
        </div>
        <div class="modal-body">
          <p><form method="post" action="{{route('gallery.add_gallery_image')}}"  enctype="multipart/form-data">
@csrf
                                <div class="col-md-12">
                                            <div class="form-group">
                                                <label> </label>
                                                <input type="file" name="image" class="form-control" required>
                                                <label> <img src="{{url('/')}}/img/tr.svg" alt=""  class="src"> <input type="text" class="form-control" required placeholder="Title in Enlish"  name="title_tr"></label>
                                                <label><img src="{{url('/')}}/temp/english.png" alt="" class="src"> <input type="text" class="form-control" required placeholder="Title in Enlish"  name="title_en"></label>
                                            </div>
                                        </div>
                                      
          </p>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-info btn-fill pull-right">Add </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
</div>

                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                <div class="col-md-12">
                                
                        <div class="card">
                        <div class="content">
                      
                        
<div class="row">

<form method="post" action="{{route('gallery.update_gallery_image')}}"  enctype="multipart/form-data">
                                @csrf
                                @foreach($gallery as $galler)

                                <div class="col-md-4">
                                            <div class="form-group">
                                                <label> <img src="{{url('/')}}/{{$galler->image}}" alt="{{$galler->title_en}}" width="200px"></label>
                                                <input type="file" name="image[{{$galler->id}}]" class="form-control">
                                                <label> <img src="{{url('/')}}/img/tr.svg" alt="" class="src"> <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$galler->title_tr}}" name="title_tr[{{$galler->id}}]"></label>
                                                <label><img src="{{url('/')}}/temp/english.png" alt="" class="src"> <input type="text" class="form-control" placeholder="Title in Enlish" value="{{$galler->title_en}}" name="title_en[{{$galler->id}}]"></label>
                                                <a href="{{url('/')}}/HotelAdmin/gallery/delete/{{$galler->id}}"><br><i class="pe-7s-trash" style="color:red;font-size:25px"></i></a>
                                            </div>
                                        </div>
                                        
                                    @endforeach
                                   
                                    <div class="clearfix"></div>
                                        </div>
                                        </form>
                                    </div>
                         
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update </button>
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