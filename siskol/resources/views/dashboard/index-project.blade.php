@extends('layouts.app')

@push('before-css')
    <link href="{{asset('plugins/vendors/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('plugins/vendors/c3-master/c3.min.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('plugins/vendors/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('assets/css/pages/tab-page.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css">

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-sm-12 align-self-center">
                <h4 class="weight-500 m-0"><img src="{{asset('assets/imgs/projects/ecommerce.png')}}" alt="" title="" class="m-r-15"/> TAY ecommerce</h4>
            </div>
            <div class="col-md-7 col-sm-12 align-self-center text-right">
                <ul class="nav nav-tabs customtab pro-customtab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pro-statistics" role="tab"><span>Statistics</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pro-details" role="tab"> <span>Details</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pro-task" role="tab"><span>Task Manager</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pro-members" role="tab"><span>Members</span></a> </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <!--tabpanel-->
            <div class="tab-pane" id="pro-details" role="tabpanel">
                <div class="p-0">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="modal fade project-details" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-uppercase font-weight-bold">project details</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row form-group m-b-20">
                                                <div class="col-md-3">
                                                    <h4 class="font-16 m-0 p-0 font-weight-bold">Description</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea  class="form-control text-h">TAY is eCommerce project. It’s complete shop with opportunity to buy anything anywhere for 2 minutes. The Kohinoor diamond was found in the mines of southern India, probably in the 13th century. After belonging to several warring groups in southern Asia, it finally ended up in Queen Victoria's.</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group m-b-20">
                                                <div class="col-md-3">
                                                    <h4 class="font-16  m-0 p-0 font-weight-bold">Status</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group m-b-20">
                                                <div class="col-md-3">
                                                    <h4 class="font-16  m-0 p-0 font-weight-bold">Start date</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <input  type="date" class="form-control date-icon">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <h4 class="font-16  m-0 p-0 font-weight-bold">End date</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <input  type="date" class="form-control date-icon">
                                                </div>
                                            </div>
                                            <div class="row form-group m-b-20">
                                                <div class="col-md-3">
                                                    <h4 class="font-16  m-0 p-0 font-weight-bold">Members</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <ul class="members-projects members-list">
                                                        <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class="img-circle"></li>
                                                        <li class="dashed-div"><a href="#"><img src="{{asset('assets/imgs/icon/plus.png')}}" alt="" title="" class="img-circle" ></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-rounded btn-success">Save</button>
                                            <button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title float-left m-t-20 m-l-20 m-r-20 align-self-center tasks statistics text-uppercase">project details</h5>
                                    <a href="" data-toggle="modal" data-target=".project-details" class="float-right m-t-20 m-l-20 m-r-20"><i class="fas fa-pencil-alt m-r-5"></i>Edit</a>
                                    <div class="clearfix"></div>
                                    <div class="m-t-20 p-20 no-block">
                                        <div class="row font-16">
                                            <div class="col-lg-2 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Description</span> </div>
                                            <div class="col-lg-10 col-md-9 col-sm-12">
                                                <p> TAY is eCommerce project. It’s complete shop with opportunity to buy anything anywhere for 2 minutes. The Kohinoor diamond was found in the mines of southern India, probably in the 13th century. After belonging to several warring groups in southern Asia, it finally ended up in Queen Victoria's. </p>
                                            </div>
                                        </div>
                                        <div class="d-flex font-16">
                                            <div class="col-lg-6 p-0 row col-md-12">
                                                <div class="col-lg-4 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Status</span> </div>
                                                <div class="col-lg-8 col-md-4 col-sm-12 p-l-20 ">
                                                    <p> Open </p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-lg-4 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Start date</span> </div>
                                                <div class="col-lg-8 col-md-4 col-sm-12 p-l-20 ">
                                                    <p> 12.06.2018, Monday </p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-lg-4 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Due date</span> </div>
                                                <div class="col-lg-8 col-md-4 col-sm-12 p-l-20 ">
                                                    <p> 01.08.2018, Tuesday </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-lg-6 row block col-md-12 members-projects">
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-0 m-b-15"> <span class="weight-500 text-dark">Members</span> </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                                                    <ul class="members-list">
                                                        <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class="img-circle"></li>
                                                        <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class="img-circle"></li>
                                                        <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class="img-circle"></li>
                                                        <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class="img-circle"></li>
                                                        <li><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class="img-circle"></li>
                                                        <li>
                                                            <div class="circle-div">+18</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="modal fade project-brief" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-uppercase font-weight-bold" >project brief</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <div class="boder-box">+ Add question</div>
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15 p-0 font-weight-bold">Title</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <input  type="text" value="1. What business are you doing?"  class="form-control text-dark text-box">
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-10">
                                            <div class="col-md-3">
                                                <h4 class="font-16 m-t-15 p-0 font-weight-bold"> boder-box</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea  class="form-control text-h2" rows="3">In the past few years India has made attempts to get back several historic items. Some historians claim that the Kohinoor was taken away from India by force.</textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-40">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="button" class="btn btn-rounded btn-success">Save</button>
                                                <button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15 p-0 font-weight-bold">Title</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <input  type="text" value="2. What colors do you like?"  class="form-control text-box">
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15  p-0 font-weight-bold">Option</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea  rows="3"   class="form-control text-h2  "> I like red, orange and brown colors. </textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group text-right">
                                            <div class="col-md-12"><a href=""><i class="fas fa-pencil-alt m-r-5 op-3"></i></a>&nbsp;&nbsp;<a href="" class="float-right"><i class="fa fa-trash text-danger op-3" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15 p-0 font-weight-bold">Title</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <input  type="text" value="2. What colors do you like?"  class="form-control  text-dark text-box">
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-40">
                                            <div class="col-md-3">
                                                <h4 class="font-16 m-t-15 p-0 font-weight-bold">Option</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea   rows="3"   class="form-control text-h2  text-dark ">I like red, orange and brown colors.</textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15 p-0 font-weight-bold">Title</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <input  type="text" value="3. What colors do you like?"  class="form-control  text-box">
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-40">
                                            <div class="col-md-3">
                                                <h4 class="font-16 m-t-15 p-0 font-weight-bold">Option</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea   rows="3"   class="form-control text-h2">I like red, orange and brown colors.</textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-20">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15 p-0 font-weight-bold">Title</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <input   type="text" value="4. What colors do you like?"  class="form-control text-box">
                                            </div>
                                        </div>
                                        <div class="row form-group m-b-30">
                                            <div class="col-md-3">
                                                <h4 class="font-16  m-t-15 p-0 font-weight-bold">Option</h4>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea    rows="3"   class="form-control text-h2">I like red, orange and brown colors.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left m-t-20 m-l-20 m-r-20 align-self-center text-uppercase">project Brief</h5>
                                <a data-toggle="modal" href="" data-target=".project-brief" class="float-right m-t-20 m-l-20 m-r-20"><i class="fas fa-pencil-alt m-r-5"></i>Edit</a>
                                <div class="clearfix"></div>
                                <div class="m-t-10 p-20 no-block">
                                    <div id="accordion" class="panel-group">
                                        <div class="card m-b-10">
                                            <div class="card-header"> <a class="card-link active" data-toggle="collapse" href="#first-section"> 1. What business are you doing? <i class="mdi mdi-plus pull-right" data-name="mdi-plus"></i></a></div>
                                            <div id="first-section" class="collapse show" data-parent="#accordion">
                                                <div class="card-body font-16 p-20 text-dark"> In the past few years India has made attempts to get back several historic items. Some historians claim that the Kohinoor was taken away from India by force. </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-10">
                                            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#second-section"> 2. What colors do you like? <i class="mdi mdi-plus pull-right" data-name="mdi-plus"></i></a></div>
                                            <div id="second-section" class="collapse" data-parent="#accordion">
                                                <div class="card-body  font-16 text-dark"> In the past few years India has made attempts to get back several historic items. Some historians claim that the Kohinoor was taken away from India by force. </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-10">
                                            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#third-section"> 3. Do you have some style suggestions? <i class="mdi mdi-plus pull-right" data-name="mdi-plus"></i></a> </div>
                                            <div id="third-section" class="collapse" data-parent="#accordion">
                                                <div class="card-body  font-16 text-dark"> In the past few years India has made attempts to get back several historic items. Some historians claim that the Kohinoor was taken away from India by force. </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-10">
                                            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#third-4">5. Do you have a logotype or brand identity? <i class="mdi mdi-plus pull-right" data-name="mdi-plus"></i></a> </div>
                                            <div id="third-4" class="collapse" data-parent="#accordion">
                                                <div class="card-body  font-16 text-dark"> In the past few years India has made attempts to get back several historic items. Some historians claim that the Kohinoor was taken away from India by force. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left m-t-20 m-l-20 m-r-20 m-b-40  align-self-center text-uppercase">Attachments</h5>
                                <a href="" class="float-right m-t-20 m-l-20 m-r-20"><i class="fas fa-paperclip m-r-5"></i>Attach</a>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table color-table primary-table">
                                            <thead>
                                            <tr>
                                                <th>Document Name </th>
                                                <th>Attached by</th>
                                                <th>Date</th>
                                                <th>Size</th>
                                                <th class="icon-color"><i class="fa fa-download" aria-hidden="true"></i></th>
                                                <th class="icon-color2"><i class="fa fa-trash" aria-hidden="true"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="font-bold">1. Documentation.pdf</td>
                                                <td>Brian Summerhoold</td>
                                                <td>25.05.2017, 11:15</td>
                                                <td>2 Mb</td>
                                                <td class="icon-color op-5"><i class="fa fa-download" aria-hidden="true"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">2. Contract.pdf</td>
                                                <td>Brian Summerhoold</td>
                                                <td>25.05.2017, 12:03</td>
                                                <td>1.5 Mb</td>
                                                <td class="icon-color op-5"><i class="fa fa-download" aria-hidden="true"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">3. Logotype.psd</td>
                                                <td>Brian Summerhoold</td>
                                                <td>25.05.2017, 14:26</td>
                                                <td>2 Mb</td>
                                                <td class="icon-color op-5"><i class="fa fa-download" aria-hidden="true"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title float-left m-t-20 m-l-20 m-r-20 m-b-40  align-self-center text-uppercase">Meetings Schedule</h5>
                                        <a href="" class="float-right m-t-20 m-l-20 m-r-20 text-light-blue"><i class="flaticon-calendar m-r-5"></i></a>
                                        <div class="clearfix"></div>
                                        <div class="scrollbox">
                                            <div class="col-lg-12" id="slimtest4" style="height:330px;">
                                                <div class="table-responsive">
                                                    <div class="text-light-blue mb-1"> Monday, 26.06.2017 </div>
                                                    <table class="table color-table primary-table">
                                                        <tbody>
                                                        <tr>
                                                            <td><div class="radio radio-custom radio-primary p-0 m-0">
                                                                    <input type="radio" name="radio" id="radio12" value="option2">
                                                                    <label for="radio12"></label>
                                                                </div></td>
                                                            <td class="font-weight-bold">Meetings with Partners Nocla</td>
                                                            <td class="line-h">Astro meeting room,<br>
                                                                Sander St. 50/4</td>
                                                            <td>12:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="radio radio-custom  radio-primary p-0 m-0">
                                                                    <input type="radio" name="radio" id="radio13" value="option2">
                                                                    <label for="radio13"></label>
                                                                </div></td>
                                                            <td class="font-weight-bold">Meetings with Partners Nocla</td>
                                                            <td class="line-h">Astro meeting room,<br>
                                                                Sander St. 50/4</td>
                                                            <td>12:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="radio radio-custom  radio-primary p-0 m-0">
                                                                    <input type="radio" name="radio" id="radio15" value="option2">
                                                                    <label for="radio15"></label>
                                                                </div></td>
                                                            <td class="font-weight-bold">Meetings with Partners Nocla</td>
                                                            <td class="line-h">Astro meeting room,<br>
                                                                Sander St. 50/4</td>
                                                            <td>12:00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="clearfix"></div>
                                                    <div class="text-light-blue mb-1">Thurday, 27.06.2017</div>
                                                    <div class="clearfix"></div>
                                                    <table class="table color-table primary-table">
                                                        <tbody>
                                                        <tr>
                                                            <td class="font-bold"><div class="radio radio-custom  radio-primary">
                                                                    <input type="radio" name="radio" id="radio14" value="option2">
                                                                    <label for="radio14"></label>
                                                                </div></td>
                                                            <td class="font-weight-bold">Business lection in Hotel</td>
                                                            <td>Astro meeting room,<br>
                                                                Sander St. 50/4</td>
                                                            <td>12:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold"><div class="radio radio-custom  radio-primary">
                                                                    <input type="radio" name="radio" id="radio18" value="option2">
                                                                    <label for="radio18"></label>
                                                                </div></td>
                                                            <td class="font-weight-bold">Meetings with Partners Nocla</td>
                                                            <td>Astro meeting room,<br>
                                                                Sander St. 50/4</td>
                                                            <td>12:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold"><div class="radio radio-custom  radio-primary">
                                                                    <input type="radio" name="radio" id="radio16" value="option2">
                                                                    <label for="radio16"></label>
                                                                </div></td>
                                                            <td class="font-weight-bold">Meetings with Partners Nocla</td>
                                                            <td>Astro meeting room,<br>
                                                                Sander St. 50/4</td>
                                                            <td>12:00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div id="scrollbox">
                                    <div class="card m-0">
                                        <div class="card-body">
                                            <div class="col p-0" id="slimtest2" style="height:410px;">
                                                <h5 class="card-title float-left m-t-20 m-l-20 m-r-20 align-self-center text-uppercase">Comments</h5>
                                                <div class="clearfix"></div>
                                                <div class="row comments-bg1">
                                                    <div class="col-2 round-img text-center"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                                    <div class="col-10 comments">
                                                        <h3>Brian Summerhold </h3>
                                                        <h6> 26 July 2017, 05:15</h6>
                                                        <p class="line-h">On the meeting we said about<br>
                                                            time of project, money and other</p>
                                                    </div>
                                                </div>
                                                <div class="row comments-bg">
                                                    <div class="col-2 round-img text-center"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                                    <div class="col-10 comments">
                                                        <h3>Brian Summerhold </h3>
                                                        <h6> 26 July 2017, 05:15</h6>
                                                        <p class="line-h">On the meeting we said about<br>
                                                            time of project, money and other</p>
                                                    </div>
                                                </div>
                                                <div class="row comments-bg1">
                                                    <div class="col-2 round-img text-center"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                                    <div class="col-10 comments">
                                                        <h3>Brian Summerhold </h3>
                                                        <h6> 26 July 2017, 05:15</h6>
                                                        <p class="line-h">On the meeting we said about<br>
                                                            time of project, money and other</p>
                                                    </div>
                                                </div>
                                                <div class="row comments-bg1">
                                                    <div class="col-2 round-img text-center"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                                    <div class="col-10 comments">
                                                        <h3>Brian Summerhold </h3>
                                                        <h6> 26 July 2017, 05:15</h6>
                                                        <p class="line-h">On the meeting we said about<br>
                                                            time of project, money and other</p>
                                                    </div>
                                                </div>
                                                <div class="row comments-bg1">
                                                    <div class="col-2 round-img text-center"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                                    <div class="col-10 comments">
                                                        <h3>Brian Summerhold </h3>
                                                        <h6> 26 July 2017, 05:15</h6>
                                                        <p class="line-h">On the meeting we said about<br>
                                                            time of project, money and other</p>
                                                    </div>
                                                </div>
                                                <div class="row comments-bg1">
                                                    <div class="col-2 round-img text-center"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                                    <div class="col-10 comments">
                                                        <h3>Brian Summerhold </h3>
                                                        <h6> 26 July 2017, 05:15</h6>
                                                        <p class="line-h">On the meeting we said about<br>
                                                            time of project, money and other</p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tabpanel-->
            <!--tabpanel-->
            <div class="tab-pane  p-0" id="pro-task" role="tabpanel">
                <div class="modal fade assign-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modle-510">
                        <div class="modal-content">
                            <div class="modal-header pt-5  pl-4 pr-4 pb-0">
                                <h4 class="modal-title text-uppercase font-weight-bold" id="myLargeModalLabel2">Assign members</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body pt-3  pl-2 pr-2 pb-0">
                                <div class="table-responsive">
                                    <table class="table color-table primary-table table2">
                                        <tbody>
                                        <tr>
                                            <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                            <td class="font-weight-bold">Roberto Jovanni</td>
                                            <td>developer</td>
                                            <td><input  type="radio"></td>
                                        </tr>
                                        <tr>
                                            <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                            <td class="font-weight-bold">Roberto Jovanni</td>
                                            <td>developer</td>
                                            <td><input  type="radio"></td>
                                        </tr>
                                        <tr>
                                            <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                            <td class="font-weight-bold">Roberto Jovanni</td>
                                            <td>developer</td>
                                            <td><input  type="radio"></td>
                                        </tr>
                                        <tr>
                                            <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                            <td class="font-weight-bold">Roberto Jovanni</td>
                                            <td>developer</td>
                                            <td><input  type="radio"></td>
                                        </tr>
                                        <tr>
                                            <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                            <td class="font-weight-bold">Roberto Jovanni</td>
                                            <td>developer</td>
                                            <td><input  type="radio"></td>
                                        </tr>
                                        <tr>
                                            <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                            <td class="font-weight-bold">Roberto Jovanni</td>
                                            <td>developer</td>
                                            <td><input  type="radio"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="modal-footer  p-4">
                                <button type="button" class="btn btn-rounded btn-success">Save</button>
                                <button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class=" col-md-3 col-sm-3">
                                <h5 class="card-title float-left m-t-15 m-l-20 m-r-20 align-self-center text-uppercase">tasks</h5>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="pull-right">
                                    <div class="search"> <span class="fa fa-search"></span>
                                        <input placeholder="Search..">
                                    </div>
                                    <a  data-toggle="modal" href="" data-target=".assign-members"  class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Task</a></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 mt-4">
                            <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-12">
                                <li><i class="fa fa-circle m-r-5 font-9 text-primary"></i> New</li>
                                <li><i class="fa fa-circle m-r-5 font-9 text-warning"></i> In process</li>
                                <li><i class="fa fa-circle m-r-5 font-9 text-success"></i> Done</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table   class="table color-table primary-table">
                                    <thead>
                                    <tr>
                                        <th class="w-20"> </th>
                                        <th>Task Name</th>
                                        <th>Assignee</th>
                                        <th>Date</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0   font-medium font-12">
                                                <li><i class="fa fa-circle font-9  text-warning"></i></li>
                                            </ul></td>
                                        <td>Main menu, different variations </td>
                                        <td class="font-bold">Brian Summerhoold</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-success"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Assign member</a> <a class="dropdown-item" href="#">Edit task</a> <a class="dropdown-item text-light-danger" href="#">Delete task</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase  m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9  text-warning"></i></li>
                                            </ul></td>
                                        <td>Left, tight sidebar</td>
                                        <td class="font-bold">John Donovan</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-success"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-warning"></i></li>
                                            </ul></td>
                                        <td>Left, tight sidebar</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-primary"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Content search</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-primary"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-primary"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-success"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-primary"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-success"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-success"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-success"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td><ul class="list-inline  text-uppercase m-0  font-medium font-12">
                                                <li><i class="fa fa-circle font-9 text-success"></i></li>
                                            </ul></td>
                                        <td>Style guide</td>
                                        <td class="font-bold">Alice Brodwain</td>
                                        <td>26.06.2017, 04:02</td>
                                        <td class="text-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a href="#">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 page-n">Show: <a href="" class="active">10</a> <a href="#">20</a> <a href="#">50</a></div>
                                <div class="col-md-6 text-right page-n">Prev <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> ... <a href="#">10</a> <a href="#">11</a> <a href="#">12</a> <a href="#">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tabpanel-->
            <!--tabpanel-->
            <div class="tab-pane p-0" id="pro-members" role="tabpanel">
                <div class="modal fade add-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel3" aria-hidden="true">
                    <div class="modal-dialog modle-510">
                        <div class="modal-content">
                            <div class="modal-header pl-5 pt-5 pr-5 pb-0">
                                <h4 class="modal-title text-uppercase font-weight-bold" id="myLargeModalLabel3">ADD members</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body  p-5">
                                <div class="form-group row">
                                    <label class="control-label  text-dark font-weight-bold col-md-4">Profile photo</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="round-img"><img src="{{asset('assets/imgs/users/profile.jpg')}}" alt="user" class=""></div>
                                            </div>
                                            <div class="col-9"> <i class="fa fa-upload text-light-blue" aria-hidden="true"></i> <span class="text-light-blue">Upload photo</span><br>
                                                <span class="op-4">not more 1 Mb </span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Name"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Surname</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Surname"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Position</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Surname"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Email address</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Email address"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Phone number</label>
                                    <div class="col-md-8">
                                        <input  type="text"  placeholder="Phone number"  class="form-control">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer  p-4">
                                <button type="button" class="btn btn-rounded btn-success">Save</button>
                                <button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade edit-member" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modle-510">
                        <div class="modal-content">
                            <div class="modal-header pl-5 pt-5 pr-5 pb-0">
                                <h4 class="modal-title text-uppercase font-weight-bold">edit member</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body  p-5">
                                <div class="form-group row">
                                    <label class="control-label  text-dark font-weight-bold col-md-4">Profile photo</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div>
                                            </div>
                                            <div class="col-9"> <i class="fa fa-upload text-light-blue" aria-hidden="true"></i> <span class="text-light-blue">Upload photo</span><br>
                                                <span class="op-4">not more 1 Mb </span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Name"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Surname</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Surname"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Position</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Surname"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Email address</label>
                                    <div class="col-md-8">
                                        <input  type="text" placeholder="Email address"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="text-dark font-weight-bold col-md-4">Phone number</label>
                                    <div class="col-md-8">
                                        <input  type="text"  placeholder="Phone number"  class="form-control">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer  p-4">
                                <button type="button" class="btn btn-rounded btn-success">Save</button>
                                <button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <h5 class="card-title float-left m-t-20 m-l-20 m-r-20 m-b-40  align-self-center text-uppercase">Members</h5>
                            </div>
                            <div class="col-sm-9 col-md-9 col-lg-9 mb-4">
                                <div class="float-right">
                                    <div class="search"> <span class="fa fa-search"></span>
                                        <input placeholder="Search..">
                                    </div>
                                    <a data-toggle="modal" href="" data-target=".add-members"  class="btn waves-effect waves-light btn-rounded btn-primary float-right ml-4">Add Member</a></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table   class="table color-table primary-table">
                                    <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Member</th>
                                        <th>Posistion</th>
                                        <th>Email address</th>
                                        <th>Phone</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> John Donovan </td>
                                        <td>designer</td>
                                        <td>johnnydonovan@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> Alice Brodwain </td>
                                        <td>developer</td>
                                        <td>alicebrodwain@gmail.com</td>
                                        <td>+9 70 93 100 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> Samanta Yakobsen </td>
                                        <td>manager</td>
                                        <td>samantayak@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold">Brian Summerhoold</td>
                                        <td>developer</td>
                                        <td>briansummer@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> John Donovan </td>
                                        <td>designer</td>
                                        <td>johnnydonovan@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> John Donovan </td>
                                        <td>designer</td>
                                        <td>johnnydonovan@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold">Rebecca Raiden</td>
                                        <td>developer</td>
                                        <td>johnnydonovan@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold">Elon Frankson</td>
                                        <td>front-end developer</td>
                                        <td>elonelon@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold">Tobias MacKeaney</td>
                                        <td>back-end developer</td>
                                        <td>tobimackeaney@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> Jessica Sandmayer</td>
                                        <td>art director</td>
                                        <td>johnnydonovan@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold">Alexander Fray</td>
                                        <td>art director</td>
                                        <td>alexfray@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    <tr>
                                        <td ><div class="round-img"><img src="{{asset('assets/imgs/users/user-50x50.jpg')}}" alt="user" class=""></div></td>
                                        <td class="font-bold"> Roberto Jovanni</td>
                                        <td>developer</td>
                                        <td>roubertojovanni@gmail.com</td>
                                        <td>+9 70 93 123 500</td>
                                        <td class="text-light-blue"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu"> <a class="dropdown-item" data-toggle="modal" href="" data-target=".edit-member">Edit</a> <a class="dropdown-item" href="#">Send Message</a> <a class="dropdown-item text-light-danger" href="#">Delete</a> </div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 page-n">Show: <a href="" class="active">10</a> <a href="#">20</a> <a href="#">50</a></div>
                                <div class="col-md-6 text-right page-n">Prev <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> ... <a href="#">10</a> <a href="#">11</a> <a href="#">12</a> <a href="#">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tabpanel-->
            <!--tabpanel-->
            <div class="tab-pane p-0 active" id="pro-statistics" role="tabpanel">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="d-flex m-b-10 no-block">
                                            <h5 class="card-title m-b-0 align-self-center text-uppercase">tasks statistics</h5>
                                        </div>
                                        <ul class="list-inline m-b-10 text-uppercase lp-5 font-medium font-12">
                                            <li><i class="fa fa-square m-r-5 text-warning"></i> Done</li>
                                            <li><i class="fa fa-square m-r-5 text-pink"></i> In process</li>
                                            <li><i class="fa fa-square m-r-5 text-primary"></i> New </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-right">
                                        <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-12">
                                            <li>Last week</li>
                                            <li>Last month</li>
                                            <li><i class="flaticon-calendar text-primary font-16"></i></li>
                                        </ul>
                                    </div>
                                </div>                    <div class="clearfix"></div>
                                <div id="morris-area-chart"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!--tabpanel-->
        </div>
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
    <!--Morris JavaScript -->
    <script src="{{asset('plugins/vendors/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('plugins/vendors/morrisjs/morris.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Dashboard JS -->
    <script src="{{asset('assets/js/dashboard-projects.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('plugins/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script>
        $(function() {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 8,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
@endpush