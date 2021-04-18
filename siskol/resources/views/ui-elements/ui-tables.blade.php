@extends('layouts.app')

@push('before-css')
    <!-- JS Grid -->
    <link href="{{asset('plugins/vendors/jsgrid/jsgrid.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/vendors/jsgrid/jsgrid-theme.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/css/style-2.css')}}" rel="stylesheet">
    <!-- Footable CSS -->
    <link href="{{asset('assets/css/pages/footable.core.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h6 class="card-subtitle m-t-15 text-muted">Use the classes btn <code>btn</code>,
                    <code>btn-default</code>,
                    <code>btn-default</code> to quickly create different kinds of buttons..</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4 class="card-title text-uppercase m-b-0 pull-left">basic table</h4>
                            <div class="pull-right">
                                <button class="btn btn-rounded btn-primary m-b-10">Add Member</button>
                            </div>
                            <table id="example23"
                                   class="display nowrap table table m-t-30 table-hover2 contact-list footable-loaded footable">
                                <thead>
                                <tr class="table-header">
                                    <th>Member</th>
                                    <th>Position</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    <th class="op-0 sorting">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        John Donovan<br></td>
                                    <td>Designer</td>
                                    <td>johnnydonovan@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Alice Brodwain<br></td>
                                    <td>Developer</td>
                                    <td>alicebrodwain@gmail.com</td>
                                    <td>+9 70 45 100 450</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Samanta Yakobsen<br></td>
                                    <td>Manager</td>
                                    <td>samantayak@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Mark
                                        Frankson<br></td>
                                    <td>Manager</td>
                                    <td>mark@gmail.com</td>
                                    <td>+9 70 45 107 552</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Rebecca Raiden<br></td>
                                    <td>Developer</td>
                                    <td>rebecca1978@gmail.com</td>
                                    <td>+9 70 70 111 488</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Brian
                                        Summerhoold<br></td>
                                    <td>Developer</td>
                                    <td>briansummer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Alexander Fray
                                    </td>
                                    <td>Developer</td>
                                    <td>alexanderfray@gmail.com</td>
                                    <td>+9 70 45 100 450</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/profile-img.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title=""> Roberto Jovanni
                                    </td>
                                    <td>Manager</td>
                                    <td>robertojovanni@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Elon
                                        Frankson<br></td>
                                    <td>Manager</td>
                                    <td>elonelon@gmail.com</td>
                                    <td>+9 70 45 107 552</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Reese Raiden<br></td>
                                    <td>Developer</td>
                                    <td>rebecca1978@gmail.com</td>
                                    <td>+9 70 70 111 488</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Ian
                                        Summerhoold<br></td>
                                    <td>Developer</td>
                                    <td>iansummer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h6 class="card-subtitle m-t-15 text-muted">Use the classes <code>btn btn-default, btn-default,
                        btn-default</code> to quickly create different kinds of buttons.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive m-t-0">
                            <h4 class="card-title text-uppercase m-b-10">Striped rows with hover</h4>
                            <div class="pull-right">
                                <button class="btn btn-rounded btn-primary m-b-10">Add Member</button>
                            </div>
                            <table id="myTable"
                                   class="display nowrap table table m-t-30 table-hover2 contact-list footable-loaded footable">
                                <thead>
                                <tr class="table-header">
                                    <th>Member</th>
                                    <th>Position</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    <th class="op-0 sorting">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        John Donovan<br></td>
                                    <td>Designer</td>
                                    <td>johnnydonovan@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Alice Brodwain<br></td>
                                    <td>Developer</td>
                                    <td>alicebrodwain@gmail.com</td>
                                    <td>+9 70 45 100 450</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Samanta Yakobsen<br></td>
                                    <td>Manager</td>
                                    <td>samantayak@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Mark
                                        Frankson<br></td>
                                    <td>Manager</td>
                                    <td>mark@gmail.com</td>
                                    <td>+9 70 45 107 552</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Rebecca Raiden<br></td>
                                    <td>Developer</td>
                                    <td>rebecca1978@gmail.com</td>
                                    <td>+9 70 70 111 488</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Brian
                                        Summerhoold<br></td>
                                    <td>Developer</td>
                                    <td>briansummer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Alexander Fray
                                    </td>
                                    <td>Developer</td>
                                    <td>alexanderfray@gmail.com</td>
                                    <td>+9 70 45 100 450</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Roberto Jovanni
                                    </td>
                                    <td>Manager</td>
                                    <td>robertojovanni@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Elon
                                        Frankson<br></td>
                                    <td>Manager</td>
                                    <td>elonelon@gmail.com</td>
                                    <td>+9 70 45 107 552</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">
                                        Reese Raiden<br></td>
                                    <td>Developer</td>
                                    <td>rebecca1978@gmail.com</td>
                                    <td>+9 70 70 111 488</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><img
                                                src="{{asset('assets/imgs/users/user-50x50.jpg')}}"
                                                class="img-circle w-40 m-r-5" alt="" title="">Ian
                                        Summerhoold<br></td>
                                    <td>Developer</td>
                                    <td>iansummer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h6 class="card-subtitle m-t-15 text-muted">Use the classes <code>btn btn-default, btn-default,
                        btn-default</code> to quickly create different kinds of buttons.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive m-t-0">
                            <h4 class="card-title text-uppercase m-b-10">Contextual Table</h4>
                            <div class="pull-right">
                                <button class="btn btn-rounded btn-primary">Add Member</button>
                            </div>
                            <table id="myTable2"
                                   class="display nowrap table tabletable-hover2 contact-list footable-loaded footable m-t-30">
                                <thead>
                                <tr class="table-header">
                                    <th>Member</th>
                                    <th>Position</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    <th class="op-0 sorting">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-dark weight-600"><span
                                                class="fa fa-circle text-danger circle-tab mr-3"></span> Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><span
                                                class="fa fa-circle text-success circle-tab mr-3"></span> Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><span
                                                class="fa fa-circle text-success circle-tab mr-3"></span> Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><span
                                                class="fa fa-circle text-inverse circle-tab mr-3"></span> Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><span
                                                class="fa fa-circle text-warning circle-tab mr-3"></span> Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600"><span
                                                class="fa fa-circle text-success circle-tab mr-3"></span> Jessica
                                        Sandmayer<br></td>
                                    <td>Designer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h6 class="card-subtitle m-t-15 text-muted"> Use the classes <code>btn btn-default, btn-default,
                        btn-default</code> to quickly create different kinds of buttons. </h6>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive m-t-0">
                            <h4 class="card-title text-uppercase m-b-10">edit table</h4>
                            <div class="pull-right">
                                <button class="btn btn-rounded btn-primary">Add Member</button>
                            </div>
                            <table class="table m-t-30  table-bordered" id="editable-datatable">
                                <thead>
                                <tr class="table-header">
                                    <th>Member</th>
                                    <th>Position</th>
                                    <th>Email Address</th>
                                    <th>Phone</th>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-dark weight-600">John Donovan</td>
                                    <td>Designer</td>
                                    <td>johnnydonovan@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">alicebrodwain@gmail.com</td>
                                    <td>developer</td>
                                    <td>jessicasandmayer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Samanta Yakobsen</td>
                                    <td>manager</td>
                                    <td>samantayak@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Brian Summerhoold</td>
                                    <td>developer</td>
                                    <td>briansummer@gmail.com</td>
                                    <td>+9 70 93 123 500</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Rebecca Raiden</td>
                                    <td>developer</td>
                                    <td>rebecca1978@gmail.com</td>
                                    <td>+9 70 70 111 488</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Elon Frankson</td>
                                    <td>front-end developer</td>
                                    <td>elonelon@gmail.com</td>
                                    <td>+9 70 45 107 552</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Tobias MacKeaney</td>
                                    <td>back-end developer</td>
                                    <td>tobimackeaney@gmail.com</td>
                                    <td>+9 70 45 002 338</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Jessica Sandmayer</td>
                                    <td>art director</td>
                                    <td>sandmayerjess@gmail.com</td>
                                    <td>+9 70 70 102 348</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-dark weight-600">Roberto Jovanni</td>
                                    <td>developer</td>
                                    <td>roubertojovanni@gmail.com</td>
                                    <td>+9 70 97 173 018</td>
                                    <td><a href="" class="dropdown-toggle no-after" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v text-default op-5"></i></a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a
                                                    class="dropdown-item" href="#">Send Message</a> <a
                                                    class="dropdown-item"
                                                    href="#">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--edit Table with sidebar filters-->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h6 class="card-subtitle m-t-15 text-muted"> Use the classes <code>btn btn-default, btn-default,
                        btn-default</code> to quickly create different kinds of buttons. </h6>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive m-t-0">
                            <div class="row m-b-20">
                                <div class="col-md-6">
                                    <h4 class="card-title text-uppercase m-b-10">edit Table with sidebar filters</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="pull-right">
                                        <form class="form-search form-inline">
                                            <input type="text" class="search-query" placeholder="Search..."/>
                                        </form>
                                        <button class="btn btn-rounded btn-primary">Add Member</button>
                                    </div>
                                </div>
                            </div>
                            <div id="jsgrid_1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--edit Table with sidebar filters-->
        <!--edit Table with sidebar filters-->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h6 class="card-subtitle m-t-15 text-muted"> Use the classes <code>btn btn-default, btn-default,
                        btn-default</code> to quickly create different kinds of buttons. </h6>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive m-t-0">
                            <div class="row m-b-20">
                                <div class="col-md-6">
                                    <h4 class="card-title text-uppercase m-b-10">edit Table with top filters</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="pull-right">
                                        <form class="form-search form-inline">
                                            <input type="text" class="search-query" placeholder="Search..."/>
                                        </form>
                                        <button class="btn btn-rounded btn-primary">Add Member</button>
                                    </div>
                                </div>
                            </div>
                            <div id="jsgrid_2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.footer')
    </div>
    <!--edit Table with sidebar filters-->
    <!-- ============================================================== -->
    <!-- End box -->
@endsection

@push('js')
    <!-- This is data table -->
    <script src="{{asset('plugins/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 5
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 6,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });


            $('#myTable2').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 5
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 6,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });


            $('#myTable3').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 5
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 6,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
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
    <script>
        $(function () {
            $('#editable-datatable').DataTable();
        });
    </script>
    <!-- Popup message jquery -->
    <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Style switcher -->
    <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <!-- Editable -->
    <script src="{{asset('plugins/vendors/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/vendors/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins/vendors/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('plugins/vendors/tiny-editable/numeric-input-example.js')}}"></script>
    <!-- JSgrid table JavaScript -->
    <script src="{{asset('plugins/vendors/jsgrid/db.js')}}"></script>
    <script src="{{asset('plugins/vendors/jsgrid/jsgrid.min.js')}}"></script>
    <script src="{{asset('plugins/vendors/jsgrid/jsgrid-data.js')}}"></script>
@endpush
