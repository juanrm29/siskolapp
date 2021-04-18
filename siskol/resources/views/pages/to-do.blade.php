@extends('layouts.app')

@push('before-css')
    <!-- Page CSS -->
    <link href="{{asset('assets/css/pages/to-do.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet"
          type="text/css">
    <!-- summernotes CSS -->
    <link href="{{asset('plugins/vendors/summernote/dist/summernote.css')}}" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- To Do modal -->
    <!-- ============================================================== -->
    <div class="modal fade add-task" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modle-510">
            <div class="modal-content">
                <div class="modal-header p-30">
                    <h4 class="modal-title  text-uppercase font-weight-bold" id="myLargeModalLabel">Add task</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-30 pt-0">
                    <div class="row form-group mb-3">
                        <div class="col-md-6">
                            <h4 class="font-12  m-0 p-0 font-weight-bold">Title</h4>
                            <input type="text" class="form-control font-12">
                        </div>
                        <div class="col-md-6">
                            <h4 class="font-12  m-0 p-0 font-weight-bold">Title</h4>
                            <select class="form-control custom-select font-12" data-placeholder="Choose a Category"
                                    tabindex="1">
                                <option value="Category 1">Title</option>
                                <option value="Category 2">Title</option>
                                <option value="Category 3">Title</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <div class="col-md-6">
                            <h4 class="font-12  m-0 p-0 font-weight-bold">Priority</h4>
                            <input type="text" class="form-control font-12">
                        </div>
                        <div class="col-md-6">
                            <h4 class="font-12  m-0 p-0 font-weight-bold">Notify</h4>
                            <select class="form-control custom-select font-12" data-placeholder="Choose a Category"
                                    tabindex="1">
                                <option value="Category 1">Hour</option>
                                <option value="Category 2">Hour</option>
                                <option value="Category 3">Hour</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <div class="col-md-6">
                            <h4 class="font-12  m-0 p-0 font-weight-bold">Date</h4>
                            <input type="date" class="form-control date-icon">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="font-12  m-0 p-0 font-weight-bold ">Time from</h4>
                                    <select class="form-control custom-select font-12"
                                            data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">12:00</option>
                                        <option value="Category 2">12:00</option>
                                        <option value="Category 3">12:00</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="font-12  m-0 p-0 font-weight-bold ">Time to</h4>
                                    <select class="form-control custom-select font-12"
                                            data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">18:00</option>
                                        <option value="Category 2">18:00</option>
                                        <option value="Category 3">18:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <div class="col-md-12">
                            <h4 class="font-12  font-weight-bold">Description</h4>
                            <textarea class="form-control text-h">Description</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-success">Save</button>
                    <button type="button" data-dismiss="modal" aria-hidden="true"
                            class="btn btn-rounded  btn-secondary">Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Modal -->

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- box -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="card bg-none">
                    <div class="card-body no inbox-panel pb-5"><a href="" data-toggle="modal" data-target=".add-task"
                                                                  class="btn btn-rounded btn-primary m-b-20 waves-effect waves-light">Add
                            Task</a>
                        <hr class="mt-2 mb-2">
                        <ul class="list-group list-group-full">
                            <li class="list-group-item"><a href="javascript:void(0)"> <i
                                            class="mdi mdi-format-list-numbers"></i> All list </a></li>
                            <li class="list-group-item"><a href="javascript:void(0)"> <i class="mdi mdi-alert"></i>
                                    Priority </a></li>
                            <li class="list-group-item"><a href="javascript:void(0)"> <i
                                            class="mdi mdi-playlist-check"></i> Done </a></li>
                            <li class="list-group-item"><a href="javascript:void(0)"> <i
                                            class="mdi mdi-format-list-numbers"></i> Today </a></li>
                            <li class="list-group-item "><a href="javascript:void(0)"> <i class="mdi mdi-delete"></i>
                                    Trash </a></li>
                        </ul>
                        <hr class="mt-2 mb-2">
                        <h3 class="card-title m-t-10  p-l-15">Categories <i
                                    class="mdi mdi-plus-circle pull-right text-light-gray2"></i></h3>
                        <div class="list-group b-0 mail-list"><a href="#" class="list-group-item"><span
                                        class="fa fa-circle circle-tab text-info m-r-10"></span>Business</a> <a href="#"
                                                                                                                class="list-group-item"><span
                                        class="fa fa-circle circle-tab text-warning m-r-10"></span>Work</a> <a href="#"
                                                                                                               class="list-group-item"><span
                                        class="fa fa-circle circle-tab text-purple m-r-10"></span>Personal</a> <a
                                    href="#" class="list-group-item"><span
                                        class="fa fa-circle circle-tab text-danger m-r-10"></span>Vacation</a> <a
                                    href="#" class="list-group-item"><span
                                        class="fa fa-circle circle-tab text-success m-r-10"></span>Medicine</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="card panel-main o-income panel-refresh">
                    <div class="refresh-container">
                        <div class="preloader">
                            <div class="loader">
                                <div class="loader__figure"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body   bg-light-primary">
                        <button type="button" class="
btn btn-rounded  waves-effect waves-light btn-outline-primary ml-auto "><i class="fas fa-search"></i> Search
                        </button>
                        <div class="pull-right mt-2"><a href="#">Tuesday <strong>1 August 2017</strong> - Thursday
                                <strong>10 August 2017</strong> <i class="flaticon-calendar ml-3"></i></a></div>
                    </div>
                    <div class="card-body p-t-0  p-b-0">
                        <div class="row scrollbox">
                            <div class="col-lg-12 " id="slimtest4" style="height:440px;">
                                <div class="row m-0">
                                    <div class="inbox-center table-responsive">
                                        <table class="table table-hover no-wrap">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox0" value="check">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-danger circle-tab mr-3"></span>
                                                    Main menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox1" value="check">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-success circle-tab mr-3"></span>
                                                    Main menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox2" value="check">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-info circle-tab mr-3"></span> Main
                                                    menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-warning"><i class="fa fa-exclamation-triangle"
                                                                            aria-hidden="true"></i></td>
                                                <td class="text-light-blue"><i class="fas fa-pencil-alt m-r-5"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger"
                                                                                aria-hidden="true"></i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox3" value="check">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-warning circle-tab mr-3"></span>
                                                    Main menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox4" value="check">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-info circle-tab mr-3"></span> Main
                                                    menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox5" value="check">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-warning circle-tab mr-3"></span>
                                                    Main menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox6" value="check">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-info circle-tab mr-3"></span> Main
                                                    menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox7" value="check">
                                                        <label for="checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-warning circle-tab mr-3"></span>
                                                    Main menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox8" value="check">
                                                        <label for="checkbox8"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><span
                                                            class="fa fa-circle text-info circle-tab mr-3"></span> Main
                                                    menu, different variations
                                                </td>
                                                <td>13.07.2017</td>
                                                <td class="text-danger"><a href="#"><i
                                                                class="fa fa-exclamation-triangle"
                                                                aria-hidden="true"></i></a></td>
                                                <td class="text-light-blue"><a href="#"><i
                                                                class="fas fa-pencil-alt m-r-5"></i></a></td>
                                                <td class="icon-color2 op-5"><a href="#"><i
                                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                </td>
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
        <!-- Column -->
        @include('layouts.partials.footer')
    </div>
    <!-- ============================================================== -->
    <!-- End box -->
@endsection

@push('js')
    <script src="{{asset('plugins/vendors/summernote/dist/summernote.min.js')}}"></script>
    <script>
        $(function () {

            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

            $('.inline-editor').summernote({
                airMode: true
            });

        });

        window.edit = function () {
            $(".click2edit").summernote()
        },
            window.save = function () {
                $(".click2edit").summernote('destroy');
            }
    </script>
    <script>
        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>
    <script>
        $('#slimtest1, #slimtest2, #slimtest3, #slimtest4').perfectScrollbar();
    </script>
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Style switcher -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
