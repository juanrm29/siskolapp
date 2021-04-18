@extends('layouts.app')

@push('before-css')
    <!-- page css -->
    <link href="{{asset('assets/css/pages/tab-page.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('assets/css/pages/file-upload.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
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
                        <h4 class="card-title  pull-left text-uppercase m-b-20 mt-3">Default tabs</h4>
                        <ul class="nav nav-pills pull-right m-b-20 mt-3">
                            <li class=" nav-item"><a href="#navpills-1" class="nav-link active" data-toggle="tab"
                                                     aria-expanded="false">About</a></li>
                            <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab"
                                                    aria-expanded="false">Services</a></li>
                            <li class="nav-item"><a href="#navpills-3" class="nav-link" data-toggle="tab"
                                                    aria-expanded="true">Reviews</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="clearfix"></div>
                        <div class="tab-content br-n pn mt-4">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24">
                                            <p>Use the classes <code>btn btn-default, btn-default, btn-default</code> to
                                                quickly create different kinds of buttons. Use the classes
                                                btn btn-default, btn-default, btn-default to quickly create
                                                different kinds of buttons. </p>
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>There, the snow stays soft and does not bind with other layers. In other
                                                cases, skiers, snowboarders or other alpine tourists can trigger an
                                                avalanche. </p>
                                            <p>As snow falls it builds up layer upon layer. After a certain time the
                                                layers harden and bond with one another. If they don’t the snow profile
                                                becomes unstable and soft layers can slide on top of harder ones. The
                                                composition of snow is an important factor. The composition of snow is
                                                an important factor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24">
                                            <p>Use the classes <code>btn btn-default, btn-default, btn-default</code> to
                                                quickly create different kinds of buttons. Use the classes
                                                btn btn-default, btn-default, btn-default to quickly create
                                                different kinds of buttons. </p>
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>There, the snow stays soft and does not bind with other layers. In other
                                                cases, skiers, snowboarders or other alpine tourists can trigger an
                                                avalanche. </p>
                                            <p>As snow falls it builds up layer upon layer. After a certain time the
                                                layers harden and bond with one another. If they don’t the snow profile
                                                becomes unstable and soft layers can slide on top of harder ones. The
                                                composition of After a certain time the layers harden and bond with one
                                                another. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-3" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24">
                                            <p>Use the classes <code>btn btn-default, btn-default, btn-default</code> to
                                                quickly create different kinds of buttons. Use the classes
                                                btn btn-default, btn-default, btn-default to quickly create
                                                different kinds of buttons. </p>
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>There, the snow stays soft and does not bind with other layers. In other
                                                cases, skiers, snowboarders or other alpine tourists can trigger an
                                                avalanche. </p>
                                            <p>As snow falls it builds up layer upon layer. After a certain time the
                                                layers harden and bond with one another. If they don’t the snow profile
                                                becomes unstable and soft layers can slide on top of harder ones. The
                                                composition of snow is an important factor. The composition of snow is
                                                an important factor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase  m-b-20 mt-3 pull-right">Left tabs</h4>
                        <ul class="nav nav-pills pull-left m-b-20 mt-3">
                            <li class=" nav-item"><a href="#navpills2-1" class="nav-link active" data-toggle="tab"
                                                     aria-expanded="false">About</a></li>
                            <li class="nav-item"><a href="#navpills2-2" class="nav-link" data-toggle="tab"
                                                    aria-expanded="false">Services</a></li>
                            <li class="nav-item"><a href="#navpills2-3" class="nav-link" data-toggle="tab"
                                                    aria-expanded="true">Reviews</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="clearfix"></div>
                        <div class="tab-content br-n pn">
                            <div id="navpills2-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24">
                                            <p>Use the classes <code>btn btn-default, btn-default, btn-default</code> to
                                                quickly create different kinds of buttons. Use the classes
                                                btn btn-default, btn-default, btn-default to quickly create
                                                different kinds of buttons. </p>
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>There, the snow stays soft and does not bind with other layers. In other
                                                cases, skiers, snowboarders or other alpine tourists can trigger an
                                                avalanche. </p>
                                            <p>As snow falls it builds up layer upon layer. After a certain time the
                                                layers harden and bond with one another. If they don’t the snow profile
                                                becomes unstable and soft layers can slide on top of harder ones. The
                                                composition of snow is an important factor. The composition of snow is
                                                an important factor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills2-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24">
                                            <p>Use the classes <code>btn btn-default, btn-default, btn-default</code> to
                                                quickly create different kinds of buttons. Use the classes
                                                btn btn-default, btn-default, btn-default to quickly create
                                                different kinds of buttons. </p>
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>There, the snow stays soft and does not bind with other layers. In other
                                                cases, skiers, snowboarders or other alpine tourists can trigger an
                                                avalanche. </p>
                                            <p>As snow falls it builds up layer upon layer. After a certain time the
                                                layers harden and bond with one another. If they don’t the snow profile
                                                becomes unstable and soft layers can slide on top of harder ones. The
                                                composition of After a certain time the layers harden and bond with one
                                                another. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills2-3" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24">
                                            <p>Use the classes <code>btn btn-default, btn-default, btn-default</code> to
                                                quickly create different kinds of buttons. Use the classes
                                                btn btn-default, btn-default, btn-default to quickly create
                                                different kinds of buttons. </p>
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>There, the snow stays soft and does not bind with other layers. In other
                                                cases, skiers, snowboarders or other alpine tourists can trigger an
                                                avalanche. </p>
                                            <p>As snow falls it builds up layer upon layer. After a certain time the
                                                layers harden and bond with one another. If they don’t the snow profile
                                                becomes unstable and soft layers can slide on top of harder ones. The
                                                composition of snow is an important factor. The composition of snow is
                                                an important factor.</p>
                                        </div>
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
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title  pull-left text-uppercase m-b-25">Pills</h4>
                        <ul class="nav nav-pills nav-pills-tablet pull-right m-t-0 m-b-40">
                            <li class=" nav-item"><a href="#navpills3-1" class="nav-link active" data-toggle="tab"
                                                     aria-expanded="false">About</a></li>
                            <li class="nav-item"><a href="#navpills3-2" class="nav-link" data-toggle="tab"
                                                    aria-expanded="false">Services</a></li>
                            <li class="nav-item"><a href="#navpills3-3" class="nav-link" data-toggle="tab"
                                                    aria-expanded="true">Reviews</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="tab-content br-n pn">
                            <div id="navpills3-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-14 text-light-gray lh-24 mb-5">Use the classes <code>btn
                                                btn-default, btn-default, btn-default</code> to quickly create different
                                            kinds of buttons. Use the classes <code>btn btn-default,
                                                btn-default</code>.
                                        </div>
                                        <div class="font-16 text-gray">
                                            <p>An avalanche is a large mass of snow that moves quickly down a mountain.
                                                It breaks loose from the area around it and collects more and more snow
                                                as it pushes downward. On steeper slopes the snow usually breaks off
                                                more quickly.</p>
                                            <p>Avalanches occur in mountainous regions, for example the Alps, Himalayas
                                                or the Rocky Mountains. They can reach speeds of over 100 km an hour and
                                                destroy forests and villages that are in their way. They can block roads
                                                and train tracks and make areas unreachable from the outside. Avalanches
                                                kill over a hundred people in Europe and North America every year,
                                                burying them below tons of snow. Once the snow is on the ground
                                                temperature changes its structure so that different layers of snow can
                                                form on the slope. On steeper slopes the snow usually breaks off more
                                                quickly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills3-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts
                                        Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                        cliche tempor, williamsburg carles vegan helvetica.
                                        <p><br/>
                                            Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu
                                            banh mi, qui irure terry richardson ex squid.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills3-3" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>There, the snow stays soft and does not bind with other layers. In other
                                            cases, skiers, snowboarders or other alpine tourists can trigger an
                                            avalanche. </p>
                                        <p>As snow falls it builds up layer upon layer. After a certain time the layers
                                            harden and bond with one another. If they don’t the snow profile becomes
                                            unstable and soft layers can slide on top of harder ones. The composition of
                                            snow is an important factor. The composition of snow is an important
                                            factor.</p>
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
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Default accordion</h4>
                        <h6 class="card-subtitle m-b-40 font-14">Use the classes <code>btn btn-default, btn-default,
                                btn-default. </code></h6>
                        <div id="accordion-1" class="accordion-sec accordion-coloured">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0  font-16" data-toggle="collapse"
                                                data-target="#collapse1" aria-expanded="true"
                                                aria-controls="collapseOne"><span>1. What business are you doing?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                     data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0 font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                                aria-controls="collapse2"><span>2. What colors do you like?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                                aria-controls="collapse3"> 3. What colors do you like? <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                                aria-controls="collapse4">
                                            <span>4. Do you have some style suggestions?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Primary accordion</h4>
                        <h6 class="card-subtitle m-b-40 font-14">Use the classes <code>btn btn-default,
                                btn-default</code> to quickly.</h6>
                        <div id="accordion" class="accordion-sec">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne"><span>1. What business are you doing?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo"><span>2. What colors do you like?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingthree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapsethree"
                                                aria-expanded="false" aria-controls="collapsethree"><span>3. What colors do you like?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapsethree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapsefour" aria-expanded="false"
                                                aria-controls="collapsefour"><span>4. Do you have some style suggestions?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
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
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">colored accordion</h4>
                        <h6 class="card-subtitle m-b-40 font-14">Use the classes <code>btn btn-default, btn-default,
                                btn-default.</code></h6>
                        <div id="accordion-2" class="accordion-sec accordion-coloured">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0  font-16 text-white"
                                                data-toggle="collapse" data-target="#collapse1-1" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            <span>1. What business are you doing?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse1-1" class="collapse show" aria-labelledby="heading1"
                                     data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0 font-16 text-white collapsed"
                                                data-toggle="collapse" data-target="#collapse2-2" aria-expanded="false"
                                                aria-controls="collapse2-2"><span>2. What colors do you like?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse2-2" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0 font-16 collapsed  text-white"
                                                data-toggle="collapse" data-target="#collapse3-3" aria-expanded="false"
                                                aria-controls="collapse3-3"><span>3. What colors do you like?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse3-3" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0 font-16 collapsed  text-white"
                                                data-toggle="collapse" data-target="#collapse4-4" aria-expanded="false"
                                                aria-controls="collapse4">
                                            <span>4. Do you have some style suggestions?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapse4-4" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Bordered accordion</h4>
                        <h6 class="card-subtitle m-b-40 font-14">Use the classes <code>btn btn-default,
                                btn-default</code> to quickly.</h6>
                        <div id="accordion-3" class="accordion-sec">
                            <div class="card">
                                <div class="card-header border  bg-transparent" id="headingOne-1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16" data-toggle="collapse"
                                                data-target="#collapseOne-1" aria-expanded="true"
                                                aria-controls="collapseOne-1">
                                            <span>1. What business are you doing?</span> <i
                                                    class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapseOne-1" class="collapse show border bg-transparent"
                                     aria-labelledby="headingOne-1" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border bg-transparent" id="headingOne-2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16" data-toggle="collapse"
                                                data-target="#collapseOne-2" aria-expanded="true"
                                                aria-controls="collapseOne-2"><span>2. What colors do you like?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapseOne-2" class="collapse border" aria-labelledby="headingOne-2"
                                     data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border bg-transparent" id="headingfour-3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapsefour-3"
                                                aria-expanded="false" aria-controls="collapsefour-3"><span>3. What colors do you like?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapsefour-3" class="collapse border" aria-labelledby="headingfour-3"
                                     data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border bg-transparent" id="headingfour-4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link p-10 pl-4 pr-4 m-0   font-16 collapsed"
                                                data-toggle="collapse" data-target="#collapsefour-4"
                                                aria-expanded="false" aria-controls="collapsefour-4"><span>4. Do you have some style suggestions?</span>
                                            <i class="mdi mdi-plus pull-right"></i></button>
                                    </h5>
                                </div>
                                <div id="collapsefour-4" class="collapse border bg-transparent"
                                     aria-labelledby="headingfour-4" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p class="p-10 m-0">In the past few years India has made attempts to get back
                                            several historic items. Some </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Column -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Pagination</h4>
                        <h6 class="card-subtitle m-b-40 font-14"> Use the classes <code>btn btn-default, btn-default,
                                btn-default</code> to quickly create different kinds of buttons. Use the classes <code>btn
                                btn-default,btn-default</code>. </h6>
                        <div class="page-n">Prev <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a>
                            ... <a href="#">10</a> <a href="#">11</a> <a href="#">12</a> <a href="#">Next</a></div>
                        <div class="row mt-3">
                            <div class="col-md-5">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item"><a class="page-link" href="#">11</a></li>
                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                    <li class="page-item"><a class="page-link bg-light-primary text-primary" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item"><a class="page-link" href="#">11</a></li>
                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                    <li class="page-item"><a class="page-link bg-primary text-white" href="#">Next</a>
                                    </li>
                                </ul>
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
                <div class="card mb-0">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Breadcrumbs with icons</h4>
                        <h6 class="card-subtitle m-b-40 font-14"> Use the classes <code>btn btn-default, btn-default,
                                btn-default</code> to quickly create different kinds of buttons. Use the classes <code>btn
                                btn-default</code>. </h6>
                        <div class="bg2 mb-3 cssmenu">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                        <div class="mb-3 cssmenu">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                        <div class="mb-3 cssmenu3">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu4">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-transparent">
                    <div class="card-body font-13">
                        <div class="cssmenu bg2 mb-3">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu2 mb-3">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu3 mb-3">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu4">
                            <ul>
                                <li><a href="#"><i class="mdi mdi-store"></i> E-commerce</a></li>
                                <li><a href="#"><i class="mdi mdi-calendar-text"></i> Order </a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-cart"></i> Orders page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-md-12">
                <div class="card  mb-0">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Breadcrumbs without icons</h4>
                        <h6 class="card-subtitle m-b-40 font-14"> Use the classes <code>btn btn-default, btn-default,
                                btn-default</code> to quickly create different kinds of buttons. Use the classes <code>
                                btn btn-default</code>. </h6>
                        <div class="cssmenu bg2 mb-3">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu2 mb-3">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                        <div class="mb-3 cssmenu3">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                        <div class="mb-3 cssmenu4">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-transparent">
                    <div class="card-body font-13">
                        <div class="bg2 mb-3 cssmenu">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu2 mb-3">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu3 mb-3">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                        <div class="cssmenu4 mb-3">
                            <ul>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Orders</a></li>
                                <li class="active"><a href="#">Order page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="clear"></div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body font-13">
                        <h4 class="card-title text-uppercase m-b-40">Alerts with close</h4>
                        <h6 class="card-subtitle m-b-40 font-14">Use the classes <code>btn btn-default,
                                btn-default</code>
                            to quickly.</h6>
                        <div>
                            <div class="alert alert-success font-16">Success! This action done successful
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i
                                            class="mdi mdi-close font-18"></i></button>
                            </div>
                            <div class="alert alert-danger font-16">Information! Know more about this action
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i
                                            class="mdi mdi-close font-18"></i></button>
                            </div>
                            <div class="alert alert-warning font-16">Warning! This action is not protected
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i
                                            class="mdi mdi-close font-18"></i></button>
                            </div>
                            <div class="alert alert-info font-16">Error! This action can not be completed
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i
                                            class="mdi mdi-close font-18"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase m-b-40">Alerts without close</h4>
                        <h6 class="card-subtitle m-b-40 font-16">Use the classes <code>btn btn-default,
                                btn-default</code>
                            to quickly.</h6>
                        <div>
                            <div class="alert alert-success font-16"><span>Success!</span> This action done successful
                            </div>
                            <div class="alert alert-info  font-16">Information! Know more about this action</div>
                            <div class="alert alert-warning  font-16"> Warning! This action is not protected</div>
                            <div class="alert alert-danger  font-16"> Error! This action can not be completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body font-13">
                <h4 class="card-title text-uppercase m-b-40">Alerts with close</h4>
                <h6 class="card-subtitle m-b-40 font-14">Use the classes <code>btn btn-default, btn-default</code> to
                    quickly.</h6>
                <div class="col-lg-7 col-md-12">
                    <div class="alert  font-16 shadow.css')}}"><span class="text-success"><i
                                    class="mdi mdi-check-circle font-18"></i> Success!</span> This action done
                        successful
                        <button type="button" class="close text-light-gray" data-dismiss="alert" aria-label="Close">
                            <i class="mdi mdi-close font-16"></i></button>
                    </div>
                    <div class="alert font-16 shadow.css')}}"><span class="text-primary"><i
                                    class="mdi mdi-information font-18"></i> Information!</span> Know more about this
                        action
                        <button type="button" class="close text-light-gray" data-dismiss="alert" aria-label="Close"><i
                                    class="mdi mdi-close font-16"></i></button>
                    </div>
                    <div class="alert  font-16 shadow.css')}}"><span class="text-warning"><i
                                    class="mdi mdi-alert-circle  font-18"></i> Warning!</span> This action is not
                        protected
                        <button type="button" class="close text-light-gray" data-dismiss="alert" aria-label="Close"><i
                                    class="mdi mdi-close font-16"></i></button>
                    </div>
                    <div class="alert font-16 shadow.css')}}"><span class="text-danger"><i
                                    class="mdi mdi-close-circle  font-18"></i>  Error! </span> This action can not be
                        completed
                        <button type="button" class="close text-light-gray" data-dismiss="alert"
                                aria-label="Close"><span
                                    aria-hidden="true"><i class="mdi mdi-close font-16"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
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
