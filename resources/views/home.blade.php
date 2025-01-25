@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- contact area -->
        <div class="content-block">
            <!-- Slider -->
            <div class="main-slider owl-carousel owl-btn-center-lr bg-line-bottom">
                <div class="item">
                    <div class="slide" style="background-image:url(images/main-slider/slide1.jpg);">
                        <div class="content">
                            <span>Cakes & Bakery</span>
                            <h2 class="title">Welcome To Bakery</h2>
                            <h4 class="sub-title">The Best Cakes In New York</h4>
                            <a href="about-1.html" class="btn btnhover">About Us</a>
                            <a href="javascript:void(0);" class="btn white" data-toggle="modal"
                                data-target="#exampleModal">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide" style="background-image:url(images/main-slider/slide2.jpg);">
                        <div class="content">
                            <span>Cakes & Bakery</span>
                            <h2 class="title">Occasion Cakes</h2>
                            <h4 class="sub-title">The Best Coffee In China</h4>
                            <a href="about-1.html" class="btn btnhover">About Us</a>
                            <a href="javascript:void(0);" class="btn white" data-toggle="modal"
                                data-target="#exampleModal">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider END -->
            <!-- Subscribe Now -->
            <div class="modal fade subscribe-box" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="https://restroking.dexignzone.com/xhtml/script/mailchamp.php"
                        class="dzSubscribe modal-content" method="post">
                        <div class="modal-header">
                            <img src="images/bell.png" alt="" />
                            <h5 class="modal-title" id="exampleModalLabel">Subscribe Newsletter</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore
                                dolore.</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input name="dzEmail" id="SubscribeInput" required="required" class="form-control"
                                    placeholder="Your Email Address" type="email">
                                <div class="dzSubscribeMsg"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btnhover shadow">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Services -->
            <div class="section-full content-inner-3"
                style="background-image:url(images/background/bg5.jpg);  background-size:100%;">
                <div class="container">
                    <div class="row service-area1">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper text-center service-box1"
                                style="background-image: url(images/our-services/pic1.jpg)">
                                <div class="icon-content">
                                    <h2 class="dlab-tilte text-white">Macarons</h2>
                                    <p>Lorem Ipsum is simply</p>
                                    <div class="dlab-separator style1 bg-primary"></div>
                                    <a href="shop-product-details.html" class="btn btnhover">More details <i
                                            class="fa fa-angle-double-right m-l5"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper text-center service-box1"
                                style="background-image: url(images/our-services/pic2.jpg)">
                                <div class="icon-content">
                                    <h2 class="dlab-tilte text-white">Small Cakes</h2>
                                    <p>Lorem Ipsum is simply</p>
                                    <div class="dlab-separator style1 bg-primary"></div>
                                    <a href="shop-product-details.html" class="btn btnhover">More details <i
                                            class="fa fa-angle-double-right m-l5"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper text-center service-box1"
                                style="background-image: url(images/our-services/pic3.jpg)">
                                <div class="icon-content">
                                    <h2 class="dlab-tilte text-white">Occasion Cakes</h2>
                                    <p>Lorem Ipsum is simply </p>
                                    <div class="dlab-separator style1 bg-primary"></div>
                                    <a href="shop-product-details.html" class="btn btnhover">More details <i
                                            class="fa fa-angle-double-right m-l5"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper text-center service-box1"
                                style="background-image: url(images/our-services/pic4.jpg)">
                                <div class="icon-content">
                                    <h2 class="dlab-tilte text-white">Cupcakes</h2>
                                    <p>Lorem Ipsum is simply </p>
                                    <div class="dlab-separator style1 bg-primary"></div>
                                    <a href="shop-product-details.html" class="btn btnhover">More details <i
                                            class="fa fa-angle-double-right m-l5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head mb-0 text-center">
                                <div class="icon-bx icon-bx-xl">
                                    <img src="images/cake1.jpg" alt="">
                                </div>
                                <h3 class="text-primary">It’s a party and you’re invited</h3>
                                <p class="main-text">Join DexignZone <strong>Bakery</strong>™ to earn Gold level benefits
                                    like free Cakes and food, get free refills, pay and order with your phone, and more.</p>
                                <p>Exclusive deals on Cakes, delivered straight to your inbox <a
                                        href="javascript:void(0);">Join Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services End -->
            <!-- About Services -->
            <div class="section-full content-inner service-area2 bg-img-fix bg-line-top bg-line-bottom"
                style="background-image: url(images/background/bg4.jpg);  background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head text-center">
                                <h2 class="text-white">What Do We Offer For You?</h2>
                                <p class="text-bold">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                                <div class="dlab-separator style1 bg-primary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 m-b30">
                            <img src="images/about/pic1.jpg" class="img-cover radius-sm" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="row p-l30">
                                <div class="col-lg-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper text-white service-box2">
                                        <div class="icon-bx">
                                            <a href="javascript:void(0);" class="icon-cell"><img
                                                    src="images/icons/service-icon/icon2.png" alt=""></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Pancakes</h5>
                                            <p>Lorem Ipsum is dummy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper text-white service-box2">
                                        <div class="icon-bx">
                                            <a href="javascript:void(0);" class="icon-cell"><img
                                                    src="images/icons/service-icon/icon3.png" alt=""></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Muffin</h5>
                                            <p>Lorem Ipsum is dummy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper text-white service-box2">
                                        <div class="icon-bx">
                                            <a href="javascript:void(0);" class="icon-cell"><img
                                                    src="images/icons/service-icon/icon4.png" alt=""></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Pumpkin cakes</h5>
                                            <p>Lorem Ipsum is dummy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper text-white service-box2">
                                        <div class="icon-bx">
                                            <a href="javascript:void(0);" class="icon-cell"><img
                                                    src="images/icons/service-icon/icon5.png" alt=""></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Pumpkin Cupcakes</h5>
                                            <p>Lorem Ipsum is dummy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper text-white service-box2">
                                        <div class="icon-bx">
                                            <a href="javascript:void(0);" class="icon-cell"><img
                                                    src="images/icons/service-icon/icon5.png" alt=""></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Cake Services</h5>
                                            <p>Lorem Ipsum is dummy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper text-white service-box2">
                                        <div class="icon-bx">
                                            <a href="javascript:void(0);" class="icon-cell"><img
                                                    src="images/icons/service-icon/icon1.png" alt=""></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte">Birthday Cake</h5>
                                            <p>Lorem Ipsum is dummy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Services End -->
            <!-- Faq And Our Info -->
            <div class="section-full content-inner bg-gray"
                style="background-image:url(images/background/bg1.jpg);  background-size:100%;">
                <div class="container">
                    <div class="row faq-area1">
                        <div class="col-lg-6 m-b30">
                            <div class="m-r20">
                                <div class="section-head text-left">
                                    <h2>Sale And Delivery Points</h2>
                                    <p class="text-bold">Where to buy our high quality Cake</p>
                                    <div class="dlab-separator style1 bg-primary"></div>
                                </div>
                                <div class="clearfix">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                    <p class="text">First and foremost I am a chef, whether behind the stove at one of my
                                        Northern California restaurants or for the past 15 years in front of the Lorem Ipsum
                                        is simply <strong>Bakery</strong> dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley.</p>
                                    <a href="faq.html" class="btn btn-md btnhover shadow m-t30"><i
                                            class="fa fa-angle-right m-r10"></i>Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30">
                            <div class="dlab-accordion faq-style1" id="accordion001">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title">
                                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse1"
                                                aria-expanded="true">
                                                <i class="fa fa-cart-plus"></i> Where buy our Cake?</a>
                                        </h6>
                                    </div>
                                    <div id="collapse1" class="acod-body collapse show" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <img src="images/map.png" alt="">
                                            <ul class="list-check mb-0 primary">
                                                <li><a href="#">Germany (26)</a></li>
                                                <li><a href="#">France (19)</a></li>
                                                <li><a href="#">Itally (54)</a></li>
                                                <li><a href="#">England (76)</a></li>
                                                <li><a href="#">Canada (61)</a></li>
                                                <li><a href="#">Brazil (46)</a></li>
                                                <li><a href="#">Russia (17)</a></li>
                                                <li><a href="#">Africa (92)</a></li>
                                                <li><a href="#">USA (124)</a></li>
                                                <li><a href="#">Denmark (23)</a></li>
                                                <li><a href="#">Finland (41)</a></li>
                                                <li><a href="#">Asia (101)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title">
                                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse2"
                                                class="collapsed" aria-expanded="false">
                                                <i class="fa fa-address-book"></i> Become our dealer</a>
                                        </h6>
                                    </div>
                                    <div id="collapse2" class="acod-body collapse" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <img src="images/about/pic2.jpg" class="alignleft radius-md" alt="">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book. It has survived not only five centuries, Lorem
                                                Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                                an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title">
                                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse3"
                                                class="collapsed" aria-expanded="false">
                                                <i class="fa fa-cc-discover"></i> Get your discount</a>
                                        </h6>
                                    </div>
                                    <div id="collapse3" class="acod-body collapse" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s,</p>
                                            <p> when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book. It has survived not only five centuries, </p>
                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book. It has survived not only five centuries, </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faq And Our Info End -->
            <!-- Portpolio -->
            <div class="section-full bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="port-box1 text-white">
                                <div class="dlab-media">
                                    <img src="images/our-work/pic1.jpg" alt="">
                                </div>
                                <div class="dlab-info">
                                    <h2 class="title">vegan pie</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="port-box1 text-white">
                                <div class="dlab-media">
                                    <img src="images/our-work/pic2.jpg" alt="">
                                </div>
                                <div class="dlab-info">
                                    <h2 class="title">lemon cake</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="port-box1 text-white">
                                <div class="dlab-media">
                                    <img src="images/our-work/pic3.jpg" alt="">
                                </div>
                                <div class="dlab-info">
                                    <h2 class="title">wedding cake</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="port-box1 text-white m-md-b0 m-sm-b0">
                                <div class="dlab-media">
                                    <img src="images/our-work/pic2.jpg" alt="">
                                </div>
                                <div class="dlab-info">
                                    <h2 class="title">fruit cake</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portpolio End -->
            <!-- Counters -->
            <div class="section-full bg-white"
                style="background-image:url(images/background/bg5.jpg); background-size:100%;">
                <div class="container content-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head text-center">
                                <div class="icon-bx icon-bx-xl">
                                    <img src="images/cake1.jpg" alt="">
                                </div>
                                <h3>We Are Professional at Our Skills</h3>
                                <p>More than 2000+ customers trusted us</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1 text-center">
                                <div class="counter-num text-primary">
                                    <span class="counter">53</span>
                                    <small>+</small>
                                </div>
                                <span class="counter-text">Years of Experience</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1 text-center">
                                <div class="counter-num text-primary">
                                    <span class="counter">102</span>
                                </div>
                                <span class="counter-text">Awards Wins</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1 text-center">
                                <div class="counter-num text-primary">
                                    <span class="counter">36</span>
                                    <small>k</small>
                                </div>
                                <span class="counter-text">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1 text-center">
                                <div class="counter-num text-primary">
                                    <span class="counter">99</span>
                                </div>
                                <span class="counter-text">Perfect Products</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row m-lr0 about-area1">
                        <div class="col-lg-6 p-lr0">
                            <img class="img-cover" src="images/about/pic3.jpg" alt="">
                        </div>
                        <div class="col-lg-6 p-lr0 d-flex align-items-center text-center">
                            <div class="about-bx">
                                <div class="section-head text-center text-white">
                                    <h4 class="text-white">Limited Time Offer</h4>
                                    <p>Wedding Cake Sale !</p>
                                    <div class="icon-bx">
                                        <img src="images/icons/service-icon/icon2.png" alt="">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore</p>
                                <a href="about-1.html" class="btn-secondry white btnhover btn-md"><i
                                        class="fa fa-cart"></i>GET NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row client-area1 p-t80">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 m-b30">
                            <div class="client-logo" data-name="Bakery">
                                <img src="images/logos/logo1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 m-b30">
                            <div class="client-logo" data-name="Bakery">
                                <img src="images/logos/logo2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 m-b30">
                            <div class="client-logo" data-name="Bakery">
                                <img src="images/logos/logo3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 m-b30">
                            <div class="client-logo" data-name="Bakery">
                                <img src="images/logos/logo4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="client-logo" data-name="Bakery">
                                <img src="images/logos/logo5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="client-logo" data-name="Bakery">
                                <img src="images/logos/logo6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container content-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head text-center">
                                <div class="icon-bx icon-bx-xl">
                                    <img src="images/cake1.jpg" alt="">
                                </div>
                                <h3>From The Blog</h3>
                                <p>Latest news and updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post blog-grid blog-rounded">
                                <div class="dlab-post-media dlab-img-effect">
                                    <a href="blog-single-sidebar.html"><img src="images/blog/grid/pic1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="dlab-info p-a25">
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="blog-single-sidebar.html">Understand The
                                                Background Of Bakery Now.</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-folder">
                                                <i class="fa fa-folder-open-o"></i>
                                                <a href="javascript:void(0);">Cake</a>,
                                                <a href="javascript:void(0);">Biscuits</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post blog-grid blog-rounded">
                                <div class="dlab-post-media dlab-img-effect">
                                    <a href="blog-single-sidebar.html"><img src="images/blog/grid/pic2.jpg"
                                            alt=""></a>
                                </div>
                                <div class="dlab-info p-a25">
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="blog-single-sidebar.html">Seven Reliable Sources
                                                To Learn About Bakery.</a></h4>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-folder">
                                                <i class="fa fa-folder-open-o"></i>
                                                <a href="javascript:void(0);">Cake</a>,
                                                <a href="javascript:void(0);">Biscuits</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post blog-grid blog-rounded">
                                <div class="dlab-post-media dlab-img-effect">
                                    <a href="blog-single-sidebar.html"><img src="images/blog/grid/pic3.jpg"
                                            alt=""></a>
                                </div>
                                <div class="dlab-info p-a25">
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="blog-single-sidebar.html">Ten Places That You Can
                                                Find Bakery.</a></h4>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-folder">
                                                <i class="fa fa-folder-open-o"></i>
                                                <a href="javascript:void(0);">Cake</a>,
                                                <a href="javascript:void(0);">Biscuits</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
        </div>
    </div>
    <!-- Content END-->
@endsection
