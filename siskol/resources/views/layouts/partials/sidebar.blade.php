<aside class="left-sidebar">
    <ul class="nav-bar navbar-inverse hidden-xs-down">
        <li class="nav-item"><a class="nav-link navbar-toggler sidebartoggler  waves-effect waves-dark float-right"
                                href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
    </ul>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->

        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="clearfix"></li>
                <li class="">
                    @if(auth()->check() && auth()->user()->isAdmin() == true)
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="flaticon-desktop-computer-screen-with-rising-graph"></i><span
                                    class="hide-menu">Dashboard</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('/')}}" class="">Server</a></li>
                            <li><a href="{{url('project')}}" class="">Project</a></li>
                            <li><a href="{{url('analytics')}}" class="">Analytics</a></li>
                            <li><a href="{{url('shop')}}" class="">Shop</a></li>
                        </ul>
                          <li><a href="{{url('calendar')}}" class=""><i class="flaticon-calendar"></i><span class="hide-menu">Calendar</span></a>
                    </li>
                    @else
                        <a href="{{url('dashboard')}}"><i
                                    class="flaticon-desktop-computer-screen-with-rising-graph"></i><span
                                    class="hide-menu">Dashboard</span>
                            <hr>
                             <li><a href="{{url('calendar')}}" class=""><i class="flaticon-calendar"></i><span class="hide-menu">Calendar</span></a>
                             </li>
                        <li><a href="{{url('kategori')}}"><i class="fas fa-archive"></i><span class="hide-menu">Kategori</span></a>
                        </li>
                        <li><a href="{{url('barang')}}"><i class="fas fa-boxes"></i><span class="hide-menu">Data Barang</span></a>
                          </li>
                       
                    @endif


                </li>
                @if(auth()->check() && auth()->user()->isAdmin() == true)
                    <li class=""><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Pengguna</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('users')}}" class="">Atur Pengguna</a></li>
                            <li><a href="{{url('user/create')}}" class="">Tambah Pengguna</a></li>
                            <li><a href="{{url('user/deleted')}}" class="">Pengguna Terhapus</a></li>
                        </ul>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li><a href="{{url('kategori')}}"><i class="fas fa-archive"></i><span class="hide-menu">Kategori</span></a>
                     </li>
                    <li><a href="{{url('barang')}}"><i class="fas fa-boxes"></i><span class="hide-menu">Data Barang</span></a>
                    </li>
                    <li class=""><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-eye"></i><span class="hide-menu">Logs</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('log-viewer')}}" class="">Laravel Logs</a></li>
                            <li><a href="{{url('activity-log')}}" class="">Activity Logs</a></li>
                        </ul>
                    </li>
                @endif
                    <li>
                        <hr>
                    </li>
                <li><a href="{{url('account-settings')}}"><i class="fa fa-cog"></i><span class="hide-menu">Pengaturan Akun</span></a>
                </li>

                <!-- @if(auth()->user()->isAdmin() == true)

                    <!-- <li>
                        <hr>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="flaticon-restaurant"></i><span class="hide-menu">Ecommerce</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('ecommerce-dashboard')}}">Dashboard</a></li>
                            <li><a href="{{url('ecommerce-product-list')}}">Product List</a></li>
                            <li><a href="{{url('ecommerce-add-new')}}">Add new product</a></li>
                            <li><a href="{{url('ecommerce-order-list')}}">Order List</a></li>
                            <li><a href="{{url('ecommerce-order-page')}}">Order Page</a></li>
                            <li><a href="{{url('ecommerce-invoice')}}">Invoice</a></li>
                            <li><a href="{{url('ecommerce-customers')}}">Customers</a></li>
                        </ul>
                    </li>

                    <li><a href="{{url('mail')}}"><i class="flaticon-mail"></i><span class="hide-menu">Mail</span></a>
                    </li>
                    <li><a href="{{url('chat')}}"><i class="flaticon-speech"></i><span class="hide-menu">Chat</span></a>
                    </li>
                    <li><a href="{{url('to-do')}}"><i class="flaticon-forms"></i><span
                                    class="hide-menu">To Do</span></a>
                    </li>
                    <li><a href="{{url('change-log')}}"><i class="flaticon-file"></i><span
                                    class="hide-menu">Change Log</span></a></li>
                    <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="flaticon-switch"></i><span class="hide-menu">UI Elements</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('ui-profile')}}">Profile</a></li>
                            <li><a href="{{url('ui-typography')}}">Typography</a></li>
                            <li><a href="{{url('ui-buttons')}}">Buttons</a></li>
                            <li><a href="{{url('ui-forms')}}">Forms</a></li>
                            <li><a href="{{url('ui-icons')}}">Icons</a></li>
                            <li><a href="{{url('ui-components')}}">Components</a></li>
                            <li><a href="{{url('ui-cards')}}">Cards</a></li>
                            <li><a href="{{url('ui-pricing-tables')}}">Pricing tables</a></li>
                            <li><a href="{{url('ui-timeline')}}">Timeline</a></li>
                            <li><a href="{{url('ui-charts')}}">Charts</a></li>
                            <li><a href="{{url('ui-tables')}}">Tables</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fab fa-buromobelexperte"></i><span class="hide-menu">Pages</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('login-page')}}">Login Page</a></li>
                            <li><a href="{{url('register-page')}}">Register Page</a></li>
                            <li><a href="{{url('403')}}">403 Page</a></li>
                            <li><a href="{{url('404')}}">404 Page</a></li>
                            <li><a href="{{url('405')}}">405 Page</a></li>
                            <li><a href="{{url('500')}}">500 Page</a></li>
                        </ul>
                    </li>
                @endif --> 
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>