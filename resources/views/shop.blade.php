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
                            <form action="{{ route('shop.view') }}" method="GET">
                                @csrf
                                @method('GET')
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
                                                <div class="product-brand">
                                                    @foreach ($foodsCategories as $foodsCategory)
                                                        <div class="search-content">
                                                            <input type="checkbox" id="{{ $foodsCategory }}"
                                                                name="foodCategory[]" value="{{ $foodsCategory }}">
                                                            <label for="{{ $foodsCategory }}" class="search-content-area">
                                                                <span>{{ $foodsCategory }}</span>
                                                            </label>
                                                        </div>
                                                    @endforeach
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
                                                <div class="product-brand">
                                                    <div class="search-content">
                                                        <input id="price-range-0-200" name="priceRange" value="200"
                                                            type="radio">
                                                        <label for="price-range-0-200" class="search-content-area">0 -
                                                            200</label>
                                                    </div>
                                                    <div class="search-content">
                                                        <input id="price-range-200-400" name="priceRange" value="400"
                                                            type="radio">
                                                        <label for="price-range-200-400" class="search-content-area">200 -
                                                            400</label>
                                                    </div>
                                                    <div class="search-content">
                                                        <input id="price-range-above-400" name="priceRange" value="401"
                                                            type="radio">
                                                        <label for="price-range-above-400" class="search-content-area">Above
                                                            400</label>
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
                                <button type="submit" class="btn btn-hover">Apply Filters</button>
                            </form>
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
                                            <div class="fav-btn"> <a href="{{ route('add.to.wishlist', $food->id) }}"><i
                                                        class="ti-heart"></i></a></div>
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
