@extends('layouts.app')

@push('before-css')
  <!-- Page CSS -->
  <link href="{{asset('assets/css/pages/email.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css">
  <!-- summernotes CSS -->
  <link href="{{asset('plugins/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" />
@endpush

@section('content')
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- box -->
    <!-- ============================================================== -->
    <div class="row email-page">
      <div class="col-lg-3 col-md-4">
        <div class="card bg-none">
          <div class="card-body no inbox-panel"> <a href="#myModal" data-toggle="modal" class="btn btn-rounded
btn-primary m-b-10 waves-effect waves-light">Compose</a>
            <div class="clear"></div>
            <hr>
            <div class="clear"></div>
            <ul class="list-group list-group-full">
              <li class="list-group-item active"> <a href="javascript:void(0)"><i class="fas fa-download"></i> Inbox <span class="label label-rounded label-primary ml-auto">6</span></a></li>
              <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-star font-16"></i> Starred </a> </li>
              <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-label font-16"></i> Important </a> </li>
              <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-send font-16"></i> Sent</a></li>
              <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-email-open font-16"></i> Draft </a></li>
              <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-alert-octagon font-16"></i> Span </a></li>
              <li class="list-group-item "> <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box font-16"></i> Sent Mail </a> </li>
              <li class="list-group-item"> <a href="javascript:void(0)"> <i class="mdi mdi-delete font-18"></i> Trash </a> </li>
            </ul>
            <div class="clear"></div>
            <hr>
            <div class="clear"></div>
            <h3 class="card-title m-t-10">Categories <i class="mdi mdi-plus-circle pull-right text-light-gray2"></i></h3>
            <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle circle-tab text-info m-r-10"></span>Business</a> <a href="#" class="list-group-item"><span class="fa fa-circle circle-tab text-warning m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle circle-tab text-purple m-r-10"></span>Personal</a> <a href="#" class="list-group-item"><span class="fa fa-circle circle-tab text-danger m-r-10"></span>Vacation</a> <a href="#" class="list-group-item"><span class="fa fa-circle circle-tab text-success m-r-10"></span>Medicine</a> </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
        <div class="card panel-main o-income panel-refresh">
          <div class="refresh-container">
            <div class="preloader">
              <div class="loader">
                <div class="loader__figure"></div>
              </div>
            </div>
          </div>
          <div class="card-body bg-light-primary">
            <div class="top-section-left p-b-5">
              <div class="checkbox checkbox-primary dl">
                <input id="checkbox01"  onchange="checkAll(this)" name="chk[]" type="checkbox">
                <label for="checkbox01"></label>
              </div>
              <a id="btnGroupDrop1" class=" text-primary font-18 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Mark as all read</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
            </div>
            <div class="top-section-left p-l-10 top-icon">
              <a href="#"><i class="mdi mdi-alert-circle text-primary font-18"></i></a> <a href="#"><i class="mdi mdi-delete text-primary font-18"></i></a> <a href="#"><i class="mdi mdi-folder-move text-primary font-18"></i></a> <a href="#"><i class="mdi mdi-alert-octagon text-primary font-18"></i></a> <a href="#"><i class="mdi mdi-tag text-primary font-18"></i></a> <a id="btnGroupDrop1" href=""  class="font-18  text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-arrow-down-drop-circle text-primary font-18"></i></a>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Mark us read</a> <a class="dropdown-item" href="#">Mark us unread</a> <a class="dropdown-item" href="#">Mark us not important</a> <a class="dropdown-item" href="#">Add star</a> <a class="dropdown-item" href="#">Mute</a> </div>
            </div>
            <button type="button" class="
									btn btn-rounded  waves-effect waves-light btn-outline-primary ml-auto float-right"><i class="fas fa-search"></i> Search</button>
          </div>
          <div class="card-body p-t-0  p-b-0">
            <div class="row" id="slimtest4" style="height:525px;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="inbox-center table-responsive">
                    <table class="table table-hover no-wrap">
                      <tbody>
                      <tr class="unread">
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox0" value="check">
                            <label for="checkbox0"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-warning"></i> </td>
                        <td class="hidden-xs-down" style="width:40px"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Hegrit Dwayne</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Write new message </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr class="unread">
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox12" value="check">
                            <label for="checkbox12"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                        <td class="hidden-xs-down">Mitchell Joe</td>
                        <td class="max-texts"><a href="#myModal-2" data-toggle="modal"> Opened message </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr class="unread">
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox22" value="check">
                            <label for="checkbox22"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Mason Hudson</td>
                        <td class="max-texts"><a href="#myModal-3" data-toggle="modal"> Opened message reply</a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr>
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox3" value="check">
                            <label for="checkbox3"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-warning"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Reese Banks</td>
                        <td class="max-texts"><a href="#myModal-4" data-toggle="modal"> Opened message after reply</a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr class="unread">
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox1" value="check">
                            <label for="checkbox1"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10 text-warning"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                        <td class="hidden-xs-down">Mitchell Joe</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr class="unread">
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox2" value="check">
                            <label for="checkbox2"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Mason Hudson</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr>
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox3" value="check">
                            <label for="checkbox3"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Reese Banks</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017</td>
                      </tr>
                      <tr>
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox4" value="check">
                            <label for="checkbox4"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Hegrit Dwayne</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right">13.07.2017 </td>
                      </tr>
                      <tr>
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox5" value="check">
                            <label for="checkbox5"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                        <td class="hidden-xs-down">Mitchell Joe</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017 </td>
                      </tr>
                      <tr>
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox6" value="check">
                            <label for="checkbox6"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Mason Hudson</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right"> 13.07.2017 </td>
                      </tr>
                      <tr>
                        <td><span class="fa fa-circle text-info circle-tab m-r-10"></span> </td>
                        <td><div class="checkbox">
                            <input type="checkbox" id="checkbox7" value="check">
                            <label for="checkbox7"></label>
                          </div></td>
                        <td><i class="mdi mdi-label m-r-10  text-muted"></i> </td>
                        <td class="hidden-xs-down"><i class="fa fa-star text-muted"></i></td>
                        <td class="hidden-xs-down">Reese Banks</td>
                        <td class="max-texts"><a href="#myModal" data-toggle="modal"> Lorem ipsum perspiciatis.. </a></td>
                        <td class="hidden-xs-down"><i class="fas fa-paperclip"></i></td>
                        <td class="text-right">13.07.2017 </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="faded-background"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal write new message -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="pull-left">
              <h4 class="modal-title" id="myModalLabel">New Message</h4>
            </div>
            <div class="pull-right"> <a href=""> <i class="ti-layout-line-solid"></i></a> <a href=""> <i class="ti-arrows-corner"></i></a> <a href=""  class="" data-dismiss="modal"><i class="ti-close"></i></a> </div>
          </div>
          <div class="modal-body">
            <form class="form bordered-input">
              <div class="form-group row">
                <div class="col-12">
                  <input class="form-control" type="email" placeholder="Send to" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <input class="form-control" type="text" placeholder="Subject" id="example-text-input">
                </div>
              </div>
            </form>
            <div class="inline-editor">
              <p>Good morning!</p>
              <p>New residents who enter Second Life for the first time start on “Orientation Island”. How to navigate from one place to another and how to communicate with others. They are also given a tour of interesting places to visit.<br>
                Best regards! Julian Salmer</p>
              <p class="text-muted"><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf</p>
              <p class="text-muted m-b-30"><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf</p>
            </div>
            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info btn-rounded waves-effect" data-dismiss="modal">Send</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- Modal write new message end -->
    <!-- Modal opened message -->
    <div id="myModal-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="pull-left">
              <h4 class="modal-title" id="myModalLabel">Invitation to web conference</h4>
            </div>
            <div class="pull-right"> <a href=""> <i class="ti-layout-line-solid"></i></a> <a href=""> <i class="ti-arrows-corner"></i></a> <a href=""  class="" data-dismiss="modal"><i class="ti-close"></i></a> </div>
          </div>
          <div class="modal-body">
            <div class="d-flex m-b-40">
              <div class="p-t-5"> <a href="javascript:void(0)" ><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" width="40" class="img-circle"></a> </div>
              <div class="p-l-10">
                <h4 class="m-b-0 font-14">Robert Franklin</h4>
                <small class="text-muted">17.06.2017, 15:30</small><br>
                <small class="text-muted">Sent to: <span class="text-dark">me, Ryan, Jessie <i class="mdi mdi-arrow-down-box font-16"></i></span> </small> </div>
              <div class="p-t-5 right-top-icons ml-auto"> <a href="javascript:void(0)" ><i class="fas fa-star"></i></a> <a class="m-l-10" href="javascript:void(0)" ><i class="fas fa-reply"></i></a> <a class="m-l-10" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Delete</a> <a class="dropdown-item" href="#">Move to other folder</a> </div>
              </div>
            </div>
            <div>
              <p class="m-b-20">Mister Summerhoold!</p>
              <p class="m-b-20">We glad to invite you to web conference “New generation in robotics”. The conference will take place in July 15 at 11:00. More in the link <a href="">www.webroom.com/10215/userid01540</a></p>
              <p class="m-b-20">Best regards! Robert Franklin</p>
              <p><a href=""  class="text-muted"><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf <i class="fa fa-download m-l-5"></i></a></p>
              <p class="m-b-30"><a class="text-muted" href=""><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf <i class="fa fa-download m-l-5"></i></a></p>
            </div>
            </textarea>
          </div>
          <div class="modal-footer p-4">
            <div class="inline-editor"> Click here to <a href="#">Reply</a> or <a href="#">Forward</a></div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- Modal opened message end -->
    <!-- Modal opened message reply -->
    <div id="myModal-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="pull-left">
              <h4 class="modal-title" id="myModalLabel">Invitation to web conference</h4>
            </div>
            <div class="pull-right"> <a href=""> <i class="ti-layout-line-solid"></i></a> <a href=""> <i class="ti-arrows-corner"></i></a> <a href=""  class="" data-dismiss="modal"><i class="ti-close"></i></a> </div>
          </div>
          <div class="modal-body" id="slimtest1" style="height: 500px;">
            <div >
              <div class="d-flex m-b-40">
                <div class="p-t-5"> <a href="javascript:void(0)" ><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" width="40" class="img-circle"></a> </div>
                <div class="p-l-10">
                  <h4 class="m-b-0 font-14">Robert Franklin</h4>
                  <small class="text-muted">17.06.2017, 15:30</small><br>
                  <span class="text-muted">Sent to: <span class="text-dark">me, Ryan, Jessie <i class="mdi mdi-arrow-down-box font-16"></i></span> </span> </div>
                <div class="p-t-5 right-top-icons ml-auto"> <a href="javascript:void(0)" ><i class="fas fa-star"></i></a> <a class="m-l-10" href="javascript:void(0)" ><i class="fas fa-reply"></i></a> <a class="m-l-10" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Delete</a> <a class="dropdown-item" href="#">Move to other folder</a> </div>
                </div>
              </div>
              <div>
                <p class="m-b-20">Mister Summerhoold!</p>
                <p class="m-b-20">We glad to invite you to web conference “New generation in robotics”. The conference will take place in July 15 at 11:00. More in the link <a href="">www.webroom.com/10215/userid01540</a></p>
                <p class="m-b-20">Best regards! Robert Franklin</p>
                <p><a href=""  class="text-muted"><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf <i class="fa fa-download m-l-5"></i></a></p>
                <p class="m-b-30"><a class="text-muted" href=""><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf <i class="fa fa-download m-l-5"></i></a></p>
              </div>
              <hr>
              <div class="m-b-20"> <span class="text-muted">reply to: <span class="text-dark">Robert Franklin <i class="mdi mdi-arrow-down-box font-16"></i></span> </span></div>
              <div class="inline-editor">
                <p>Thanks for invitation. I will gladly participate.</p>
                <p>Best regards! Julian Salmer</p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info btn-rounded waves-effect" data-dismiss="modal">Send</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- Modal opened message reply -->
    <!-- Modal opened message after reply -->
    <div id="myModal-4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="pull-left">
              <h4 class="modal-title" id="myModalLabel">Invitation to web conference</h4>
            </div>
            <div class="pull-right"> <a href=""> <i class="ti-layout-line-solid"></i></a> <a href=""> <i class="ti-arrows-corner"></i></a> <a href=""  class="" data-dismiss="modal"><i class="ti-close"></i></a> </div>
          </div>
          <div class="modal-body" id="slimtest1" style="height: 500px;">
            <div >
              <div class="d-flex m-b-20">
                <div class="p-t-5"> <a href="javascript:void(0)" ><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" width="40" class="img-circle"></a> </div>
                <div class="p-l-10">
                  <h4 class="m-b-0 font-14">Robert Franklin</h4>
                  <small class="text-muted">17.06.2017, 15:30</small><br>
                  <span class="text-muted">Sent to: <span class="text-dark">me, Ryan, Jessie <i class="mdi mdi-arrow-down-box font-16"></i></span> </span> </div>
                <div class="p-t-5 right-top-icons ml-auto"> <a href="javascript:void(0)" ><i class="fas fa-star"></i></a> <a class="m-l-10" href="javascript:void(0)" ><i class="fas fa-reply"></i></a> <a class="m-l-10" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Delete</a> <a class="dropdown-item" href="#">Move to other folder</a> </div>
                </div>
              </div>
              <div>
                <p class="m-b-20">Mister Summerhoold!</p>
                <p class="m-b-20">We glad to invite you to web conference “New generation in robotics”. The conference will take place in July 15 at 11:00. More in the link <a href="">www.webroom.com/10215/userid01540</a></p>
                <p class="m-b-20">Best regards! Robert Franklin</p>
                <p><a href=""  class="text-muted"><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf <i class="fa fa-download m-l-5"></i></a></p>
                <p class="m-b-30"><a class="text-muted" href=""><i class="fas fa-paperclip m-r-5"></i> Instruction.pdf <i class="fa fa-download m-l-5"></i></a></p>
              </div>
              <hr>
              <div class="d-flex m-b-40">
                <div class="p-t-5"> <a href="javascript:void(0)" ><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" width="40" class="img-circle"></a> </div>
                <div class="p-l-10">
                  <h4 class="m-b-0 font-14">Robert Franklin</h4>
                  <small class="text-muted">17.06.2017, 15:30</small><br>
                  <span class="text-muted">Sent to: <span class="text-dark">me, Ryan, Jessie <i class="mdi mdi-arrow-down-box font-16"></i></span> </span> </div>
                <div class="p-t-5 right-top-icons ml-auto"> <a href="javascript:void(0)" ><i class="fas fa-star"></i></a> <a class="m-l-10" href="javascript:void(0)" ><i class="fas fa-reply"></i></a> <a class="m-l-10" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Delete</a> <a class="dropdown-item" href="#">Move to other folder</a> </div>
                </div>
              </div>
              <p>Thanks for invitation. I will gladly participate.</p>
              <p>Best regards! Julian Salmer</p>
            </div>
          </div>
          <div class="modal-footer p-4">
            <div class="inline-editor"> Click here to <a href="#">Reply or <a href="#">Forward</a> </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- Modal opened message reply -->
    <!-- Column -->
    @include('layouts.partials.footer')
  </div>
  <!-- ============================================================== -->
  <!-- End box -->
@endsection

@push('js')
  <script src="{{asset('plugins/vendors/summernote/dist/summernote.min.js')}}"></script>
  <script src="{{asset('assets/js/email.js')}}"></script>
  <!-- Popup message jquery -->
  <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
  <!-- Style switcher -->
  <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
