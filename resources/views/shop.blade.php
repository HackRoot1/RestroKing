@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Shop', 'image' => 'bnr3.jpg'])
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
                                                    @foreach ($foodsCategories as $foodsCategory)
                                                        <li><a
                                                                href="{{ route('shop.view', $foodsCategory) }}">{{ $foodsCategory }}</a>
                                                        </li>
                                                    @endforeach
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
                            @foreach ($foods as $food)
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 m-b30">
                                    <div class="item-box shop-item style2">
                                        <div class="item-img">
                                            <img src="{{ asset('images/product/item1.jpg') }}" alt="">
                                            <span class="sale"><a href="{{ route('add.to.cart', $food->id) }}"> <i
                                                        class="ti-shopping-cart"></i></a></span>
                                            <div class="fav-btn"> <a href="{{ route('add.to.wishlist', $food->id) }}"><i class="ti-heart"></i></a></div>
                                        </div>
                                        <div class="item-info text-center">
                                            <h4 class="item-title"><a
                                                    href="{{ route('food.detail.view', Str::slug($food->name, '-')) }}">{{ $food->name }}</a>
                                            </h4>
                                            <h5 class="price text-primary">
                                                <del>{{ $food->price }}</del><span>${{ number_format($food->price - $food->price * ($food->discount / 100), 2) }}</span>
                                            </h5>
                                            <div class="cart-btn">
                                                <a href="{{ route('food.detail.view', Str::slug($food->name, '-')) }}"
                                                    class="btn btnhover radius-xl">
                                                    Buy Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $foods->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>

    </div>
    <!-- Content END-->
@endsection
