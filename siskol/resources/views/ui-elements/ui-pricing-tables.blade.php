@extends('layouts.app')

@push('before-css')
    <!-- Page CSS -->
    <link href="{{asset('assets/css/pages/pricing-page.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- box -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="card-title text-uppercase m-b-15">Basic price plans</h4>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card ">
                    <div class="card-body p-0">
                        <div class="pricing-box">
                            <div class="pricing-body b-l">
                                <div class="pricing-header">
                                    <h4 class="text-center">Basic</h4>
                                    <h5 class="text-center">Individual</h5>
                                    <div class="price-main">
                                        <h2 class="text-center"><span class="price-sign">$</span>24<span class="small">/mo</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="price-table-content">
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 256 GB Memory
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 10 Mb/s Internet
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 5 Domains</div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 24/7 Support
                                    </div>
                                    <div class="price-row disabled"><i class="mdi mdi-close-circle-outline"></i> Storage
                                        protection
                                    </div>
                                    <div class="price-row disabled"><i class="mdi mdi-close-circle-outline"></i> Server
                                        access
                                    </div>
                                    <div class="price-row disabled"><i class="mdi mdi-close-circle-outline"></i>
                                        Extensive settings
                                    </div>
                                    <div class="price-row m-t-20 text-center b-t-1">
                                        <button class="btn waves-effect waves-light btn-rounded btn-primary">Purchase
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card ">
                    <div class="card-body p-0">
                        <div class="pricing-box">
                            <div class="pricing-body b-l">
                                <div class="pricing-header">
                                    <h4 class="text-center">Premium</h4>
                                    <h5 class="text-center">Business</h5>
                                    <div class="price-main">
                                        <h2 class="text-center"><span class="price-sign">$</span>60<span class="small">/mo</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="price-table-content">
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 512 GB Memory
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 100 Mb/s
                                        Internet
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 10 Domains</div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 24/7 Support
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Storage
                                        protection
                                    </div>
                                    <div class="price-row disabled"><i class="mdi mdi-close-circle-outline"></i> Server
                                        access
                                    </div>
                                    <div class="price-row disabled"><i class="mdi mdi-close-circle-outline"></i>
                                        Extensive settings
                                    </div>
                                    <div class="price-row m-t-20 text-center b-t-1">
                                        <button class="btn waves-effect waves-light btn-rounded btn-primary">Purchase
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card ">
                    <div class="card-body p-0">
                        <div class="pricing-box">
                            <div class="pricing-body b-l">
                                <div class="pricing-header">
                                    <h4 class="text-center">Ultimate</h4>
                                    <h5 class="text-center">Enterprise</h5>
                                    <div class="price-main">
                                        <h2 class="text-center"><span class="price-sign">$</span>90<span class="small">/mo</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="price-table-content">
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 1 TB Memory
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 1 Gb/s Internet
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 15 Domains</div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 24/7 Support
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Storage
                                        protection
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Server access
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Extensive
                                        settings
                                    </div>
                                    <div class="price-row m-t-20 text-center b-t-1">
                                        <button class="btn waves-effect waves-light btn-rounded btn-primary">Purchase
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card ">
                    <div class="card-body p-0">
                        <div class="pricing-box">
                            <div class="pricing-body b-l">
                                <div class="pricing-header">
                                    <h4 class="text-center">Platinum</h4>
                                    <h5 class="text-center">Corporation</h5>
                                    <div class="price-main">
                                        <h2 class="text-center"><span class="price-sign">$</span>150<span class="small">/mo</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="price-table-content">
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Unlimited memory
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 10 Gb/s Internet
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Unlimited
                                        Domains
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> 24/7 Support
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Storage
                                        protection
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Server access
                                    </div>
                                    <div class="price-row"><i class="mdi mdi-check-circle-outline"></i> Extensive
                                        settings
                                    </div>
                                    <div class="price-row m-t-20 text-center b-t-1">
                                        <button class="btn waves-effect waves-light btn-rounded btn-primary">Purchase
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title  pull-left text-uppercase m-b-25">Pricing Table</div>
                        <ul class="nav nav-pills nav-pills-tablet pull-right m-t-0 m-b-30">
                            <li class=" nav-item"><a href="#navpills-1" class="nav-link active" data-toggle="tab"
                                                     aria-expanded="false">month</a></li>
                            <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab"
                                                    aria-expanded="false">year</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="tab-content br-n pn">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped text-center price-table">
                                                <thead>
                                                <tr>
                                                    <th>You can purchase a price <br>
                                                        plan for a month or a year.
                                                    </th>
                                                    <th class="font-25">Basic <br>
                                                        <span class="text-center">Individual</span></th>
                                                    <th class="font-25">Premium <br>
                                                        <span class="text-center">Business</span></th>
                                                    <th class="font-25">Ultimate <br>
                                                        <span class="text-center">Enterprise</span></th>
                                                    <th class="font-25">Basic<br>
                                                        <span class="text-center">Corporation</span></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="price-main"> Price</div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>30
                                                            </h2>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>60
                                                            </h2>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>90
                                                            </h2>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>150
                                                            </h2>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Memory</td>
                                                    <td>256 GB</td>
                                                    <td>512 GB</td>
                                                    <td>1 TB</td>
                                                    <td>Unlimited</td>
                                                </tr>
                                                <tr>
                                                    <td>Internet Speed</td>
                                                    <td>10 Mb/s</td>
                                                    <td>100 Mb/s</td>
                                                    <td>1 Gb/s</td>
                                                    <td>10 Gb/s</td>
                                                </tr>
                                                <tr>
                                                    <td>Domains</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>15</td>
                                                    <td>Unlimited</td>
                                                </tr>
                                                <tr>
                                                    <td>Storage protection</td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Server access</td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Extensive settings</td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped text-center price-table">
                                                <thead>
                                                <tr>
                                                    <th>You can purchase a price<br>
                                                        plan for a month or a year.
                                                    </th>
                                                    <th class="font-25"> Basic<br>
                                                        <span class="text-center"> Individual</span></th>
                                                    <th class="font-25">Premium <br>
                                                        <span class="text-center">Business</span></th>
                                                    <th class="font-25">Ultimate <br>
                                                        <span class="text-center">Enterprise</span></th>
                                                    <th class="font-25">Basic <br>
                                                        <span class="text-center">Corporation</span></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="price-main"> Price</div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>40
                                                            </h2>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>80
                                                            </h2>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>120
                                                            </h2>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-main">
                                                            <h2 class="text-center"><span class="price-sign">$</span>180
                                                            </h2>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Memory</td>
                                                    <td>256 GB</td>
                                                    <td>512 GB</td>
                                                    <td>1 TB</td>
                                                    <td>Unlimited</td>
                                                </tr>
                                                <tr>
                                                    <td>Internet Speed</td>
                                                    <td>10 Mb/s</td>
                                                    <td>100 Mb/s</td>
                                                    <td>1 Gb/s</td>
                                                    <td>10 Gb/s</td>
                                                </tr>
                                                <tr>
                                                    <td>Domains</td>
                                                    <td>5</td>
                                                    <td>10</td>
                                                    <td>15</td>
                                                    <td>Unlimited</td>
                                                </tr>
                                                <tr>
                                                    <td>Storage protection</td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Server access</td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>Extensive settings</td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-close-circle-outline disabled"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                    <td><i class="mdi mdi-check-circle-outline"></i></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Column -->
        @include('layouts.partials.footer')

    </div>
    <!-- ============================================================== -->
    <!-- End box -->
@endsection

@push('js')
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Style switcher -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
