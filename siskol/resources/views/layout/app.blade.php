<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="assets/imgs/favicon.png" sizes="32x32" type="image/png">
        <title>@yield('title') </title>
        <!-- style -->
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')
    </head>
    <body>
        <main>
            <div id="mta-page-loader-container" class="mta-loader-container style1">
                <div id="mta-page-loader" class="mta-loader">
                    <div class="inner"></div>
                    <img class="loader-logo" src="assets/images/loader-logo.png" style="width: 50px; height: 50px;" alt="Loader Logo">
                </div>
            </div>
            <header class="stick style1 logo-left">
                <div class="container d-flex flex-row justify-content-between flex-nowrap">
                    <div class="header-nav-wrap w-100">
                  <!-- navbar -->
                  @include('includes.navbar')
                    </div>
                </div>
            </header><!-- Header -->
            <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
                <span class="search-close-btn"><i class="metaicon-cancel-music"></i></span>
                <form>
                    <input type="text" placeholder="Search">
                </form>
            </div><!-- Header Search -->
            <div class="responsive-header w-100">
                <div class="responsive-topbar w-100">
                    <div class="container d-flex flex-wrap justify-content-between">
                        <div class="logo">
                            <a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo"></a>
                        </div><!-- Logo -->
                        <div class="menu-right-icons text-white d-flex flex-row align-items-center justify-content-end flex-nowrap">
                            <span class="responsive-menu-btn"><i class="fas fa-align-justify"></i></span>
                            <span class="search-btn"></span>
                            <div class="mini-cart">
                                <a href="javascript:void(0);" title="View your shopping cart"><i class="metaicon-cart"></i><span>3</span></a>
                                <div class="minicart-dropdown">
                                    <ul class="mb-0 list-unstyled w-100">
                                        <li>
                                            <div class="minicart-item d-flex flex-wrap w-100">
                                                <a href="shop-detail.html" title=""><img class="img-fluid" src="assets/images/resources/prod-img1-1.jpg" alt="Cart Image 1"></a>
                                                <div class="minicart-info">
                                                    <h6 class="mb-0"><a href="shop-detail.html" title="">5 SEO Secrets</a></h6>
                                                    <span class="price">$21.00</span>
                                                    <a class="remove-cart" href="javascript:void(0);" title=""><i class="metaicon-cancel-music"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="minicart-item d-flex flex-wrap w-100">
                                                <a href="shop-detail.html" title=""><img class="img-fluid" src="assets/images/resources/prod-img1-2.jpg" alt="Cart Image 2"></a>
                                                <div class="minicart-info">
                                                    <h6 class="mb-0"><a href="shop-detail.html" title="">Business SEO</a></h6>
                                                    <span class="price">$15.00</span>
                                                    <a class="remove-cart" href="javascript:void(0);" title=""><i class="metaicon-cancel-music"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="minicart-item d-flex flex-wrap w-100">
                                                <a href="shop-detail.html" title=""><img class="img-fluid" src="assets/images/resources/prod-img1-3.jpg" alt="Cart Image 3"></a>
                                                <div class="minicart-info">
                                                    <h6 class="mb-0"><a href="shop-detail.html" title="">Secrets Business</a></h6>
                                                    <span class="price">$14.00</span>
                                                    <a class="remove-cart" href="javascript:void(0);" title=""><i class="metaicon-cancel-music"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-block btns-total w-100">
                                        <span>Subtotal: <span class="price">$50.00</span></span>
                                        <div class="btns-wrap d-flex flex-wrap w-100">
                                            <a class="theme-btn fill-btn3" href="cart.html" title="">View Cart</a>
                                            <a class="theme-btn bordered-btn" href="checkout.html" title="">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="responsive-menu">
                    <div class="logo d-inline-block w-100">
                        <a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo2.png" alt="Logo"></a>
                    </div>
                    <ul class="mb-0 list-unstyled">
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="index.html" title="">Home 1</a></li>
                                <li><a href="index2.html" title="">Home 2</a></li>
                                <li><a href="index3.html" title="">Home 3</a></li>
                                <li><a href="index4.html" title="">Home 4</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="about.html" title="">About Us</a></li>
                                <li><a href="our-approaches.html" title="">Our Approaches</a></li>
                                <li><a href="services.html" title="">Our Services</a></li>
                                <li><a href="content-elements.html" title="">Content Elements</a></li>
                                <li><a href="pricing-plan.html" title="">Pricing Plans</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="masonry.html" title="">Masonry</a></li>
                                <li><a href="masonry-filters.html" title="">With Filter</a></li>
                                <li><a href="full-width.html" title="">Full Width</a></li>
                                <li><a href="2column.html" title="">Two Columns</a></li>
                                <li><a href="4column.html" title="">Four Columns</a></li>
                                <li><a href="gallery.html" title="">Gallery</a></li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Portfolio Singles</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="data-analysis.html" title="">Small Images</a></li>
                                        <li><a href="content-audit.html" title="">Big Images</a></li>
                                        <li><a href="new-strategies.html" title="">Slider</a></li>
                                        <li><a href="creative-campaigns.html" title="">Two Cols Gallery</a></li>
                                        <li><a href="market-intelligence.html" title="">Three Cols Gallery</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Blogs</a>
                            <ul class="children mb-0 list-unstyled">
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Blog</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="blog-checkerboard.html" title="">Checkerboard</a></li>
                                        <li><a href="blog-masonry.html" title="">Masonry</a></li>
                                        <li><a href="blog-masonry-full-width.html" title="">Masonry Full Width</a></li>
                                        <li><a href="blog-2column.html" title="">Two Columns</a></li>
                                        <li><a href="blog-3column.html" title="">Three Columns</a></li>
                                        <li><a href="blog-4column.html" title="">Four Columns</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Standard</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="blog-list-rightsidebar.html" title="">Large Images</a></li>
                                        <li><a href="blog-list-medium.html" title="">Medium Images</a></li>
                                        <li><a href="blog-list-small.html" title="">Small Images</a></li>
                                        <li><a href="blog-nosidebar.html" title="">Without Sidebar</a></li>
                                        <li><a href="blog-list-leftsidebar.html" title="">Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Post Types</a>
                                    <ul class="children mb-0 list-unstyled">
                                        <li><a href="blog-detail-audio.html" title="">Audio</a></li>
                                        <li><a href="blog-detail-link.html" title="">Link</a></li>
                                        <li><a href="blog-detail-quote.html" title="">Quote</a></li>
                                        <li><a href="blog-detail-image.html" title="">Image</a></li>
                                        <li><a href="blog-detail-video.html" title="">Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                            <ul class="children mb-0 list-unstyled">
                                <li><a href="shop.html" title="">Shop</a></li>
                                <li><a href="shop-detail.html" title="">Shop Detail</a></li>
                                <li><a href="cart.html" title="">Cart</a></li>
                                <li><a href="checkout.html" title="">Checkout</a></li>
                                <li><a href="shop-shortcodes.html" title="">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" title="">Contacts</a></li>
                    </ul>
                </div><!-- Responsive Menu -->
            </div><!-- Responsive Header -->
            @yield('content')
            <footer>
                <div class="w-100 pt-70 bg-color14 text-color15 position-relative">
                    <div class="scroll-top-btn position-absolute"><a href="javascript:void(0);" title=""><i class="metaicon-arrow-pointing-to-up"></i></a></div>
                    <div class="container">
                        <div class="footer-wrap d-flex flex-wrap w-100">
                            <div class="footer-about">
                                <div class="logo d-block">
                                    <a href="index.html" title="Home"><img class="img-fluid" src="assets/images/footer-logo.png" alt="Footer Logo"></a>
                                </div><!-- Logo -->
                                <p class="mb-0">Kita berada dalam misi untuk mempermudah sistem inventarisasi sekolah di seluruh Indonesia.</p>
                            </div><!-- Footer About -->
                            <div class="footer-widget-wrap">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-3">
                                        <div class="widget w-100">
                                            <h4 class="text-white">Contact</h4>
                                            <ul class="mb-0 list-unstyled">
                                                <li><a href="javascript:void(0);" title="">Kontak Kami</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-3">
                                        <div class="widget w-100">
                                            <h4 class="text-white">Links</h4>
                                            <ul class="mb-0 list-unstyled">
                                                <li><a href="about.html" title="">About us</a></li>
                                                <li><a href="contact.html" title="">Contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-3">
                                        <!--Newslatter Form-->
                                        <div class="widget w-100" id="email-form">
                                            <h4 class="text-white">Subscribe</h4>
                                            <form class="position-relative w-100" method="post" action="#" id="subscribe-form">
                                                <div class="form-group"><div class="response"></div></div>

                                                <input type="email" name="email" class="email" value="" placeholder="Your Email">
                                                <button type="button" id="subscribe-newslatters"><i class="metaicon-send-button"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Footer Wrap -->
                        <div class="footer-content-wrap align-items-center d-flex justify-content-between flex-wrap w-100">
                            <div class="footer-content-inner">
                                <ul class="mb-0 d-flex list-unstyled">
                                    <li class="text-white"><a href="8006000020" title=""><i class="fas fa-phone-alt text-color15"></i>+62 000 000 0000</a></li>
                                    <li class="text-white"><i class="far fa-map text-color15"></i>Bandung, Indonesia</li>
                                </ul>
                            </div>
                            <div class="scl-links2">
                                <a href="javascript:void(0);" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="javascript:void(0);" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0);" title="Youtube" target="_blank"><i class="fab fa-weixin"></i></a>
                            </div>
                        </div><!-- Footer Content Wrap -->
                        <div class="copyright w-100">
                            <p class="mb-0">Copyright &copy; 2021. SISKOL Team Reserved.</p>
                        </div><!-- Copyright -->
                    </div>
                </div>
            </footer>
        </main><!-- Main Wrapper -->
  @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
    </body> 
</html>    </body> 
</html>