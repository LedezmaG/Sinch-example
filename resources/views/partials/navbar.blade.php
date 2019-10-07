<header class="main-header">
    <!-- Logo -->
    <a href="{{ URL::route('home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <b class="logo-mini">
            <span class="light-logo"><img src="{{ asset('images/aries-light.png') }}" alt="logo"></span>
            <span class="dark-logo"><img src="{{ asset('images/aries-dark.png') }}" alt="logo"></span>
        </b>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="{{ asset('images/logo-light-text.png') }}" alt="logo" class="light-logo">
            <img src="{{ asset('images/logo-dark-text.png') }}" alt="logo" class="dark-logo">
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <li class="my-5 notifications-menu">
                        <div class="btn btn-dark showbottom">
                            <a href="{{ url('/getbalance') }}" class=""style="color: white;">  
                                Credito ${{ $balance }}
                            </a>
                        </div>
                    </li>
                </a>

            <!-- <ul class="nav navbar-nav">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <li class="my-5 notifications-menu">
                        <div class="btn btn-dark showbottom">
                            <a href="{{ url('/getbalance') }}" style="color: white;">  
                                Mensajes @if($balance <= .64) 0 @else{{ $smsLimit }}@endif
                            </a>
                        </div>
                    </li>
                </a>
            </ul> -->
                    <!-- <li>
                        <ul class="menu inner-content-div">
                            <li>
                                <a href="#">
                                    <h6>
                                        Credito
                                        <span class="pull-right font-size-20">${{ $balance }}</span>
                                    </h6>
                                    <div class="progress xs">
                                    <div class="progress-bar progress-bar-aqua" style="width: 100%" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">30% Complete</span>
                                    </div>
                                    </div>
                                </a>
                            </li>
                        <a href="#">
                            
                        </a>
                    </li> -->
                
                <!-- <li class="search-box">
                <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
                <form class="app-search" style="display: none;">
                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                </form>
                </li> -->

                <!-- Balance -->
                <!-- <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-email"></i>
                </a>
                <ul class="dropdown-menu scale-up">
                    <li class="header">You have 5 messages</li>
                    <li> -->
                    <!-- inner menu: contains the actual data -->
                    <!-- <ul class="menu inner-content-div"> -->
                    <!-- start message -->
                    <!-- <li>
                        <a href="#">
                            <div class="pull-left">
                            <img src="{{ asset('images/user-160x160.jpg') }}" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="mail-contnet">
                            <h4>
                                Lorem Ipsum
                                <small><i class="fa fa-clock-o"></i> 15 mins</small>
                            </h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </div>
                        </a>
                        </li> -->
                        <!-- end message -->
                        <!-- <li>
                        <a href="#">
                            <div class="pull-left">
                            <img src="{{ asset('images/user-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="mail-contnet">
                            <h4>
                                Nullam tempor
                                <small><i class="fa fa-clock-o"></i> 4 hours</small>
                            </h4>
                            <span>Curabitur facilisis erat quis metus congue viverra.</span>
                            </div>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <div class="pull-left">
                            <img src="{{ asset('images/user-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="mail-contnet">
                            <h4>
                                Proin venenatis
                                <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                            </div>
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <div class="pull-left">
                            <img src="{{ asset('images/user-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="mail-contnet">
                            <h4>
                                Praesent suscipit
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                            </div>
                        </a>
                        </li> -->
                        <!-- <li>
                        <a href="#">
                            <div class="pull-left">
                            <img src="{{ asset('images/user-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                            </div>
                            <div class="mail-contnet">
                            <h4>
                                Donec tempor
                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                            </div>
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li class="footer"><a href="#">See all e-Mails</a></li>
                </ul>
                </li> -->
                
                <!-- Notifications -->
                <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                </a>    
                <ul class="dropdown-menu scale-up">
                    <li class="header">You have 7 notifications</li>
                    <li>
                    
                    <ul class="menu inner-content-div">
                        <li>
                        <a href="#">
                            <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
                </li>
                <!-- Tasks -->

                <!-- <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                </a> -->


                <!-- <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-money">  ${{ $balance }}</i>
                </a>
                <ul class="dropdown-menu scale-up">
                    <li>
                    
                    <ul class="menu inner-content-div">
                        <li>
                            <a href="#">
                                <h6>
                                    Credito
                                    <span class="pull-right font-size-20">${{ $balance }}</span>
                                </h6>
                                <div class="progress xs">
                                <div class="progress-bar progress-bar-aqua" style="width: 100%" role="progressbar"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h6>
                                    Mensajes Disponibles
                                <span class="pull-right font-size-20">@if($balance <= .64) 0 @else{{ $smsLimit }}@endif</span>
                                </h6>
                                <div class="progress xs">
                                <div class="progress-bar progress-bar-aqua" style="width: 100%" role="progressbar"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">30% Complete</span>
                                </div>2
                                </div>
                            </a>
                        </li>
                        <li class="footer text-center">
                            <h5>
                                <a href="#">Recargar credito</a>
                            </h5>
                        </li> -->
                        <!-- end task item -->
                        <!-- Task item -->
                        <!-- <li>
                        <a href="#">
                            <h3>
                            Vestibulum nec ligula
                            <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                            <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                            </div>
                            </div>
                        </a>
                        </li> -->
                        <!-- end task item -->
                        <!-- <li>
                        <a href="#">
                            <h3>
                            Donec id leo ut ipsum
                            <small class="pull-right">70%</small>
                            </h3>
                            <div class="progress xs">
                            <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">70% Complete</span>
                            </div>
                            </div>
                        </a>
                        </li> -->
                        <!-- end task item -->
                        <!-- <li>
                        <a href="#">
                            <h3>
                            Praesent vitae tellus
                            <small class="pull-right">40%</small>
                            </h3>
                            <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                            </div>
                            </div>
                        </a>
                        </li> -->
                        <!-- end task item -->
                        <!-- <li>
                        <a href="#">
                            <h3>
                            Nam varius sapien
                            <small class="pull-right">80%</small>
                            </h3>
                            <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                            </div>
                            </div>
                        </a>
                        </li> -->
                        <!-- end task item -->
                        <!-- <li>
                        <a href="#">
                            <h3>
                            Nunc fringilla
                            <small class="pull-right">90%</small>
                            </h3>
                            <div class="progress xs">
                            <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">90% Complete</span>
                            </div>
                            </div>
                        </a>
                        </li> -->
                    <!-- </ul> -->
                    <!-- </li>
                    <li class="footer">
                    <a href="#">View all tasks</a>
                    </li> -->
                <!-- </ul> -->
                </li>
                <!-- User Account -->
                <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('images/user-128x128.jpg') }}" class="user-image rounded-circle" alt="User Image">
                </a>
                <ul class="dropdown-menu scale-up">
                    <!-- User image -->
                    <li class="user-header">
                    <img src="{{ asset('images/user-128x128.jpg') }}" class="float-left rounded-circle" alt="User Image">

                    <p>
                        {{ $name }}
                        <small class="mb-5">{{ $email }}</small>
                        <a href="{{ url('/profile') }}" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                    </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                    <div class="row ">
                        <div class="col-12 text-left">
                            <a href="{{ url('/profile') }}"><i class="ion ion-person"></i> My Profile</a>
                        </div>
                        <div class="col-12 text-left">
                            <a href="{{ url('/getbalance') }}"><i class="ion ion-person"></i> My balance</a>
                        </div>
                        <div class="col-12 text-left">
                            <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                        </div>
                        <div class="col-12 text-left">
                            <a href="#"><i class="ion ion-settings"></i> Setting</a>
                        </div>
                        <div role="separator" class="divider col-12"></div>
                        <div class="col-12 text-left">
                            <a href=""><i class="ti-settings"></i> Account Setting</a>
                        </div>
                        <div role="separator" class="divider col-12"></div>
                        <div class="col-12 text-left">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                    </li>
                </ul>
                </li>
                <!-- Control Sidebar Toggle Button
                <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>