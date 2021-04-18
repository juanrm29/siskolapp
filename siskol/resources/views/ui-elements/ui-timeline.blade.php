@extends('layouts.app')

@push('before-css')
    <!-- Page CSS -->
    <link href="{{asset('assets/css/pages/timeline-vertical-horizontal.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/pages/custom-pills.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- box -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title  pull-left text-uppercase m-b-25">Basic Timeline</h4>
                        <ul class="nav nav-pills custom-pills pull-right m-t-0 m-b-30">
                            <li class=" nav-item"><a href="#navpills-11" class="nav-link active" data-toggle="tab"
                                                     aria-expanded="false">Last Week</a></li>
                            <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab"
                                                    aria-expanded="false">Last Month</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="flaticon-calendar mr-3"></i></a>
                            </li>
                            <li class="nav-item"><a href="#navpills-3" class="nav-link btn bg-primary text-white"
                                                    data-toggle="tab" aria-expanded="true">Print</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="tab-content br-n pn">
                            <div id="navpills-11" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="card-subtitle m-b-40"> Use the classes <code>btn btn-default,
                                                btn-default, btn-default</code> to quickly create different kinds of
                                            buttons. Use the classes <code>btn btn-default</code>. </h6>
                                        <div class="timeline-centered">
                                            <h6 class="text-primary m-b-20">Monday, 26.06.2017</h6>
                                            <article class="timeline-entry">
                                                <div class="timeline-entry-inner">
                                                    <div class="time-line-time">15:07</div>
                                                    <div class="timeline-icon"><i class="entypo-feather"></i></div>
                                                    <div class="timeline-label p-b-0">
                                                        <div class="members-projects inline-block">
                                                            <ul class="members-list pull-left m-r-15">
                                                                <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                         alt="user" class="img-circle"></li>
                                                            </ul>
                                                            <h2 class="m-t-10"><a href="#">Danny Donovan</a> <span>finished 5 tasks</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="timeline-entry">
                                                <div class="timeline-entry-inner">
                                                    <div class="time-line-time">15:07</div>
                                                    <div class="timeline-icon"><i class="entypo-feather"></i></div>
                                                    <div class="timeline-label p-b-0">
                                                        <div class="members-projects inline-block">
                                                            <ul class="members-list pull-left m-r-15">
                                                                <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                         alt="user" class="img-circle"></li>
                                                            </ul>
                                                            <h2 class="m-t-10"><a href="#">Amanda Robertson</a> <span>finished 5 tasks</span>
                                                            </h2>
                                                        </div>
                                                        <div class="timeline-content">
                                                            <div class="members-projects inline-block m-b-10">
                                                                <ul class="members-list pull-left m-r-15">
                                                                    <li>
                                                                        <img src="{{asset('assets/imgs/projects/ecommerce.png')}}"
                                                                             alt="user"></li>
                                                                </ul>
                                                                <h2 class="m-t-10"><a href="#">Amanda Robertson</a>
                                                                    <span>finished 5 tasks</span></h2>
                                                                <a href="#"
                                                                   class="btn btn-rounded btn-outline-primary waves-effect waves-light btn-outline-default  pull-right">Details</a>
                                                            </div>
                                                            <div class="members-projects inline-block">
                                                                <ul class="members-list pull-left m-r-15">
                                                                    <li>
                                                                        <img src="{{asset('assets/imgs/projects/ecommerce.png')}}"
                                                                             alt="user"></li>
                                                                </ul>
                                                                <h2 class="m-t-10"><a href="#">Amanda Robertson</a>
                                                                    <span>finished 5 tasks</span></h2>
                                                                <a href="#"
                                                                   class="btn btn-rounded btn-outline-primary waves-effect waves-light btn-outline-default  pull-right">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="timeline-entry">
                                                <div class="timeline-entry-inner">
                                                    <div class="time-line-time">15:07</div>
                                                    <div class="timeline-icon"><i class="entypo-feather"></i></div>
                                                    <div class="timeline-label p-b-0">
                                                        <div class="members-projects inline-block">
                                                            <ul class="members-list pull-left m-r-15">
                                                                <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                         alt="user" class="img-circle"></li>
                                                            </ul>
                                                            <h2 class="m-t-10"><a href="#">Danny Donovan</a> <span>finished 5 tasks</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="timeline-entry">
                                                <div class="timeline-entry-inner">
                                                    <div class="time-line-time">15:07</div>
                                                    <div class="timeline-icon"><i class="entypo-feather"></i></div>
                                                    <div class="timeline-label p-b-0">
                                                        <div class="members-projects inline-block">
                                                            <ul class="members-list pull-left m-r-15">
                                                                <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                         alt="user" class="img-circle"></li>
                                                            </ul>
                                                            <h2 class="m-t-10"><a href="#">Danny Donovan</a> <span>finished 5 tasks</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="card-subtitle m-b-40">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title  pull-left text-uppercase m-b-25">General timeline</h4>
                        <ul class="nav nav-pills custom-pills pull-right m-t-0 m-b-30">
                            <li class=" nav-item"><a href="#navpills-1" class="nav-link active" data-toggle="tab"
                                                     aria-expanded="false">Last Week</a></li>
                            <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab"
                                                    aria-expanded="false">Last Month</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Last year</a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="flaticon-calendar mr-3"></i></a>
                            </li>
                            <li class="nav-item"><a href="#navpills-3" class="nav-link btn bg-primary text-white"
                                                    data-toggle="tab" aria-expanded="true">Print</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="tab-content br-n pn">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="card-subtitle m-b-40">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                                        <div class="timeline-centered timeline-centered2">
                                            <article class="timeline-entry">
                                                <div class="timeline-entry-inner">
                                                    <div class="time-line-time">15 Jun
                                                        2017, 14:08
                                                    </div>
                                                    <div class="timeline-icon"><i class="entypo-feather"></i></div>
                                                    <div class="timeline-label label2 p-b-0">
                                                        <div class="members-projects inline-block">
                                                            <ul class="members-list pull-left m-r-15">
                                                                <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                         alt="user" class="img-circle"></li>
                                                            </ul>
                                                            <h2 class="m-t-10"><a href="#">Project “Aquarium” was
                                                                    created</a></h2>
                                                            <div class="clearfix"></div>
                                                            <div class="pb-4">
                                                                <p class="font-14">In developing countries, governments
                                                                    control many sectors of the economy. Industries,
                                                                    banks and the energy sector often belong to the
                                                                    state. Today, some countries are slowly opening up
                                                                    to foreign investment.</p>
                                                                <div class="clearfix"></div>
                                                                <div class="mt-3"><a href="#"
                                                                                     class="btn btn-rounded btn-outline-primary waves-effect waves-light btn-outline-default">Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="timeline-entry">
                                                <div class="timeline-entry-inner">
                                                    <div class="time-line-time">15 Jun 2017, 14:08</div>
                                                    <div class="timeline-icon"><i class="entypo-feather"></i></div>
                                                    <div class="timeline-label label2 p-b-0">
                                                        <div class="members-projects inline-block">
                                                            <ul class="members-list pull-left m-r-15">
                                                                <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                                         alt="user" class="img-circle"></li>
                                                            </ul>
                                                            <h2 class="m-t-10"><a href="#">Amanda Robertson</a> <span>finished 5 tasks</span>
                                                            </h2>
                                                            <div class="clearfix"></div>
                                                            <div class="pb-4">
                                                                <p class="font-14">In developing countries, governments
                                                                    control many sectors of the economy. Industries,
                                                                    banks and the energy sector often belong to the
                                                                    state.</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="timeline-content">
                                                                <div class="members-projects inline-block m-b-10">
                                                                    <ul class="members-list pull-left m-r-15">
                                                                        <li>
                                                                            <img src="{{asset('assets/imgs/projects/ecommerce.png')}}"
                                                                                 alt="user"></li>
                                                                    </ul>
                                                                    <h2 class="m-t-10"><a href="#">Amanda Robertson</a>
                                                                        <span>finished 5 tasks</span></h2>
                                                                    <div class="clearfix"></div>
                                                                    <div class="pb-4">
                                                                        <p class="font-14">In developing countries,
                                                                            governments control many sectors of the
                                                                            economy. Industries, banks and the energy
                                                                            sector often belong to the state. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End box -->
        </div>
        @include('layouts.partials.footer')
    </div>
@endsection

@push('js')
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Style switcher -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush