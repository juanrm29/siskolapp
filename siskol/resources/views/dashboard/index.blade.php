@extends('layouts.app')

@push('before-css')
    <!-- chartist CSS -->
    <link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Dashboard server Page CSS -->
    <link href="{{asset('assets/css/pages/dashboard-server.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex pt-3 pb-2 no-block">
                            <div class="align-self-center mr-3 knob-icon">
                                <input class="dial"  data-plugin="knob" data-width="70" data-height="70"  data-linecap="round" data-fgColor="#f95476" data-thickness=".2" value="85" />
                                <i class="flaticon-tool text-pink"></i> </div>
                            <div class="align-slef-center mr-auto">
                                <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Storage</h2>
                                <h6 class="text-light m-b-0">Used <strong>315 Gb</strong> / Free <strong>25 Gb</strong></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex pt-3 pb-2 no-block">
                            <div class="align-self-center mr-3 knob-icon knob-icon-2">
                                <input  class="dial"  data-plugin="knob" data-width="70" data-height="70"  data-linecap="round" data-fgColor="#4886ff " data-thickness=".2" value="40" />
                                <i class="flaticon-tool-2 font-25 text-primary"></i> </div>
                            <div class="align-slef-center mr-auto">
                                <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Bandwidth</h2>
                                <h6 class="text-light m-b-0">100 mb/s</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex pt-3 pb-2 no-block">
                            <div class="align-self-center mr-3 knob-icon knob-icon-2">
                                <input class="dial"   data-plugin="knob" data-width="70" data-height="70"  data-linecap="round" data-fgColor="#ffb74e" data-thickness=".2" value="89" />
                                <i class="flaticon-reload font-25 text-warning"></i> </div>
                            <div class="align-slef-center mr-auto">
                                <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Cluster Load</h2>
                                <h6 class="text-light m-b-0">89%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End Info box -->
        <!-- chart box one -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-md-12">
                <div class="card panel-main o-income panel-refresh">
                    <div class="refresh-container">
                        <div class="preloader">
                            <div class="loader">
                                <div class="loader__figure"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body panel-wrapper">
                        <div class="d-flex m-b-10 no-block">
                            <h5 class="card-title m-b-0 align-self-center">Memory usage</h5>
                            <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                        </div>
                        <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-12">
                            <li><i class="fa fa-square m-r-5 text-warning"></i> Total</li>
                            <li><i class="fa fa-square m-r-5 text-pink"></i> Used</li>
                            <li><i class="fa fa-square m-r-5 text-primary"></i> Free</li>
                        </ul>
                        <div id="memory_usage" style="height:260px; width:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body p-b-30">
                        <div class="d-flex pt-3 p-b-20 no-block">
                            <div class="align-self-center mr-3">
                                <div id="sparkline14"></div>
                            </div>
                            <div class="align-self-center mr-auto">
                                <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Processes</h2>
                                <h6 class="text-light m-b-0">1,590</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-b-30">
                        <div class="p-t-20">
                            <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5  float-left">Latency</h2>
                            <h6 class="m-b-0 float-right text-primary">2.3 ms</h6>
                            <div class="clearfix"></div>
                            <div id="sparkline12" class="text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End chart box one -->
        <!-- chart box two -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex m-b-10 no-block">
                            <h5 class="card-title m-b-0 align-self-center">Average CPU usage</h5>
                        </div>
                        <div id="extra-area-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End chart box two -->
        <!-- chart box three -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                <div class="card  o-income">
                    <div class="card-body">
                        <div class="row no-margin">
                            <div class="col-lg-8 col-md-12">
                                <div class="d-flex panel-main m-b-10 no-block  panel-refresh">
                                    <div class="refresh-container">
                                        <div class="preloader">
                                            <div class="loader">
                                                <div class="loader__figure"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title m-b-0 align-self-center">CPU productivity</h5>
                                    <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                                </div>
                                <ul class="list-inline m-b-10 text-uppercase lp-5 font-medium font-12">
                                    <li><i class="fa fa-square m-r-5 text-warning"></i> CPU</li>
                                    <li><i class="fa fa-square m-r-5 text-pink"></i> Memory</li>
                                    <li><i class="fa fa-square m-r-5 text-primary"></i> Disc (C: D:)</li>
                                </ul>
                                <div id="morris-area-chart"></div>
                            </div>
                            <div class="col-lg-4 col-md-12" >
                                <div class="panel-main pl-5 m-b-10 no-block  panel-refresh bordered-left-light bordered-css">
                                    <div class="refresh-container">
                                        <div class="preloader">
                                            <div class="loader">
                                                <div class="loader__figure"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title m-b-0 align-self-center">CPU</h5>
                                    <div class="block m-t-10 m-b-40">
                                        <div class="cpu-div-left"> <span class="block font-25 text-pink">10%</span> Using </div>
                                        <div class="cpu-div-right pl-4"> <span class="block font-25 text-primary">2.98 GHz</span> Speed </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr>
                                    <h5 class="card-title m-t-30 m-b-0 align-self-center">Memory</h5>
                                    <div class="block m-t-10 m-b-40">
                                        <div class="cpu-div-left"> <span class="block font-25 text-pink">4.4 Gb</span> Using </div>
                                        <div class="cpu-div-right pl-4"> <span class="block font-25 text-primary">3.6 Gb GHz</span> Available </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr>
                                    <h5 class="card-title m-t-30  m-b-0 align-self-center">Disc (C: D:)</h5>
                                    <div class="block m-t-10 m-b-30">
                                        <div class="cpu-div-left"> <span class="block font-25 text-pink">12%</span> Activity time </div>
                                        <div class="cpu-div-right pl-4"> <span class="block font-25 text-primary">27.5 ms</span> Response time </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End chart box three -->
        <!-- table box one -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-md-12">
                <div class="card panel-main o-income panel-refresh">
                    <div class="refresh-container">
                        <div class="preloader">
                            <div class="loader">
                                <div class="loader__figure"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body panel-wrapper">
                        <div class="d-flex m-b-10 no-block">
                            <h5 class="card-title m-b-0 align-self-center">Process explorer</h5>
                            <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                        </div>
                        <div class="row scrollbox">
                            <div class="col-lg-12 " id="slimtest1" style="height:477px;">
                                <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Process Name</th>
                                            <th>User</th>
                                            <th>Avg. CPU</th>
                                            <th>Avg. Mem.</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Database Backup</td>
                                            <td>Alice Brodwain</td>
                                            <td>14%</td>
                                            <td>161 mb</td>
                                            <td> 1                          </tr>
                                        <tr>
                                            <td>Form creating in task mana...</td>
                                            <td>Accountant</td>
                                            <td>4%</td>
                                            <td>63 mb</td>
                                            <td><a href="#"><i class="fas fa-trash-alt text-danger op-5"></i></a>                          </tr>
                                        <tr>
                                            <td>Add new products in shop</td>
                                            <td>Donald Frankson</td>
                                            <td>5%</td>
                                            <td>22 mb</td>
                                            <td> 1                          </tr>
                                        <tr>
                                            <td>Form creating in task mana...</td>
                                            <td>Robert Downing</td>
                                            <td>4%</td>
                                            <td>159 mb</td>
                                            <td> 1                          </tr>
                                        <tr>
                                            <td>Database backup</td>
                                            <td>Donald Frankson</td>
                                            <td>11%</td>
                                            <td>61 mb</td>
                                            <td> 1                          </tr>
                                        <tr>
                                            <td>Add new products in shop</td>
                                            <td>Alice Brodwain</td>
                                            <td>13%</td>
                                            <td>23 mb</td>
                                            <td> 1                          </tr>
                                        <tr>
                                            <td>Add new products in shop</td>
                                            <td>Alice Brodwain</td>
                                            <td>13%</td>
                                            <td>23 mb</td>
                                            <td> 1                          </tr>
                                        <tr>
                                            <td>Add new products in shop</td>
                                            <td>Alice Brodwain</td>
                                            <td>13%</td>
                                            <td>23 mb</td>
                                            <td> 1                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card panel-main random-data o-income panel-refresh">
                    <div class="refresh-container">
                        <div class="preloader">
                            <div class="loader">
                                <div class="loader__figure"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-10 panel-wrapper">
                        <div class="d-flex m-t-10 p-l-10 m-b-10 no-block">
                            <h5 class="card-title m-b-0 align-self-center">I/O Activity</h5>
                            <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh m-r-15"> <i class="fas fa-sync"></i> Update </a> </div>
                        </div>
                        <div class="table-wrapper bookmarking">
                            <div class="bookmarking-main"> <span><i class="fas fa-circle text-primary"></i>Input</span> <span><i class="fas fa-circle text-warning"></i>Output</span> </div>
                            <div class="scrollbox">
                                <div id="slimtest2" style="height:480px;">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-5">
                                            <tbody>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-primary"></i>Database backup</span></td>
                                                <td>Beavis</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-warning"></i>Form creating in task...</span></td>
                                                <td>Felix</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-warning"></i>Add new products in...</span></td>
                                                <td>Neosoft</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-warning"></i>Form creating in task...</span></td>
                                                <td>Felix</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-primary"></i>Form creating in task...</span></td>
                                                <td>Cannibus</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-warning"></i>Database backup</span></td>
                                                <td>Beavis</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-primary"></i>Form creating in task...</span></td>
                                                <td>Felix</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-primary"></i>Creating form statistics</span></td>
                                                <td>Cannibus</td>
                                            </tr>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><i class="fas fa-circle text-warning"></i>Add new products in...</span></td>
                                                <td>Neosoft</td>
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
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End table box one -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    @include('layouts.partials.footer')
    </div>
@endsection

@push('js')
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--c3 JavaScript -->
    <script src="{{asset('plugins/vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/c3-master/c3.min.js')}}"></script>
    <!--jquery knob -->
    <script src="{{asset('plugins/vendors/knob/jquery.knob.js')}}"></script>
    <!--Sparkline JavaScript -->
    <script src="{{asset('plugins/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{asset('plugins/vendors/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('plugins/vendors/morrisjs/morris.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Dashboard JS -->
    <script src="{{asset('assets/js/dashboard-server.js')}}"></script>
    <script src="{{asset('assets/js/random-class.js')}}"></script>


    <script>
        $(".dial").knob();

        $({animatedVal: 0}).animate({animatedVal: 80}, {
            duration: 2000,
            easing: "swing",
            step: function() {
                $(".dial").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });
    </script>
@endpush