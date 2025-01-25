@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Wishlist</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Wishlist</li>
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
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table check-tbl">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Product name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Add to cart </th>
                                        <th>Close</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="alert">
                                        <td class="product-item-img">
                                            <img src="images/product/thumb/item1.jpg" alt="">
                                        </td>
                                        <td class="product-item-name">Pizza</td>
                                        <td class="product-item-price">$28.00</td>
                                        <td class="product-item-quantity">
                                            <div class="quantity btn-quantity max-w80">
                                                <input id="demo_vertical2" type="text" value="1"
                                                    name="demo_vertical2" />
                                            </div>
                                        </td>
                                        <td class="product-item-totle">
                                            <a href="shop-cart.html" class="btn btnhover">Add To Cart</a>
                                        </td>
                                        <td class="product-item-close">
                                            <a href="javascript:void(0);" data-dismiss="alert" aria-label="close"
                                                class="ti-close"></a>
                                        </td>
                                    </tr>
                                    <tr class="alert">
                                        <td class="product-item-img">
                                            <img src="images/product/thumb/item2.jpg" alt="">
                                        </td>
                                        <td class="product-item-name">Burger</td>
                                        <td class="product-item-price">$28.00</td>
                                        <td class="product-item-quantity">
                                            <div class="quantity btn-quantity max-w80">
                                                <input id="demo_vertical3" type="text" value="1"
                                                    name="demo_vertical2" />
                                            </div>
                                        </td>
                                        <td class="product-item-totle">
                                            <a href="shop-cart.html" class="btn btnhover">Add To Cart</a>
                                        </td>
                                        <td class="product-item-close">
                                            <a href="javascript:void(0);" data-dismiss="alert" aria-label="close"
                                                class="ti-close"></a>
                                        </td>
                                    </tr>
                                    <tr class="alert">
                                        <td class="product-item-img">
                                            <img src="images/product/thumb/item3.jpg" alt="">
                                        </td>
                                        <td class="product-item-name">Cup Cake</td>
                                        <td class="product-item-price">$28.00</td>
                                        <td class="product-item-quantity">
                                            <div class="quantity btn-quantity max-w80">
                                                <input id="demo_vertical4" type="text" value="1"
                                                    name="demo_vertical2" />
                                            </div>
                                        </td>
                                        <td class="product-item-totle">
                                            <a href="shop-cart.html" class="btn btnhover">Add To Cart</a>
                                        </td>
                                        <td class="product-item-close">
                                            <a href="javascript:void(0);" data-dismiss="alert" aria-label="close"
                                                class="ti-close"></a>
                                        </td>
                                    </tr>
                                    <tr class="alert">
                                        <td class="product-item-img">
                                            <img src="images/product/thumb/item4.jpg" alt="">
                                        </td>
                                        <td class="product-item-name">Pizza</td>
                                        <td class="product-item-price">$28.00</td>
                                        <td class="product-item-quantity">
                                            <div class="quantity btn-quantity max-w80">
                                                <input id="demo_vertical5" type="text" value="1"
                                                    name="demo_vertical2" />
                                            </div>
                                        </td>
                                        <td class="product-item-totle">
                                            <a href="shop-cart.html" class="btn btnhover">Add To Cart</a>
                                        </td>
                                        <td class="product-item-close">
                                            <a href="javascript:void(0);" data-dismiss="alert" aria-label="close"
                                                class="ti-close"></a>
                                        </td>
                                    </tr>
                                    <tr class="alert">
                                        <td class="product-item-img">
                                            <img src="images/product/thumb/item5.jpg" alt="">
                                        </td>
                                        <td class="product-item-name">Burger</td>
                                        <td class="product-item-price">$28.00</td>
                                        <td class="product-item-quantity">
                                            <div class="quantity btn-quantity max-w80">
                                                <input id="demo_vertical7" type="text" value="1"
                                                    name="demo_vertical2" />
                                            </div>
                                        </td>
                                        <td class="product-item-totle">
                                            <a href="shop-cart.html" class="btn btnhover">Add To Cart</a>
                                        </td>
                                        <td class="product-item-close">
                                            <a href="javascript:void(0);" data-dismiss="alert" aria-label="close"
                                                class="ti-close"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>

    </div>
    <!-- Content END-->
@endsection
