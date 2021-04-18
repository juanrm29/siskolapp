@extends('layouts.app')

@push('before-css')
    <!-- Page CSS -->
    <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('plugins/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet"/>
    <!-- page css -->
    <link href="{{asset('assets/css/pages/file-upload.css')}}" rel="stylesheet">
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
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-25">basic forms 1</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <form class="form">
                            <div class="form-group m-t-40 row">
                                <label class="col-4 col-form-label">Passive form</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Active form</label>
                                <div class="col-8">
                                    <input class="form-control" type="search" value="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Disable form</label>
                                <div class="col-8">
                                    <fieldset disabled>
                                        <input type="text" id="disabledTextInput1" class="form-control"
                                               placeholder="Name">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Description</label>
                                <div class="col-8">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Action</label>
                                <div class="col-8">
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Form with Icon</label>
                                <div class="col-8">
                                    <div class="ico-addon addon-lg">
                                        <input class="form-control" value="Name">
                                        <label class="sl-icon-paper-clip glyphicon" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Form with Button</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" required="">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-25">Underline forms 1</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <form class="form bordered-input">
                            <div class="form-group m-t-40 row">
                                <label class="col-4 col-form-label">Passive form</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Active form</label>
                                <div class="col-8">
                                    <input class="form-control" type="search" value="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Disable form</label>
                                <div class="col-8">
                                    <fieldset disabled>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Description</label>
                                <div class="col-8">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Action</label>
                                <div class="col-8">
                                    <select class="custom-select col-12" id="inlineFormCustomSelect2">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Form with Icon</label>
                                <div class="col-8">
                                    <div class="ico-addon addon-lg">
                                        <input class="form-control" value="Name">
                                        <label class="sl-icon-paper-clip glyphicon" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Form with Button</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" required="">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-25">basic forms 2</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <form class="form">
                            <div class="form-group m-t-40 m-b-10 row">
                                <label class="col-12 col-form-label">Passive form</label>
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Active form</label>
                                <div class="col-12">
                                    <input class="form-control" type="search" value="Name">
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Disable form</label>
                                <div class="col-12">
                                    <fieldset disabled>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Description</label>
                                <div class="col-12">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Action</label>
                                <div class="col-12">
                                    <select class="custom-select col-12" id="inlineFormCustomSelect3">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Form with Icon</label>
                                <div class="col-12">
                                    <div class="ico-addon addon-lg">
                                        <input class="form-control" value="Name">
                                        <label class="sl-icon-paper-clip glyphicon" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Form with Button</label>
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" required="">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-25">basic forms 2</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <form class="form bordered-input">
                            <div class="form-group m-t-40 m-b-10 row">
                                <label class="col-12 col-form-label">Passive form</label>
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Active form</label>
                                <div class="col-12">
                                    <input class="form-control" type="search" value="Name">
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Disable form</label>
                                <div class="col-12">
                                    <fieldset disabled>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Description</label>
                                <div class="col-12">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label">Action</label>
                                <div class="col-12">
                                    <select class="custom-select col-12" id="inlineFormCustomSelect4">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label op-0">Form with Icon</label>
                                <div class="col-12">
                                    <div class="ico-addon addon-lg">
                                        <input class="form-control" type="text" placeholder="Form with Icon">
                                        <label class="sl-icon-paper-clip glyphicon" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-b-10">
                                <label class="col-12 col-form-label op-0">Form with Button</label>
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Form with Button"
                                               required="">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-25">checkboxes, radios & switches</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <div class="row m-t-30 p-r-20  p-l-20">
                            <div class="button-group col-lg-2 p-0 col-md-6 ">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox0" type="checkbox" checked>
                                    <label for="checkbox0"> Default checkbox </label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" checked>
                                    <label for="checkbox1"> Default checkbox </label>
                                </div>
                            </div>
                            <div class="button-group col-lg-2 p-0 col-md-6 ">
                                <div class="radio radio-custom  radio-primary">
                                    <input type="radio" name="radio" id="radio12" value="option2">
                                    <label for="radio12"> Custom </label>
                                </div>
                                <div class="radio radio-custom  radio-primary">
                                    <input type="radio" name="radio" id="radio1" value="option2">
                                    <label for="radio1"> Custom </label>
                                </div>
                            </div>
                            <div class="button-group col-lg-2 p-0 col-md-6 ">
                                <div class="checkbox checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7"> Custom checkbox </label>
                                </div>
                                <div class="checkbox checkbox-custom checkbox-circle">
                                    <input id="checkbox71" type="checkbox" checked>
                                    <label for="checkbox71"> Custom checkbox </label>
                                </div>
                            </div>
                            <div class="button-group col-lg-2 p-0 col-md-6 ">
                                <div class="switchery-demo m-b-30">
                                    <div class="m-b-5">
                                        <input type="checkbox" class="js-switch" data-color="#4886ff"
                                               data-size="small"/>
                                        <label> switcher default</label>
                                    </div>
                                    <div class="m-b-0">
                                        <input type="checkbox" checked class="js-switch" data-color="#4886ff"
                                               data-size="small"/>
                                        <label> switcher default</label>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group col-lg-2 p-0 col-md-6 ">
                                <div class="switchery-demo m-b-30">
                                    <div class="m-b-5">
                                        <input type="checkbox" class="js-switch" data-color="#7ad835"
                                               data-size="small"/>
                                        <label> Custom switcher</label>
                                    </div>
                                    <div class="m-b-0">
                                        <input type="checkbox" checked class="js-switch" data-color="#7ad835"
                                               data-size="small"/>
                                        <label> Custom switcher</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-25">validation states of basic forms</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <form class="form no-background">
                            <div class="form-group has-success m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Success
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-success" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-warning m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Warning
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-warning" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-success m-t-15 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Success
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-success" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-warning m-t-5 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Warning
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-warning" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-5 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-5 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-25">validation states of basic forms</h4>
                        <h6 class="card-subtitle m-b-5">Use the classes btn <code>btn</code>, <code>btn-default</code>,
                            <code>btn-default</code> to quickly create different kinds of buttons..</h6>
                        <form class="form bordered-input no-background">
                            <div class="form-group has-success m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Success
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-success" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-warning m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Warning
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-warning" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-15 m-b-10 row">
                                <label class="form-control-label col-4 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-success m-t-15 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Success
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-success" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-warning m-t-5 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Warning
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-warning" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-5 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group has-danger m-t-5 m-b-10 row">
                                <label class="form-control-label col-12 col-form-label text-dark weight-500">Danger
                                    Form</label>
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-danger" placeholder="Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-25">Tags</h4>
                        <div class="tags-default no-bordered m-b-40">
                            <input type="text"
                                   value="Visual, Inspiration, Manual, Liberty, Recommendations, Visual, Interpretation, Visal, Inspirtion, Manul, Librty, Recommendtions, Visal, Interprtation, manual, liberty, recommendations, visual "
                                   data-role="tagsinput" placeholder="add tags"/>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="tags-default m-t-40">
                            <input type="text" value="Manual" data-role="tagsinput" placeholder="add tags"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-25">Links</h4>
                        <h6 class="card-subtitle m-b-25">Use class <code>btn-block</code> to quickly create a block
                            button. </h6>
                        <div class="row font-16 m-b-20">
                            <div class="col-sm-4"><a href="" class="op-5">visited link</a></div>
                            <div class="col-sm-4"><a href="" class="underlined">default link</a></div>
                            <div class="col-sm-4"><a href="" class="active">active link</a></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-25">Pagination</h4>
                        <h6 class="card-subtitle m-b-40">Use class <code>btn-block</code> to quickly create a block
                            button. </h6>
                        <div class="row font-16">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-left b-0">
                                        <li class="page-item disabled"><a class="page-link b-0" href="#" tabindex="-1">Prev</a>
                                        </li>
                                        <li class="page-item  active"><a class="page-link b-0" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link b-0" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link b-0" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link b-0" href="#">10</a></li>
                                        <li class="page-item"><a class="page-link b-0" href="#">11</a></li>
                                        <li class="page-item"><a class="page-link b-0" href="#">Next</a></li>
                                    </ul>
                                </nav>
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
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{asset('plugins/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/switchery/dist/switchery.min.js')}}"></script>
    <script>
        $(function () {
// Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });

        });
    </script>
    <!-- Style switcher -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
