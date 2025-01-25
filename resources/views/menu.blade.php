@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Our Menu', 'image' => 'bnr1.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Our Menu -->
            <div class="section-full bg-white content-inner"
                style="background-image:url(images/background/bg5.jpg); background-size:100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head text-center">
                                <div class="icon-bx icon-bx-xl">
                                    <img src="images/cake1.jpg" alt="">
                                </div>
                                <h3>Our Cakes Menu</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="menu-list m-b0">
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i> cookies<small>SPECIAL</small>
                                            </span>
                                        </h4>
                                        <p class="price">$2.55</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>fruit cake</span>
                                        </h4>
                                        <p class="price">$3.65</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>biscuits</span>
                                        </h4>
                                        <p class="price">$4.29</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>lemon cake</span>
                                        </h4>
                                        <p class="price">$2.99</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>berry tart</span>
                                        </h4>
                                        <p class="price">$5.15</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="menu-list">
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>wedding cake</span>
                                        </h4>
                                        <p class="price">$2.55</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>child cake</span>
                                        </h4>
                                        <p class="price">$3.65</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>vegan pie</span>
                                        </h4>
                                        <p class="price">$4.29</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>birthday cake</span>
                                        </h4>
                                        <p class="price">$2.99</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>pancake</span>
                                        </h4>
                                        <p class="price">$5.15</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Menu End -->
            <div class="section-full content-inner-2 bg-line-top bg-line-bottom"
                style="background-image: url(images/background/bg3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-head text-center m-b0">
                                <div class="icon-bx icon-bx-xl">
                                    <img src="images/icons/icon1.png" alt="">
                                </div>
                                <h3 class="text-white">Our Cakes Menu</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Menu -->
            <div class="section-full bg-white content-inner"
                style="background-image:url(images/background/bg1.jpg); background-size:100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="menu-list m-b0">
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i> cookies<small>SPECIAL</small>
                                            </span>
                                        </h4>
                                        <p class="price">$2.55</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>fruit cake</span>
                                        </h4>
                                        <p class="price">$3.65</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>biscuits</span>
                                        </h4>
                                        <p class="price">$4.29</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>lemon cake</span>
                                        </h4>
                                        <p class="price">$2.99</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>berry tart</span>
                                        </h4>
                                        <p class="price">$5.15</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="menu-list">
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>wedding cake</span>
                                        </h4>
                                        <p class="price">$2.55</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>child cake</span>
                                        </h4>
                                        <p class="price">$3.65</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>vegan pie</span>
                                        </h4>
                                        <p class="price">$4.29</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>birthday cake</span>
                                        </h4>
                                        <p class="price">$2.99</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                                <li>
                                    <div class="menu-item">
                                        <h4 class="title">
                                            <span><i class="la la-check-circle-o"></i>pancake</span>
                                        </h4>
                                        <p class="price">$5.15</p>
                                    </div>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur elit</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Menu End -->
        </div>
    </div>
    <!-- Content END-->
@endsection
