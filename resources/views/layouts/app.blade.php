<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from restroking.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 08:08:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:title" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:description" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>RestroKing - Cakery & Bakery HTML5 Template</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-2.css') }}">

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <div class="ball-pulse-rise">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- header -->
        <header class="site-header header center mo-left header-style-2">
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion">
                            <a href="index.html" class="dez-page"><img src="{{ asset('images/logo-2.png') }}"
                                    alt=""></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
                            <div class="logo-header mostion">
                                <a href="index.html" class="dez-page"><img src="{{ asset('images/logo-2.png') }}"
                                        alt=""></a>
                            </div>
                            <ul class="nav navbar-nav nav1">
                                <li class="active"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a href="about-1.html">About Us</a></li>
                                <li><a href="about-1.html">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav nav2">

                                <li>
                                    <a href="javascript:void(0);">Shop <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('shop.view') }}">Shop</a></li>
                                        <li><a href="{{ route('cart.view') }}">Cart</a></li>
                                        <li><a href="{{ route('wishlist.view') }}">Wishlist</a></li>
                                        <li><a href="{{ route('orders.list.view') }}">My Orders</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Blogs</a>
                                </li>
                                @can('isUserCustomer')
                                    <li><a href="javascript:void(0);">{{ Auth::user()->firstname }}<i
                                                class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endcan
                                @cannot('isUserCustomer')
                                    <li>
                                        <a href="{{ route('login.view') }}">Log In</a>
                                    </li>
                                @endcannot
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->


        @yield('content')

        <!-- Footer -->
        <footer class="site-footer "
            style="background-image: url({{ asset('images/background/bg2.jpg') }}); background-size: cover;">
            <!-- Footer Top Part -->
            <div class="footer-top bg-line-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="widget widget_getintuch">
                                <h5 class="footer-title text-white">Contact Us</h5>
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <p>Marmora City, Vietnam</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p>0800-123456</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        <p>(+91) 0800-123456</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <p>info@example.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="widget recent-posts-entry">
                                <h4 class="footer-title">Recent Post</h4>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media radius-sm">
                                            <img src="{{ asset('images/blog/recent-blog/pic1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">The Background Of
                                                        Bakery Now</a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date"> <i class="la la-clock-o"></i><strong>March
                                                            25, 2023</strong> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media radius-sm">
                                            <img src="{{ asset('images/blog/recent-blog/pic2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">How Bakery Can
                                                        Increase Your Profit</a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date"> <i class="la la-clock-o"></i><strong>March
                                                            25, 2023</strong> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="widget widget_services border-0">
                                <h4 class="footer-title">Quick Links</h4>
                                <ul class="list-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="error-404.html">About</a></li>
                                    <li><a href="our-menu.html">Our Menu</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="blog-grid-2.html">Blog</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="contact-1.html">Contact</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="widget border-0">
                                <h4 class="footer-title">Opening Hours</h4>
                                <p class="m-b20">Our support available to help you 24 hours a day, seven days a week.
                                </p>
                                <ul class="work-hour-list">
                                    <li>
                                        <span class="day"><span>Monday to Friday</span></span>
                                        <span class="timing">7AM - 5PM</span>
                                    </li>
                                    <li>
                                        <span class="day"><span>Saturday</span></span>
                                        <span class="timing">10AM - 5PM</span>
                                    </li>
                                    <li>
                                        <span class="day"><span>Sunday</span></span>
                                        <span class="timing">Closed</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Part -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-left"> <span>Copyright © 2023 DexignZone. all rights
                                reserved.</span> </div>
                        <div class="col-lg-6 col-md-6 text-right">
                            <div class="widget-link">
                                <ul>
                                    <li><a href="about-1.html">About Us</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->
        <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('plugins/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- LIGHTGALLERY -->
    <script src="{{ asset('plugins/rangeslider/rangeslider.js') }}"></script><!-- Rangeslider -->
    <script src="{{ asset('js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->

    {{-- <script src="plugins/switcher/switcher.js"></script><!-- CUSTOM FUCTIONS  --> --}}
    <script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('script')
</body>

<!-- Mirrored from restroking.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 08:08:56 GMT -->

</html>
