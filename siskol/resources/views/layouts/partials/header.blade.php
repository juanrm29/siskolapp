<header class="topbar">
    <div Class="container">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header"><a class="navbar-brand" href="{{url('/')}}">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('assets/imgs/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="{{asset('assets/imgs/logo-light-icon.png')}}" alt="homepage" class="light-logo"/> </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
          <!-- dark Logo text -->
          <img src="{{asset('assets/imgs/logo-text.png')}}" alt="homepage" class="dark-logo dark-logo2"/>
                        <!-- Light Logo text -->
          <img src="{{asset('assets/imgs/logo-light-text.png')}}" class="light-logo" alt="homepage"/></span> </a></div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="top-bar-main">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <div class="float-left">
                    <ul class="navbar-nav">
                        <li class="nav-item "><a
                                    class="nav-link navbar-toggler sidebartoggler waves-effect waves-dark float-right"
                                    href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down app-search">
                            <input type="text" class="form-control float-left" placeholder="Type for search...">
                        </li>
                    </ul>
                </div>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                @if(auth()->check())

                    <div class="float-right pr-3">
                        <ul class="navbar-nav my-lg-0 float-right">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark"
                                                             href="" data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false"> <i class="mdi mdi-bell"></i>
                                    <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have <span class="highlighted">3 new</span>
                                                Notifications
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"><i class="fas fa-envelope"></i> 2 new
                                                        messages
                                                        <span class="float-right text-light">15:07</span></div>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"><i class="fas fa-comment"></i> 1 new
                                                        comment
                                                        <span class="float-right text-light">11.08.2018</span></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"><i class="fas fa-calendar-alt"></i> 2
                                                        Events
                                                        Soon <span class="float-right text-light">10.08.2018</span>
                                                    </div>
                                                </a></div>
                                        </li>
                                        <li><a class="nav-link text-center" href="javascript:void(0);">See all
                                                notifications </a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark"
                                                             href="" id="2" data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false"> <i class="mdi mdi-message"></i>
                                    <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                                </a>
                                <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn"
                                     aria-labelledby="2">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have <span class="highlighted">7 new</span>
                                                messages
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><img
                                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                alt="user" class="img-circle"> <span
                                                                class="profile-status online pull-right"></span></div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Amanda Robertson</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                        </div>
                                                        <span class="float-right text-light text-right">11:18 <span
                                                                    class="clearfix"></span> <span
                                                                    class="label label-rounded label-primary">1</span> </span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><img
                                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                alt="user" class="img-circle"> <span
                                                                class="profile-status online pull-right"></span></div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Danny Donavan</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                        </div>
                                                        <div class="float-right text-light text-right">09.07.2018 <span
                                                                    class="clearfix"></span> <span
                                                                    class="label label-rounded label-primary">2</span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><img
                                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                alt="user" class="img-circle"> <span
                                                                class="profile-status online pull-right"></span></div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Frank Hendrics</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                        </div>
                                                        <div class="float-right text-light text-right">10.08.2018 <span
                                                                    class="clearfix"></span> <span
                                                                    class="label label-rounded label-primary">4</span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></div>
                                        </li>
                                        <li><a class="nav-link text-center" href="javascript:void(0);">See all
                                                notifications </a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- End mega menu -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->

                            <li class="nav-item dropdown u-pro">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(auth()->check())
                                        @if(auth()->user()->profile->pic == null)
                                            <img src="{{asset('storage/uploads/users/no_avatar.jpg')}}" alt="user-img"
                                            >
                                        @else
                                            <img src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                                 alt="user-img">
                                        @endif
                                    @endif

                                    <span class="circle-status"></span></a>
                                <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                    <ul class="dropdown-user">
                                        <li class="text-center">
                                            <div class="dw-user-box">
                                                <div class="u-img">

                                                    @if(auth()->user()->profile->pic == null)
                                                        <img src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                                             alt="user-img"
                                                        >
                                                    @else
                                                        <img src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                                             alt="user-img">
                                                    @endif


                                                    <div class="clearfix"></div>
                                                    <div class="u-text">
                                                        <h4>{{auth()->user()->name}}</h4>
                                                        <p class="text-light"><span
                                                                    class="status-circle bg-success"></span>online
                                                            <i class="fas fa-chevron-down small"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><span class="status-circle bg-success"></span> online</a></li>
                                        <li><a href="#"><span class="status-circle bg-warning"></span> away</a></li>
                                        <li><a href="#"><span class="status-circle bg-danger"></span> not disturb</a>
                                        </li>
                                        <li><a href="#"><span class="status-circle bg-light"></span> offline</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fas fa-user mr-1"></i> My Profile</a></li>
                                        <li><a href="{{url('account-settings')}}"><i class="fas fa-cog mr-1"></i>
                                                Settings</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="{{url('logout')}}"><i class="fas fa-sign-in-alt mr-1"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                            </li>

                        </ul>
                    </div>
                @else

                    <div class="float-right pr-3">
                        <ul class="navbar-nav my-lg-0 float-right">
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('login')}}"><i class="fa fa-user"></i> Login</a>
                            </li>

                        </ul>
                    </div>
                @endif

                <div class="clearfix"></div>
            </div>
        </nav>
    </div>
</header>
