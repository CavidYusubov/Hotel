<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>

  
	<title>Duhok Suits Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{url('/')}}/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('/')}}/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('/')}}/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{url('/')}}/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
@include('Backend.include.head')

        <div class="content">
            <div class="container-fluid">
        @yield('content')
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Laluna</a>   </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{url('/')}}/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="{{url('/')}}/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{url('/')}}/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="{{url('/')}}/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{url('/')}}/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{url('/')}}/assets/js/demo.js"></script>

    @if(Session::has('error'))
    <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: " {{session('error')}}"

            },{
                type: 'danger',
                timer: 4000
            });

    	});
	</script>
           
            @elseif(Session::has('success'))
            <script type="text/javascript">
    	$(document).ready(function(){

demo.initChartist();

$.notify({
    icon: 'pe-7s-rocket',
    message: "Successfully done."

},{
    type: 'info',
    timer: 4000
});

});
	</script>
           
        @endif
        @foreach($errors->all() as $error)
 
   <script type="text/javascript">
     	$(document).ready(function(){

demo.initChartist();

$.notify({
    icon: 'pe-7s-rocket',
    message: "Something went wrong."

},{
    type: 'info',
    timer: 4000
});

});
    </script>
@endforeach
	

</html>
