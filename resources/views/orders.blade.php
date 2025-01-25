@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Checkout', 'image' => 'bnr1.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <form class="shop-form">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 m-b30">
                            <h3>Billing & Shipping Address</h3>
                            <div class="form-group">
                                <select>
                                    <option value="">Åland Islands</option>
                                    <option value="">Afghanistan</option>
                                    <option value="">Albania</option>
                                    <option value="">Algeria</option>
                                    <option value="">Andorra</option>
                                    <option value="">Angola</option>
                                    <option value="">Anguilla</option>
                                    <option value="">Antarctica</option>
                                    <option value="">Antigua and Barbuda</option>
                                    <option value="">Argentina</option>
                                    <option value="">Armenia</option>
                                    <option value="">Aruba</option>
                                    <option value="">Australia</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Town / City">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="State / County">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Postcode / Zip">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <h4 class="cp" data-toggle="collapse" data-target="#create-an-account">Create an account
                                <i class="fa fa-angle-down"></i>
                            </h4>
                            <div id="create-an-account" class="collapse">
                                <p>Create an account by entering the information below. If you are a returning customer
                                    please login at the top of the page.</p>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30 m-md-b0">
                            <h3 class="cp" data-toggle="collapse" data-target="#different-address">Ship to a different
                                address <i class="fa fa-angle-down"></i></h3>
                            <div id="different-address" class="collapse">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you
                                    are a new customer please proceed to the Billing & Shipping section.</p>
                                <div class="form-group">
                                    <select>
                                        <option value="">Åland Islands</option>
                                        <option value="">Afghanistan</option>
                                        <option value="">Albania</option>
                                        <option value="">Algeria</option>
                                        <option value="">Andorra</option>
                                        <option value="">Angola</option>
                                        <option value="">Anguilla</option>
                                        <option value="">Antarctica</option>
                                        <option value="">Antigua and Barbuda</option>
                                        <option value="">Argentina</option>
                                        <option value="">Armenia</option>
                                        <option value="">Aruba</option>
                                        <option value="">Australia</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control"
                                            placeholder="Apartment, suite, unit etc.">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Town / City">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="State / County">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Postcode / Zip">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <p>Create an account by entering the information below. If you are a returning customer
                                    please login at the top of the page.</p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i
                        class="fa fa-circle bg-white text-gray-dark"></i></div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Your Order</h3>
                        <table class="table-bordered check-tbl">
                            <thead>
                                <tr>
                                    <th>IMAGE</th>
                                    <th>PRODUCT NAME</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="images/product/item1.jpg" alt=""></td>
                                    <td>Cup Cake</td>
                                    <td class="product-price">$28.00</td>
                                </tr>
                                <tr>
                                    <td><img src="images/product/item2.jpg" alt=""></td>
                                    <td>Pizza</td>
                                    <td class="product-price">$36.00</td>
                                </tr>
                                <tr>
                                    <td><img src="images/product/item3.jpg" alt=""></td>
                                    <td>Burger</td>
                                    <td class="product-price">$28.00</td>
                                </tr>
                                <tr>
                                    <td><img src="images/product/item4.jpg" alt=""></td>
                                    <td>Chow Mein</td>
                                    <td class="product-price">$36.00</td>
                                </tr>
                                <tr>
                                    <td><img src="images/product/item5.jpg" alt=""></td>
                                    <td>Pizza</td>
                                    <td class="product-price">$28.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <form class="shop-form">
                            <h3>Order Total</h3>
                            <table class="table-bordered check-tbl">
                                <tbody>
                                    <tr>
                                        <td>Order Subtotal</td>
                                        <td class="product-price">$125.96</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon</td>
                                        <td class="product-price">$28.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="product-price-total">$506.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Payment Method</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name on Card">
                            </div>
                            <div class="form-group">
                                <select>
                                    <option value="">Credit Card Type</option>
                                    <option value="">Another option</option>
                                    <option value="">A option</option>
                                    <option value="">Potato</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Credit Card Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Card Verification Number">
                            </div>
                            <div class="form-group">
                                <button class="btn button-lg btnhover btn-block" type="button">Place Order Now </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>

    </div>
    <!-- Content END-->
@endsection
