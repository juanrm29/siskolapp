@extends('layouts.app')

@push('before-css')
    <!-- This page CSS -->
    <!-- Calendar CSS -->
    <link href="{{asset('plugins/vendors/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
    <!-- Date picker plugins css -->
    <link href="{{asset('plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Calender box -->
            <!-- ============================================================== -->
            <div class="row calender-responsive">
                <!-- Column -->
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div id="datepicker-inline"></div>
                            <hr>
                            <div class="p-l-20 p-r-20  text-right"> <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn btn-rounded btn-primary m-b-20 waves-effect waves-light">Add event </a> </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-t-0">Categories <i class="mdi mdi-plus-circle pull-right text-light-gray2"></i></h4>
                            <div class="row">
                                <div class="col-md-12 p-0">
                                    <div id="calendar-events" class="">
                                        <div class="calendar-events" data-class="bg-info"><i class="fa fa-circle text-info"></i> Business</div>
                                        <div class="calendar-events" data-class="bg-primary"><i class="fa fa-circle text-danger"></i> Works</div>
                                        <div class="calendar-events " data-class="bg-success"><i class="fa fa-circle text-info"></i>Personal</div>
                                        <div class="calendar-events" data-class="bg-primary"><i class="fa fa-circle text-warning"></i>Vacation</div>
                                        <div class="calendar-events p-b-0" data-class="bg-purple"><i class="fa fa-circle text-success"></i>Medicine</div>
                                    </div>
                                    <!-- checkbox -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="card-body b-l p-0 calender-sidebar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <!-- Column -->
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal none-border" id="my-event">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add Event</strong></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-new-event">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add</strong> a category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                            <option value="inverse">Inverse</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-rounded  btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            <button type="button" class="btn btn-rounded  btn-primary waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
            <!-- ============================================================== -->
            <!-- End Calender box -->
            @include('layouts.partials.footer')
        </div>
@endsection

@push('js')
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Calendar JavaScript -->
    <script src="{{asset('plugins/vendors/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/moment/moment.js')}}"></script>
    <script src="{{asset('plugins/vendors/calendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/calendar/dist/cal-init.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{asset('plugins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>

        // Date Picker

        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });

    </script>
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush