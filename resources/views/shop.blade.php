@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Shop Grid 3 Side Bar</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Grid 3 Side Bar</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 m-b30">
                        <aside class="side-bar shop-categories sticky-top">
                            <div class="dlab-accordion advanced-search toggle" id="accordion1">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#categories">
                                                Product categories
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="categories" class="acod-body collapse show">
                                        <div class="acod-content">
                                            <div class="widget_services">
                                                <ul>
                                                    <li><a href="shop-cart.html">Veggie Supreme</a></li>
                                                    <li><a href="shop-cart.html">The Funghi</a></li>
                                                    <li><a href="shop-cart.html">Duck Prosciutto</a></li>
                                                    <li><a href="shop-cart.html">Grilled Sausage</a></li>
                                                    <li><a href="shop-cart.html">Burger</a></li>
                                                    <li><a href="shop-cart.html">Brisket Onion</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#price-range">
                                                Price Range
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="price-range" class="acod-body collapse show">
                                        <div class="acod-content">
                                            <div class="price-slide-2 range-slider">
                                                <div class="price">
                                                    <input type="text" id="amount-2" class="amount" readonly=""
                                                        value="$400 - $4000" />
                                                    <div id="slider-range-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#size">
                                                Size
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="size" class="acod-body collapse show">
                                        <div class="acod-content">
                                            <h6>Product Size</h6>
                                            <div class="btn-group product-item-size" data-toggle="buttons">
                                                <label class="btn">
                                                    <input name="options" id="option7" type="radio"> Large
                                                </label>
                                                <label class="btn active">
                                                    <input name="options " id="option8" type="radio"> Medium
                                                </label>
                                                <label class="btn">
                                                    <input name="options" id="option9" type="radio"> Small
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#toppings">
                                                Add toppings :
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="toppings" class="acod-body collapse show">
                                        <div class="acod-content">
                                            <div class="btn-group product-item-size" data-toggle="buttons">
                                                <label class="btn">
                                                    <input name="options" id="veggies" type="radio"> Veggies
                                                </label>
                                                <label class="btn active">
                                                    <input name="options " id="medium" type="radio"> Medium
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#quantity">
                                                Quantity
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="quantity" class="acod-body collapse show">
                                        <div class="acod-content">
                                            <div class="btn-group product-item-size" data-toggle="buttons">
                                                <label class="btn">
                                                    <input name="options" id="qty1" type="radio"> 01
                                                </label>
                                                <label class="btn active">
                                                    <input name="options " id="qty2" type="radio"> 02
                                                </label>
                                                <label class="btn">
                                                    <input name="options" id="qty3" type="radio"> 03
                                                </label>
                                                <label class="btn">
                                                    <input name="options" id="qty4" type="radio"> 04
                                                </label>
                                                <label class="btn">
                                                    <input name="options " id="qty5" type="radio"> 05
                                                </label>
                                                <label class="btn">
                                                    <input name="options" id="qty6" type="radio"> 06
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#vendor" class="collapsed">
                                                Vendor
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="vendor" class="acod-body collapse">
                                        <div class="acod-content">
                                            <div class="product-brand">
                                                <div class="search-content">
                                                    <input id="seating1" type="checkbox">
                                                    <label for="seating1" class="search-content-area">Burger</label>
                                                </div>
                                                <div class="search-content">
                                                    <input id="seating2" type="checkbox">
                                                    <label for="seating2" class="search-content-area">Pizza</label>
                                                </div>
                                                <div class="search-content">
                                                    <input id="seating3" type="checkbox">
                                                    <label for="seating3" class="search-content-area">Fries</label>
                                                </div>
                                                <div class="search-content">
                                                    <input id="seating4" type="checkbox">
                                                    <label for="seating4" class="search-content-area">Cola</label>
                                                </div>
                                                <div class="search-content">
                                                    <input id="seating5" type="checkbox">
                                                    <label for="seating5" class="search-content-area">Hotdog</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h5 class="acod-title">
                                            <a data-toggle="collapse" href="#tags" class="collapsed">
                                                Popular Tags
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="tags" class="acod-body collapse">
                                        <div class="acod-content">
                                            <div class="widget_tag_cloud">
                                                <div class="tagcloud">
                                                    <a href="javascript:void(0);">Burger</a>
                                                    <a href="javascript:void(0);">Pizza</a>
                                                    <a href="javascript:void(0);">Fries</a>
                                                    <a href="javascript:void(0);">Cola</a>
                                                    <a href="javascript:void(0);">Hotdog</a>
                                                    <a href="javascript:void(0);">Cookies</a>
                                                    <a href="javascript:void(0);">Sandwich</a>
                                                    <a href="javascript:void(0);">Burger</a>
                                                    <a href="javascript:void(0);">Pizza</a>
                                                    <a href="javascript:void(0);">Fries</a>
                                                    <a href="javascript:void(0);">Cola</a>
                                                    <a href="javascript:void(0);">Hotdog</a>
                                                    <a href="javascript:void(0);">Cookies</a>
                                                    <a href="javascript:void(0);">Sandwich</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item1.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Cup Cake</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item2.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Pepperoni Pizza</a>
                                        </h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item3.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Burger</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item4.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Chow Mein</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item5.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Pepperoni Pizza</a>
                                        </h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item6.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Chicken Breast</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item7.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Kurkure</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item8.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Burger</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                <div class="item-box shop-item style2">
                                    <div class="item-img">
                                        <img src="images/product/item1.jpg" alt="">
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a href="shop-product-details.html">Cup Cake</a></h4>
                                        <h5 class="price text-primary"><del>45</del><span>$40</span></h5>
                                        <div class="cart-btn"><a href="shop-product-details.html"
                                                class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Add To
                                                Cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>

    </div>
    <!-- Content END-->
@endsection
