@extends('layouts.app')

@push('before-css')
    <!-- Page CSS -->
    <link href="{{asset('assets/css/pages/to-do.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet"
          type="text/css">
    <!-- summernotes CSS -->
    <link href="{{asset('plugins/vendors/summernote/dist/summernote.css')}}" rel="stylesheet"/>
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
            <div class="col-lg-3 col-md-3">
                <div class="card bg-none">
                    <div class="card-body no inbox-panel pb-5"><a href="" data-toggle="modal" data-target=".add-task"
                                                                  class="btn btn-rounded btn-primary m-b-20 waves-effect waves-light">Support</a>
                        <hr class="mt-2 mb-2">
                        <div class="list-group b-0 mail-list"><a href="#" class="list-group-item font-weight-bold">Version
                                1.1</a> <a href="#" class="list-group-item text-default">Version 1.2</a> <a href="#"
                                                                                                            class="list-group-item text-default">Version
                                1.3</a> <a href="#" class="list-group-item text-default">Version 2.0</a> <a href="#"
                                                                                                            class="list-group-item text-default">Version
                                2.1</a> <a href="#" class="list-group-item text-default">Version 2.2</a></div>
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
                    <div class="card-body card2">
                        <div class="row">
                            <div class="col-6 font-18 font-weight-bold text-uppercase">Version 1.1</div>
                            <div class="col-6 text-right font-16 font-weight-bold text-uppercase">15 June 2017</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row m-0">
                                    <p class="font-16"> Such large banknotes are not so popular in many countries. In
                                        the United States, the largest banknote is the $100 bill. After World War II the
                                        US stopped producing $500 and $1000 bills.</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th colspan="2" class="font-18 text-left">New components</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-primary pt-0 pb-0 pl-4 pr-4 ml-3">new</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Left sidebar
                                                    (Blog_list_sidebar.html)
                                                </td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-primary pt-0 pb-0 pl-4 pr-4 ml-3">new</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Instagram widget
                                                    (Blog_list_sidebar.html)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-primary pt-0 pb-0 pl-4 pr-4 ml-3">new</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Facebook widget
                                                    (Blog_list_sidebar.html)
                                                </td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-primary pt-0 pb-0 pl-4 pr-4 ml-3">new</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Large slider
                                                    (Shop_catolog.html)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-primary pt-0 pb-0 pl-4 pr-4 ml-3">new</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Footer variant with subscribe
                                                    panel (Main_page.html)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-primary pt-0 pb-0 pl-4 pr-4 ml-3">new</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Product page with description
                                                    (Product_page.html)
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th colspan="2" class="font-18 text-left">Plugins updated</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Main library -
                                                    host/home/library.js to <a href="#">v. 4.5.1 </a></td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">TinyMCE redactor -
                                                    host/home/redactors/TinyMCE to <a href="#">v. 3.5</a></td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Weather widget -
                                                    host/home/widgets/weather.js to <a href="#">v. 1.3.4</a></td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">TinyMCE redactor -
                                                    host/home/redactors/TinyMCE to <a href="">v. 3.5</a></td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Main library -
                                                    host/home/library.js to <a href="#">v. 4.5.1</a></td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Weather widget -
                                                    host/home/widgets/weather.js to <a href="#">v. 1.3.4</a></td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light bg-c btn-warning  pt-0 pb-0 pl-4 pr-4 ml-3">update</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">TinyMCE redactor -
                                                    host/home/redactors/TinyMCE to <a href="#">v. 3.5</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th colspan="2" class="font-18 text-left">Fixed bugs</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-success  pt-0 pb-0 pl-4 pr-4 ml-3">fixed</a>
                                                </td>
                                                <td class="text-dark font-weight-bold"> Feedback form (Contact.html)
                                                </td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-success  pt-0 pb-0 pl-4 pr-4 ml-3">fixed</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Buttons with icons
                                                    (Main_page.html)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-success  pt-0 pb-0 pl-4 pr-4 ml-3">fixed</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Select list in header
                                                    (Shop_catalog.html)
                                                </td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn-success  pt-0 pb-0 pl-4 pr-4 ml-3">fixed</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Buttons with icons
                                                    (Main_page.html)
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th colspan="2" class="font-18 text-left">Improvements</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn bg-purple text-white  pt-0 pb-0 pl-4 pr-4 ml-3">improved</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Quality of images in catalog
                                                    (Shop_catalog.html)
                                                </td>
                                            </tr>
                                            <tr class="bg-white-2">
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn bg-purple text-white  pt-0 pb-0 pl-4 pr-4 ml-3">improved</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Font size in forms
                                                    (Checkout.html)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50"><a href=""
                                                                  class="btn waves-effect waves-light btn bg-purple text-white  pt-0 pb-0 pl-4 pr-4 ml-3">improved</a>
                                                </td>
                                                <td class="text-dark font-weight-bold">Slider animation (Main.html)</td>
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
        </div>
    @include('layouts.partials.footer')
    <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End box -->
@endsection

@push('js')
@endpush

