@extends('layouts.app')

@push('before-css')
  <!-- Page CSS -->
  <link href="{{asset('assets/css/pages/to-do.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css">
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
      <div class="col-lg-3 col-md-3 mail-list">
        <div class="card bg-none">
          <div class="card-body no inbox-panel pb-5"> <a href="" data-toggle="modal" data-target=".add-task" class="btn btn-rounded btn-primary m-b-20 waves-effect waves-light">Edit Profile</a>
            <hr class="mt-2 mb-2">
            <ul class="list-group list-group-full">
              <li class="list-group-item"><a href="#" class="list-group-item"><i class="mdi mdi-account"></i> Profile</a> </li>
              <li class="list-group-item"><a href="#"><i class="mdi mdi-file-document"></i> Biography</a> </li>
              <li class="list-group-item"><a href="#"><i class="mdi mdi-file-document"></i> Skills</a></li>
              <li class="list-group-item"><a href="#"><i class="mdi mdi-briefcase"></i> Experience</a></li>
              <li class="list-group-item"><a href="#"><i class="mdi mdi-school"></i> Education</a> </li>

            </ul>
            <hr class="mt-4  mb-3">
            <ul class="list-group list-group-full">
              <li class="list-group-item"><a href="#"><i class="mdi mdi-settings"></i> Settings</a></li>
            </ul>

          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9">
        <div class="card">
          <div class="card-body  card2 pt-3">
            <div class="row">
              <div class="col-lg-6 col-md-9 font-18 font-weight-bold text-uppercase">Profile</div>
              <div class="col-lg-6 col-md-9 text-right font-16 font-weight-bold text-uppercase profile-social">
                <ul>
                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="mdi mdi-facebook"></i></a></li>
                  <li><a href="#" class="icoTwitter" title="Twitter"><i class="mdi mdi-twitter"></i> </a></li>
                  <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-google-plus"></i></a></li>
                  <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-behance" data-name="mdi-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 m-b-20 text-center"><img src="{{asset('assets/imgs/users/profile-img.jpg')}}" class="img-fluid"  alt="" title="" ></div>
              <div class="col-md-8">
                <h2 class="font-25 font-medium">Brian Summerhoold</h2>
                <p class="m-b-20">Online</p>
                <div class="row mb-2">
                  <div class="col-3 font-weight-bold text-dark">Position</div>
                  <div class="col">content manager</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 font-weight-bold text-dark">Age</div>
                  <div class="col">25 years</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 font-weight-bold text-dark">Address</div>
                  <div class="col">New York, Lancer St. 15/10, USA</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 font-weight-bold text-dark">Phone</div>
                  <div class="col">+9 70 12 102 500</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 font-weight-bold text-dark">Email</div>
                  <div class="col"><a href="mailto:johndonov@gmail.com" class="text-inverse">johndonov@gmail.com</a></div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 font-weight-bold text-dark">Web site</div>
                  <div class="col"><a href="#" class="text-inverse">joedonovan.com</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body  card2 pt-5">
            <div class="row">
              <div class="col-lg-12 col-md-12 font-18 font-weight-bold text-uppercase">biography</div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 font-16">
                <p> Glenn was born in Ohio in 1921. In his early life he  was a fighter pilot in the Marine Corps during World War II and the Korean War. After the war he attended classes at the University of Maryland where he got a degree in chemistry.<br>
                  <br>
                  Towards the end of the 1950s it had become clear that America was in fierce competition with the Soviet Union to send a man into space and bring him safely back to Earth. NASA chose 7 test pilots  who would become astronauts in the Mercury program and John Glenn was one of them.<br>
                  <br>
                  John Glenn was one of NASA’s first astronauts and the first American to orbit the Earth. He belonged to the “Mercury 7”.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body  card2 pt-5">
            <div class="row">
              <div class="col-lg-12 col-md-12 font-18 font-weight-bold text-uppercase">SKILL</div>
            </div>
          </div>
          <div class="card-body pb-5">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <h5 class="font-14 text-inverse">Photoshop<span class="pull-right">55%</span></h5>
                <div class="progress">
                  <div class="progress-bar bg-info wow animated progress-animated" style="width:55%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <h5 class="font-14 m-t-20 text-inverse">Illustrator<span class="pull-right">64%</span></h5>
                <div class="progress">
                  <div class="progress-bar bg-info wow animated progress-animated" style="width:64%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <h5 class="font-14 m-t-20 text-inverse">InDesign<span class="pull-right">35%</span></h5>
                <div class="progress">
                  <div class="progress-bar bg-info wow animated progress-animated" style="width: 35%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <h5 class="font-14 m-t-20 text-inverse">Powerpoint<span class="pull-right">95%</span></h5>
                <div class="progress m-b-20">
                  <div class="progress-bar  bg-info wow animated progress-animated" style="width: 95%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <h5 class="font-14 text-inverse">Wordpress<span class="pull-right">55%</span></h5>
                <div class="progress">
                  <div class="progress-bar bg-info wow animated progress-animated" style="width:55%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <h5 class="font-14 m-t-30 text-inverse">Drupal<span class="pull-right">64%</span></h5>
                <div class="progress">
                  <div class="progress-bar bg-info wow animated progress-animated" style="width: 64%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <h5 class="font-14 m-t-30 text-inverse">English<span class="pull-right">95%</span></h5>
                <div class="progress">
                  <div class="progress-bar bg-info wow animated progress-animated" style="width: 95%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body  card2 pt-5">
            <div class="row">
              <div class="col-lg-12 col-md-12 font-18 font-weight-bold text-uppercase">Experience</div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 font-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span> September 2015 - Now </div>
              <div class="col-lg-4 col-md-6 m-b-20"> <span class="font-bold">Web agency Styler</span>
                <div class="clearfix"></div>
                <span class="mt-2 d-block m-b-10">content manager</span> </div>
              <div class="col-lg-4 col-md-6 font-weight-bold m-b-20"> Working with CMS Wordpress. </div>
            </div>
            <div class="boder-li"></div>
            <div class="row">
              <div class="col-lg-4 col-md-6 font-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span> May 2013 - September 2015 </div>
              <div class="col-lg-4 col-md-6"> <span class="font-bold text-dark">Google corporation </span> <span class="mt-2 d-block">copywriter</span> </div>
              <div class="col-lg-4 col-md-6 font-weight-bold m-b-20">Learned the basics of programming and made many different projects.</div>
            </div>
            <div class="boder-li"></div>
            <div class="row">
              <div class="col-lg-4 col-md-6 font-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span> March 2012 - May 2013</div>
              <div class="col-lg-4 col-md-6 "> <span class="font-bold text-dark">London web studio</span><br>
                <span class="mt-2 d-block">client manager</span> </div>
              <div class="col-lg-4 col-md-6 font-weight-bold m-b-20">Worked with different teams and clients. Improved my communication skills.</div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body  card2 pt-5 pb-2">
            <div class="row">
              <div class="col-lg-12 col-md-12 font-18 font-weight-bold text-uppercase">Education</div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 font-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span> April 2014 - November 2016</div>
              <div class="col-lg-4 col-md-6"> <span class="font-bold text-dark">Computer engineering</span>
                <div class="clearfix"></div>
                <span class="mt-2 d-block">Master</span> </div>
              <div class="col-lg-4 col-md-6 font-weight-bold m-b-20">London School of Economics and Political Science</div>
            </div>
            <div class="boder-li"></div>
            <div class="row">
              <div class="col-lg-4 col-md-6 font-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span>September 2012 - April 2014</div>
              <div class="col-lg-4 col-md-6 "> <span class="font-bold text-dark">Google corporation </span>
                <div class="clearfix"></div>
                <span class="mt-2 d-block">Bachelor</span> </div>
              <div class="col-lg-4 col-md-6  font-weight-bold">Imperial College London</div>
            </div>
          </div>
        </div>
      </div>
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

