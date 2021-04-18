@extends('layouts.app')

@push('before-css')
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
      <div class="col-lg-8 col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-uppercase m-b-25">button forms</h4>
            <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>, <code>bbtn-default</code> to quickly create different kinds of buttons..</h6>
            <div class="button-group">
              <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">Primary</button>
              <button type="button" class="btn waves-effect waves-light btn-rounded btn-success">Success</button>
              <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Danger</button>
              <button type="button" class="btn waves-effect waves-light btn-rounded btn-warning">Warning</button>
            </div>
            <div class="button-group">
              <button type="button" class="btn waves-effect waves-light btn-light-round btn-primary">Primary</button>
              <button type="button" class="btn waves-effect waves-light btn-light-round btn-success">Success</button>
              <button type="button" class="btn waves-effect waves-light btn-light-round btn-danger">Danger</button>
              <button type="button" class="btn waves-effect waves-light btn-light-round btn-warning">Warning</button>
            </div>
            <div class="button-group">
              <button type="button" class="btn waves-effect waves-light btn-square btn-primary">Primary</button>
              <button type="button" class="btn waves-effect waves-light btn-square btn-success">Success</button>
              <button type="button" class="btn waves-effect waves-light btn-square btn-danger">Danger</button>
              <button type="button" class="btn waves-effect waves-light btn-square btn-warning">Warning</button>
            </div>
            <h6 class="card-subtitle m-t-10 m-b-0">Use class <code>btn</code> <code>btn-outline</code> to quickly create outline btn.</h6>
            <div class="button-group">
              <button type="button" class="btn btn-rounded waves-effect waves-light btn-outline-default">Rounded</button>
              <button type="button" class="btn  waves-effect waves-light btn-outline-default">Rounded 3px</button>
              <button type="button" class="btn btn-square  waves-effect waves-light btn-outline-default">Square</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card">
          <div class="card-body p-b-40">
            <h4 class="card-title text-uppercase m-b-25">Disable Buttons</h4>
            <h6 class="card-subtitle m-b-10 font-14">Use class <code>disabled</code> to quickly create
              disable btn.</h6>
            <div class="button-group">
              <button type="button" class="btn disabled  btn-rounded waves-effect waves-light btn-primary">Primary</button>
              <button type="button" class="btn disabled btn-rounded  waves-effect waves-light btn-outline-primary">Primary</button>
            </div>
            <div class="button-group">
              <button type="button" class="btn btn-rounded  disabled  waves-effect waves-light btn-success">Success</button>
              <button type="button" class="btn btn-rounded  disabled waves-effect waves-light btn-outline-success">Success</button>
            </div>
            <div class="button-group">
              <button type="button" class="btn btn-rounded  disabled  waves-effect waves-light btn-danger">Danger</button>
              <button type="button" class="btn btn-rounded  disabled  waves-effect waves-light btn-outline-danger">Danger</button>
            </div>
            <div class="button-group m-b-10">
              <button type="button" class="btn btn-rounded  disabled  waves-effect waves-light btn-warning">Warning</button>
              <button type="button" class="btn btn-rounded  disabled  waves-effect waves-light btn-outline-warning">Warning</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <div class="row">
      <!-- Column -->
      <div class="col-lg-8 col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-uppercase m-b-40">Size buttons</h4>
            <h6 class="card-subtitle m-b-25 font-14">Use class <code>btn-lg</code> for large button, <code>btn-sm</code> for small button, <code>btn-xs</code> for mini button.</h6>
            <div class="button-group">
              <button type="button" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Large</button>
              <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">Default</button>
              <button type="button" class="btn waves-effect waves-light btn-sm btn-rounded btn-primary">Small</button>
              <button type="button" class="btn waves-effect waves-light btn-xs btn-rounded btn-primary">Extra small</button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-uppercase m-b-25">Icon buttons</h4>
            <h6 class="card-subtitle m-b-15 font-14">Create buttons different weidth by adding <code>.w-min-xs</code>, <code>.w-min-sm</code>, <code>.w-min-md</code> or <code>.w-min-lg</code>. </h6>
            <div class="button-group">
              <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-download"></i> </button>
              <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-paperclip"></i> </button>
              <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-paper-plane"></i></button>
              <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-share-alt"></i></button>
              <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-pencil-alt"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card">
          <div class="card-body p-b-40">
            <h4 class="card-title text-uppercase m-b-25">Action buttons & social </h4>
            <h6 class="card-subtitle m-b-10 font-14">Use class <code>btn-lg</code> for large button, <code>btn-sm</code> for small button, <code>btn-xs</code> for mini button. </h6>
            <div class="btn-group">
              <button type="button" class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
              <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action 1</a> <a class="dropdown-item" href="#">Action 2</a> <a class="dropdown-item" href="#">Action 3</a> <a class="dropdown-item" href="#">Action 4</a> </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-rounded dropdown-toggle btn-outline-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
              <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action 1</a> <a class="dropdown-item" href="#">Action 2</a> <a class="dropdown-item" href="#">Action 3</a> <a class="dropdown-item" href="#">Action 4</a> </div>
            </div>
            <h6 class="card-subtitle m-t-30 m-b-10"> Use class <code>btn-block</code>, <code>btn-block</code>, <code>btn-block</code>, <code>btn-block</code> to quickly create
              a block button. </h6>
            <div class="div-relative">
              <button type="button" id="btnleft" class="btn m-t-20 m-b-40 text-primary bg-transparent border-0"><i class="fas fa-share-alt"></i></button>
              <div id="slidediv">
                <ul class="social-slide arrow_box">
                  <li><a href="" target="_blank" class="text-muted"><i class="fab fa-facebook-f"></i> </a></li>
                  <li><a href="" target="_blank" class="text-muted"><i class="fab fa-twitter"></i> </a></li>
                  <li><a href="" target="_blank" class="text-muted"><i class="fab fa-google"></i> </a></li>
                  <li><a href="" target="_blank" class="text-muted"><i class="fab fa-behance"></i> </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body p-b-40">
            <h4 class="card-title text-uppercase m-b-25">button stages & animation</h4>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <h4 class="text-inverse  m-b-25"> Stages </h4>
                <div class="clearfix"></div>
                <div class="row m-b-30">
                  <div class="col-6">
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary w-100">Default</button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-rounded waves-effect waves-light   btn-outline-primary w-100">Default</button>
                  </div>
                </div>
                <div class="row m-b-30">
                  <div class="col-6">
                    <button type="button" class="btn waves-effect waves-light  btn-rounded btn-primary bt-hover w-100">Hover</button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-rounded waves-effect waves-light btn-outline-primary w-100">Hover</button>
                  </div>
                </div>
                <div class="row m-b-30">
                  <div class="col-6">
                    <button type="button" class="btn waves-effect waves-light  btn-rounded btn-primary w-100">Active</button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-outline-primary w-100">Active</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-8">
                <h4 class="text-inverse  m-b-25"> Animations </h4>
                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-primary m-b-25 w-100">Send Message</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-primary   m-b-25 w-100">Send Message</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-primary   m-b-25 w-100">Send Message</button>
                  </div>
                  <div class="col-lg-3 col-md-3">
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-primary m-b-25 w-100"> <i class="fa fa-ellipsis-h font-14"></i></button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-primary m-b-25 w-100">Loading...</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-primary  m-b-25 w-100">75%</button>
                  </div>
                  <div class="col-lg-3 col-md-3">
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-success w-100 m-b-25">Done</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-success w-100  m-b-25"><i class="fa fa-check" aria-hidden="true"></i> Done</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-success w-100 m-b-25"><i class="fa fa-check" aria-hidden="true"></i></button>
                  </div>
                  <div class="col-lg-3 col-md-3">
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-danger w-100 m-b-25">Error</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-danger w-100  m-b-25"><i class="mdi mdi-close" data-name="mdi-close"></i> Error</button>
                    <button type="button" class="btn btn-rounded waves-effect waves-light  btn-rounded btn-danger w-100 m-b-25"> <i class="mdi mdi-close" data-name="mdi-close"></i> </button>
                  </div>
                </div>
              </div>
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
