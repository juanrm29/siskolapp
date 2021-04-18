@extends('layouts.app')

@push('before-css')
  <!-- This page CSS -->
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
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- chart box one -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-8 col-md-6">
        <div class="card panel-main o-income panel-refresh">
          <div class="refresh-container">
            <div class="preloader">
              <div class="loader">
                <div class="loader__figure"></div>
              </div>
            </div>
          </div>
          <div class="card-body panel-wrapper">
            <div class="d-flex m-b-10 no-block wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <h5 class="card-title m-b-0 align-self-center">Bar Chart</h5>
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
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body p-b-30">
            <div class="d-flex pt-3 p-b-20 no-block">
              <div class="align-self-center mr-3">
                <div id="sparkline14"></div>
              </div>
              <div class="align-self-center mr-auto">
                <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5">Life chart</h2>
                <h6 class="text-light m-b-0">1,590</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body p-b-30">
            <div class="p-t-20">
              <h2 class="m-b-0 text-uppercase font-18 font-medium lp-5  float-left">Bar Chart</h2>
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
              <h5 class="card-title m-b-0 align-self-center">Area chart</h5>
            </div>
            <div id="extra-area-chart"></div>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End chart box two -->

    <!-- chart box two -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex m-b-10 no-block">
              <h5 class="card-title m-b-0 align-self-center">Area chart with custom tooltip</h5>
            </div>
            <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-12">
              <li><i class="fa fa-square m-r-5 text-warning"></i> Sessions</li>
              <li><i class="fa fa-square m-r-5 text-pink"></i> New Visitors</li>
              <li><i class="fa fa-square m-r-5 text-primary"></i> Avg. Session Duration</li>
            </ul>
            <div id="extra-area-chart-2"></div>
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
              <div class="col-lg-12 col-md-12">
                <div class="d-flex panel-main m-b-10 no-block  panel-refresh">
                  <div class="refresh-container">
                    <div class="preloader">
                      <div class="loader">
                        <div class="loader__figure"></div>
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title m-b-0 align-self-center">Line chart</h5>
                  <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                </div>
                <ul class="list-inline m-b-10 text-uppercase lp-5 font-medium font-12">
                  <li><i class="fa fa-square m-r-5 text-warning"></i> CPU</li>
                  <li><i class="fa fa-square m-r-5 text-pink"></i> Memory</li>
                  <li><i class="fa fa-square m-r-5 text-primary"></i> Disc (C: D:)</li>
                </ul>
                <div id="morris-area-chart2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End chart box three -->


    <!-- chart box three -->
    <!-- ============================================================== -->

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="p-10 no-block text-center">
              <div class="align-slef-center">
                <h2 class="m-b-0">68%</h2>
                <h6 class="text-light m-b-25">Tasks done</h6>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:5px;"> <span class="sr-only">80% Complete</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="p-10 no-block text-center">
              <div class="align-slef-center">
                <h2 class="m-b-0">21%</h2>
                <h6 class="text-light m-b-25">In process Tasks</h6>
              </div>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%; height:5px;"> <span class="sr-only">30% Complete</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="p-10 no-block text-center">
              <div class="align-slef-center">
                <h2 class="m-b-0">11%</h2>
                <h6 class="text-light m-b-25">Tasks done</h6>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%; height:5px;"> <span class="sr-only">20% Complete</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chart box three -->
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
                <input data-plugin="knob" class="dial"  data-width="70" data-height="70"  data-linecap="round" data-fgColor="#f95476" data-thickness=".2" value="85" />
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
                <input class="dial" data-plugin="knob" data-width="70" data-height="70"  data-linecap="round" data-fgColor="#4886ff " data-thickness=".2" value="40" />
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
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex pt-3 pb-2 no-block">
              <div class="align-self-center mr-3 knob-icon knob-icon-2">
                <input data-plugin="knob" class="dial"  data-width="70" data-height="70"  data-linecap="round" data-fgColor="#ffb74e" data-thickness=".2" value="89" />
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







    <!-- chart box three -->

    <!-- ============================================================== -->
    <div class="row" id="basic-waypoint">
      <!-- Column -->
      <div class="col-lg-12 col-md-12">
        <div class="card o-income">
          <div class="card-body">
            <div class="row no-margin">
              <div class="col-lg-8 col-md-6">
                <div class="d-flex panel-main m-b-10 no-block  panel-refresh">
                  <div class="refresh-container">
                    <div class="preloader">
                      <div class="loader">
                        <div class="loader__figure"></div>
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title m-b-0 align-self-center">Line chart with sidebar</h5>
                  <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                </div>
                <ul class="list-inline m-b-10 text-uppercase lp-5 font-medium font-12">
                  <li><i class="fa fa-square m-r-5 text-warning"></i> CPU</li>
                  <li><i class="fa fa-square m-r-5 text-pink"></i> Memory</li>
                  <li><i class="fa fa-square m-r-5 text-primary"></i> Disc (C: D:)</li>
                </ul>
                <div id="morris-area-chart"></div>
              </div>
              <div class="col-lg-4 col-md-6" >
                <div class="panel-main pl-5 m-b-10 no-block  panel-refresh bordered-left-light">
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
                    <div class="cpu-div-right"> <span class="block font-25 text-primary">2.98 GHz</span> Using </div>
                    <div class="clearfix"></div>
                  </div>
                  <hr>
                  <h5 class="card-title m-t-30 m-b-0 align-self-center">Memory</h5>
                  <div class="block m-t-10 m-b-40">
                    <div class="cpu-div-left"> <span class="block font-25 text-pink">10%</span> Using </div>
                    <div class="cpu-div-right"> <span class="block font-25 text-primary">2.98 GHz</span> Using </div>
                    <div class="clearfix"></div>
                  </div>
                  <hr>
                  <h5 class="card-title m-t-30  m-b-0 align-self-center">Disc (C: D:)</h5>
                  <div class="block m-t-10 m-b-30">
                    <div class="cpu-div-left"> <span class="block font-25 text-pink">10%</span> Using </div>
                    <div class="cpu-div-right"> <span class="block font-25 text-primary">2.98 GHz</span> Using </div>
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


    <!-- chart box pie -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-6 col-md-12">
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
              <h5 class="card-title m-b-0 align-self-center">pie chart</h5>
              <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
            </div>
            <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-12">
              <li><i class="fa fa-square m-r-5 text-primary"></i> Shoes</li>
              <li><i class="fa fa-square m-r-5 text-warning"></i> Lingerie</li>
              <li><i class="fa fa-square m-r-5 text-purple"></i> Denim</li>
              <li><i class="fa fa-square m-r-5 text-pink"></i> Suits</li>
            </ul>

            <canvas id="chart4" height="150"> </canvas>
          </div>
        </div>
      </div>


      <!-- Column -->
      <!-- Column -->

      <div class="col-lg-6 col-md-12">
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
              <h5 class="card-title m-b-0 align-self-center">Bar Chart</h5>
              <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
            </div>
            <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-12">
              <li><i class="fa fa-square m-r-5 text-primary"></i> Shoes</li>
              <li><i class="fa fa-square m-r-5 text-warning"></i> Lingerie</li>
              <li><i class="fa fa-square m-r-5 text-purple"></i> Denim</li>
              <li><i class="fa fa-square m-r-5 text-pink"></i> Suits</li>
            </ul>

            <canvas id="chart3" height="150"> </canvas>

          </div>
        </div>
      </div>

      <!-- Column -->
    </div>
    <!-- chart box pie -->
    <!-- ============================================================== -->


    <!-- chart box sharp -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-12 col-md-12">
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
              <h5 class="card-title m-b-0 align-self-center">Sharp chart</h5>
              <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
            </div>

            <div id="morris-area-chart3"></div>

          </div>
        </div>
      </div>


      <!-- Column -->

    </div>
    <!-- chart box sharp -->
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
  <!-- Chart JS -->
  <script src="{{asset('plugins/vendors/Chart.js/Chart.min.js')}}"></script>

  <!-- page JS -->
  <script src="{{asset('assets/js/charts-page.js')}}"></script>
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

  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
