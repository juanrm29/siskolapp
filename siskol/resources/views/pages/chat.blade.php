@extends('layouts.app')

@push('before-css')
  <!-- Page CSS -->
  <link href="{{asset('assets/css/pages/chat-app-page.css')}}" rel="stylesheet">
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-9">
                    <input class="form-control" type="text" placeholder="Search Contact">
                  </div>
                  <div class="col-3 font-20 mt-2 p-0"> <a href="#"><i class="mdi mdi-star text-light-gray2"></i></a> <a href="#"><i class="mdi mdi-plus-circle text-light-gray2"></i></a> </div>
                </div>
                <div class="clearfix"></div>
                <ul class="chat-list-wrap mt-3">
                  <div>
                    <div id="slimtest1" style="height:550px;">
                      <li >
                        <div class="chat-body">
                          <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Peter Wyatt</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status away"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Vivian Rox</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status offline"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Mr. Danielle</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Suzi Cole</span> <span class="time block truncate txt-grey">Neque porro quisquam est..</span></div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Tom Taylor</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status offline"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Mitch Blue</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Jason Rudd</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status away"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Michelle</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status online"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a> <a href="javascript:void(0)">
                            <div class="chat-data"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user">
                              <div class="user-data"> <span class="name block capitalize-font">Ludacris Stack</span> <span class="time block truncate txt-grey">Neque porro quisquam est.</span></div>
                              <div class="status away"></div>
                              <div class="clearfix"></div>
                            </div>
                          </a>
                          <div class="clearfix"></div>
                      </li>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </ul>
              </div>
              <div class="col-md-8">
                <div class="chat">
                  <div class="chat-header clearfix"> <img class="user-img img-circle" src="{{asset('assets/imgs/users/user-50x50.jpg')}}" width="40" alt="user">
                    <div class="chat-about">
                      <div class="chat-with text-dark">Frank Handricks</div>
                      <div class="chat-num-status">Online</div>
                    </div>
                    <button type="button" class="btn ml-auto float-right btn-outline-primary btn-circle"><i class="fas fa-search"></i> </button>
                  </div>
                  <!-- end chat-header -->
                  <div class="chat-history" id="slimtest2" style="height:400px;">
                    <ul>
                      <li class="clearfix">
                        <div class="message-data text-right"> <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp; <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i> </div>
                        <div class="message other-message float-right"> Guterres was elected a member of parliament some </div>
                      </li>
                      <li>
                        <div class="message-data"> <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span> <span class="message-data-time">10:12 AM, Today</span> </div>
                        <div class="message my-message"> Drawing is creating a picture with a variety of tools. </div>
                      </li>
                      <li class="clearfix">
                        <div class="message-data text-right"> <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp; <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i> </div>
                        <div class="message other-message float-right"> Visit my site www.example.com </div>
                      </li>
                      <li>
                        <div class="message-data"> <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span> <span class="message-data-time">10:20 AM, Today</span> </div>
                        <div class="message my-message"> Actually everything was fine. I'm very excited to show this to our team. </div>
                      </li>
                      <li>
                        <div class="message my-message">
                          <div class="box">
                            <div class="loader10"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- end chat-history -->
                  <div class="chat-message clearfix">
                    <textarea name="message-to-send" class="form-control" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                    <i class="fa fa-file"></i> &nbsp;&nbsp;&nbsp; <i class="fa fa-file-image"></i>
                    <button>Send</button>
                  </div>
                  <!-- end chat-message -->
                </div>
              </div>
              <!-- end chat -->
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
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
