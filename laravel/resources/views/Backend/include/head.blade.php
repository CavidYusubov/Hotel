
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{url('/')}}/assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                Duhok Taksim Suits
                </a>
            </div>

            <ul class="nav">
                <li class="{{ request()->is('HotelAdmin/dashboard*') ? 'active' : '' }}" >
                    <a href="{{url('HotelAdmin/dashboard')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            
                <li class="{{ request()->is('HotelAdmin/about*') ? 'active' : '' }}">
                    <a href="{{url('HotelAdmin/about')}}">
                        <i class="pe-7s-note2"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="{{ request()->is('HotelAdmin/rooms*') ? 'active' : '' }}">
                    <a href="{{url('HotelAdmin/rooms')}}">
                        <i class="pe-7s-key"></i>
                        <p>Rooms</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-cash"></i>
                        <p>Reservations</p>
                    </a>
                </li>
                <li class="{{ request()->is('HotelAdmin/gallery*') ? 'active' : '' }}">
                    <a href="{{url('HotelAdmin/gallery')}}">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class="{{ request()->is('HotelAdmin/contact*') ? 'active' : '' }}">
                    <a href="{{url('HotelAdmin/contact')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
				<li class="{{ request()->is('HotelAdmin/settings*') ? 'active' : '' }}">
                    <a href="{{url('HotelAdmin/settings')}}">
                        <i class="pe-7s-config"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <!-- <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li> -->
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <!-- <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li> -->
                              </ul>
                        </li>
                        <li>
                            <a href="{{url('HotelAdmin/logout')}}">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
  