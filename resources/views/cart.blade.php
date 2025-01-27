@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Cart', 'image' => 'bnr3.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive m-b50">
                            <table class="table check-tbl">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Product name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Close</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr class="alert">
                                            <td class="product-item-img">
                                                <img src="images/product/thumb/item1.jpg" alt="">
                                            </td>
                                            <td class="product-item-name">{{ $item->foodslist->name }}</td>
                                            <td class="product-item-price">{{ $item->foodslist->price }}</td>
                                            <td class="product-item-quantity">
                                                <div class="quantity btn-quantity max-w80">
                                                    <input id="demo_vertical3" class="productQuantity" type="text"
                                                        value="1" name="productQuantity" />
                                                </div>
                                            </td>
                                            <td class="product-item-total">{{ $item->foodslist->price }}</td>
                                            <td class="product-item-close">
                                                <a href="{{ route('delete.from.cart', $item->id) }}" class="ti-close"></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 m-b30">
                        <form class="shop-form" id="shop-form">
                            @csrf
                            @method('POST')
                            <h3>Calculate Shipping</h3>
                            <div class="form-group">
                                <select>
                                    <option value="">Credit Card Type</option>
                                    <option value="">Another option</option>
                                    <option value="">A option</option>
                                    <option value="">Potato</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" placeholder="Credit Card Number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" placeholder="Card Verification Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" id="couponCode" class="form-control" placeholder="Coupon Code">
                            </div>
                            <div class="form-group">
                                <button class="btn btnhover" type="submit">Apply Coupon</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Cart Subtotal</h3>
                        <table class="table-bordered check-tbl">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <td id="orderSubtotal">125.96</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <td>Coupon</td>
                                    <td id="couponPrice">Not Applied</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td id="orderTotal">$506.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <button class="btn btnhover" type="button">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>

    </div>
    <!-- Content END-->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            function quantityPrice() {
                $(".alert").map((index, row) => {
                    let price = parseFloat($(row).find(".product-item-price").text());
                    let quantity = parseInt($(row).find(".productQuantity").val());
                    let totalPrice = (price * quantity)
                    $(row).find(".product-item-total").html(totalPrice);
                });
            }

            function orderSubTotal() {
                let sum = 0;
                $(".alert").map((index, row) => {
                    let price = parseFloat($(row).find(".product-item-total").text());
                    sum = parseFloat(sum + price);
                });
                $("#orderSubtotal").text(sum);
            }

            function orderTotal() {
                let sum = 0;
                let subTotal = $("#orderSubtotal").text();
                let couponPrice = parseFloat($("#couponPrice").text()) || 0;
                sum = parseFloat(subTotal - couponPrice);
                $("#orderTotal").text(sum);
            }

            quantityPrice();
            orderSubTotal();
            orderTotal();
            $(".productQuantity").on("change", function() {
                let couponCode = $("#couponCode").val();
                if (couponCode) {
                    $("#couponCode").val('');
                    $("#couponPrice").text("Not Applied");
                }
                quantityPrice();
                orderSubTotal();
                orderTotal();
            });


            $(document).on("submit", "#shop-form", function(e) {
                e.preventDefault();
                let couponCode = $("#couponCode").val();
                if (couponCode != '') {
                    $.ajax({
                        url: '/checkCoupon',
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            couponCode: couponCode
                        }),
                        success: function(response) {
                            $("#couponPrice").text(response.message + " " + response
                                .couponDiscount + "%")
                            let subTotal = $("#orderSubtotal").text();
                            let percentPrice = parseFloat((subTotal / 100) * response
                                .couponDiscount);
                            let total = parseFloat(subTotal - percentPrice);
                            $("#orderTotal").text(total);
                        },
                        error: function(xhr, status, error) {
                            console.log('Error' + xhr.responseText);
                        }
                    });
                }
            });

        });
    </script>
@endsection
