@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Shop Details', 'image' => 'bnr1.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            @include('layouts.popups')
            <!-- Product details -->
            <div class="section-full content-inner-1 bg-gray-light">
                <div class="container woo-entry">
                    <div class="row">
                        <div class="col-lg-6 m-b30">
                            <div class="product-gallery on-show-slider lightgallery" id="lightgallery">
                                <div class="dlab-box">
                                    <div class="dlab-thum-bx">
                                        <img src="{{ asset('images/product/item2.jpg') }}" alt="">
                                        <span data-exthumbimage="{{ asset('images/product/item2.jpg') }}"
                                            data-src="{{ asset('images/product/item2.jpg') }}" class="check-km"
                                            title="Image 1 Title will come here">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30">
                            <form method="post" class="cart sticky-top">
                                <div class="dlab-post-title">
                                    <h4 class="post-title">{{ $foods->name }}</h4>
                                    <p class="m-b10">{{ $foods->description }}</p>
                                    <div class="dlab-divider bg-gray tb15">
                                        <i class="icon-dot c-square"></i>
                                    </div>
                                </div>
                                <div class="relative">
                                    <h3 class="m-tb10">${{ $foods->price }} </h3>
                                    <div class="shop-item-rating">
                                        <span class="rating-bx">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span>4.5 Rating</span>
                                    </div>
                                </div>
                                <div class="shop-item-tage">
                                    <span>Tags :- </span>
                                    <a href="javascript:void(0);">Cake</a>
                                    <a href="javascript:void(0);">Coffee</a>
                                    <a href="javascript:void(0);">Pastry</a>
                                </div>
                                <div class="dlab-divider bg-gray tb15">
                                    <i class="icon-dot c-square"></i>
                                </div>
                                <div class="row">
                                    <div class="m-b30 col-md-7 col-sm-8">
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
                                    <div class="m-b30 col-md-5 col-sm-4">
                                        <h6>Select quantity</h6>
                                        <div class="quantity btn-quantity style-2">
                                            <input id="demo_vertical2" type="text" value="1"
                                                name="demo_vertical2" />
                                        </div>
                                    </div>
                                    <div class="m-b30 col-md-12 col-sm-12">
                                        <h6>Add toppings </h6>
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
                                <a class="btn btnhover" href="{{ route('add.to.cart', $foods->id) }}">
                                    <i class="ti-shopping-cart"></i>Add To Cart
                                </a>
                                <button class="btn btnhover">Buy Now
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dlab-tabs product-description tabs-site-button m-t30">
                                <ul class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#web-design-1" class="active"> Description</a></li>
                                    <li><a data-toggle="tab" href="#developement-1"> Review(1)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="web-design-1" class="tab-pane active">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</p>
                                        <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div id="developement-1" class="tab-pane">
                                        <div id="comments">
                                            <ol class="commentlist">
                                                <li class="comment">
                                                    <div class="comment_container">
                                                        <img class="avatar avatar-60 photo"
                                                            src="{{ asset('images/testimonials/pic1.jpg') }}"
                                                            alt="">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <div data-rating="3">
                                                                    <i class="fa fa-star" data-alt="1"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star" data-alt="2"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star-o" data-alt="3"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star-o" data-alt="4"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star-o" data-alt="5"
                                                                        title="regular"></i>
                                                                </div>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="author">Cobus Bester</strong>
                                                                <span> March 7, 2013</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment_container">
                                                        <img class="avatar avatar-60 photo"
                                                            src="{{ asset('images/testimonials/pic2.jpg') }}"
                                                            alt="">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <div data-rating="3">
                                                                    <i class="fa fa-star" data-alt="1"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star" data-alt="2"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star" data-alt="3"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star-o" data-alt="4"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star-o" data-alt="5"
                                                                        title="regular"></i>
                                                                </div>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="author">Cobus Bester</strong>
                                                                <span> March 7, 2013</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment_container">
                                                        <img class="avatar avatar-60 photo"
                                                            src="{{ asset('images/testimonials/pic3.jpg') }}"
                                                            alt="">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <div data-rating="3">
                                                                    <i class="fa fa-star" data-alt="1"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star" data-alt="2"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star" data-alt="3"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star" data-alt="4"
                                                                        title="regular"></i>
                                                                    <i class="fa fa-star-o" data-alt="5"
                                                                        title="regular"></i>
                                                                </div>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="author">Cobus Bester</strong>
                                                                <span> March 7, 2013</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                    <p>Your email address will not be published. Required fields are marked
                                                        *</p>
                                                    <form class="comment-form" method="post">
                                                        <div class="comment-form-rating">
                                                            <label class="pull-left m-r20">Your Rating</label>
                                                            <div class="rating-widget">
                                                                <!-- Rating Stars Box -->
                                                                <div class="rating-stars">
                                                                    <ul id="stars">
                                                                        <li class="star" title="Poor" data-value="1">
                                                                            <i class="fa fa-star fa-fw"></i>
                                                                        </li>
                                                                        <li class="star" title="Fair" data-value="2">
                                                                            <i class="fa fa-star fa-fw"></i>
                                                                        </li>
                                                                        <li class="star" title="Good" data-value="3">
                                                                            <i class="fa fa-star fa-fw"></i>
                                                                        </li>
                                                                        <li class="star" title="Excellent"
                                                                            data-value="4">
                                                                            <i class="fa fa-star fa-fw"></i>
                                                                        </li>
                                                                        <li class="star" title="WOW!!!" data-value="5">
                                                                            <i class="fa fa-star fa-fw"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-form-author">
                                                            <label>Name <span class="required">*</span></label>
                                                            <input type="text" aria-required="true" size="30"
                                                                value="" name="author" id="author">
                                                        </div>
                                                        <div class="comment-form-email">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input type="text" aria-required="true" size="30"
                                                                value="" name="email" id="email">
                                                        </div>
                                                        <div class="comment-form-comment">
                                                            <label>Your Review</label>
                                                            <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                        </div>
                                                        <div class="form-submit">
                                                            <input type="submit" value="Submit" class="btn"
                                                                id="submit" name="submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product details -->
            <!-- Shop -->
            <div class="section-full related-products content-inner bg-gray-light">
                <div class="container">
                    <h2 class="title">Related products</h2>
                    <div class="products-carousel owl-carousel owl-btn-center-lr owl-btn-3">
                        @foreach ($relatedFoods as $food)
                            <div class="item">
                                <div class="item-box shop-item">
                                    <div class="item-img">
                                        <img src="{{ asset('images/product/item2.jpg') }}" alt="">
                                        <span class="sale">Sale!</span>
                                        <div class="price">
                                            <del>$25.00</del> $35.00
                                        </div>
                                    </div>
                                    <div class="item-info text-center">
                                        <h4 class="item-title"><a
                                                href="{{ route('food.detail.view', $food->slug) }}">{{ $food->name }}</a>
                                        </h4>
                                        <a href="{{ route('add.to.cart', $food->id) }}" class="btn btnhover"><i
                                                class="ti-shopping-cart m-r5"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Shop End -->
        </div>
    </div>
    <!-- Content END -->
@endsection
