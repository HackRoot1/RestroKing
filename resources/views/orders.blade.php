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
                <div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i
                        class="fa fa-circle bg-white text-gray-dark"></i></div>
                <div class="row pb-4">
                    <div class="col-lg-12">
                        <h3>Your Order</h3>
                        <table class="table-bordered check-tbl">
                            <thead>
                                <tr>
                                    <th>IMAGE</th>
                                    <th>PRODUCT NAME</th>
                                    <th>TOPPINGS</th>
                                    <th>SIZE</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="alert">
                                    <td><img src="images/product/item1.jpg" alt=""></td>
                                    <td class="foodId" style="display: none">{{ $food->id }}</td>
                                    <td class="product-item-name">{{ $food->name }}</td>
                                    <td class="product-item-toppings">{{ $orderedFood['toppings'] }}</td>
                                    <td class="product-item-size">{{ $orderedFood['size'] }}</td>
                                    <td class="product-item-price">{{ $food->price }}</td>
                                    <td class="product-item-quantity">{{ $orderedFood['productQuantity'] }}</td>
                                    <td class="product-item-total">{{ $food->price * $orderedFood['productQuantity'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 m-b30">
                        <form class="shop-form" id="shop-form">
                            @csrf
                            @method('POST')
                            <h3>Calculate Shipping</h3>
                            <div class="form-group">
                                <select name="paymentMethod">
                                    <option value="CCT" selected>Credit Card Type</option>
                                    <option value="POD">Pay On Delivery</option>
                                </select>
                            </div>
                            <div class="row" id="cct-inputs">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="credit-card-number" id="credit-card-number"
                                        class="form-control" placeholder="Credit Card Number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" name="credit-card-verification" id="credit-card-verification"
                                        class="form-control" placeholder="Card Verification Number">
                                </div>
                            </div>
                            <div id="couponSection">
                                <div class="form-group">
                                    <input type="text" id="couponCode" class="form-control"
                                        placeholder="Coupon Code (Optional)">
                                    <span id="couponError" style="display: none"></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btnhover" type="submit">Apply Coupon</button>
                                </div>
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
                                    <td id="orderTotal">506.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <button class="btn btnhover" id="proceedCheckout" type="button">Proceed to Checkout</button>
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

            function orderSubTotal() {
                let price = parseFloat($(".product-item-total").text());
                $("#orderSubtotal").text(price);
            }

            function orderTotal() {
                let sum = 0;
                let subTotal = $("#orderSubtotal").text();
                let couponPrice = parseFloat($("#couponPrice").text()) || 0;
                sum = parseFloat(subTotal - couponPrice);
                $("#orderTotal").text(sum);
            }

            orderSubTotal();
            orderTotal();

            $(document).on("click", ".couponClose", function() {
                $("#couponPrice").text("Not Applied");
                $("#couponSection").show();
                let subTotal = $("#orderSubtotal").text();
                $("#orderTotal").text(subTotal);
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
                            $("#couponPrice").html("<span class='applied'>" + response.message +
                                " <span id='couponId'>" +
                                response
                                .couponDiscount +
                                "</span>%</span><span class='couponClose'><i class='fa fa-times text-white'></i></span>"
                            );
                            let subTotal = $("#orderSubtotal").text();
                            let percentPrice = parseFloat((subTotal / 100) * response
                                .couponDiscount);
                            let total = parseFloat(subTotal - percentPrice);
                            $("#orderTotal").text(total);
                            $("#couponSection").hide();
                        },
                        error: function(xhr, status, error) {
                            $("#couponError").show();
                            $("#couponPrice").text("Not Applied");
                            setTimeout(() => {
                                $("#couponError").hide();
                            }, 5000);
                            $("#couponError").html(xhr.responseJSON.message);
                        }
                    });
                }
            });

            // Proceed To Checkout
            function CheckPaymentType() {
                let PaymentType = $("select[name='paymentMethod']").val();
                if (PaymentType == 'POD') {
                    $("#cct-inputs").hide();
                } else if (PaymentType == 'CCT') {
                    $("#cct-inputs").show();
                }
            };

            $("select[name='paymentMethod']").on("change", function() {
                CheckPaymentType();
            });

            CheckPaymentType();

            $("#proceedCheckout").on("click", function() {
                let PaymentType = $("select[name='paymentMethod']").val();
                let foodPrice = parseFloat($(".alert").find(".product-item-price").text());
                let foodQuantity = parseInt($(".alert").find(".product-item-quantity").text());
                let productSize = $(".alert").find(".product-item-size").text();
                let productToppings = $(".alert").find(".product-item-toppings").text();
                let productTotalPrice = parseInt($(".alert").find(".product-item-total").text());
                let foodId = [$(".alert").find(".foodId").text()];

                let price = [foodPrice];
                let quantity = [foodQuantity];
                let size = [productSize];
                let toppings = [productToppings];
                let totalPrice = [productTotalPrice];


                if (foodId == '') {
                    alert("Please shop some food");
                    return
                }

                let orderData = {
                    foodId: foodId,
                    price: price,
                    quantity: quantity,
                    size: size,
                    toppings: toppings,
                    totalPrice: totalPrice,
                }

                let couponId = parseFloat($("#couponId").text()) || 0;
                if (couponId != 0) {
                    orderData.couponId = couponId;
                }

                let orderSubTotal = $("#orderSubtotal").text();
                let orderTotal = $("#orderTotal").text();
                orderData.orderSubTotal = orderSubTotal;
                orderData.orderTotal = orderTotal;

                if (PaymentType == 'POD') {
                    // Proceed further 
                    console.log(orderData);
                    orderData.paymentType = PaymentType;
                    makeOrder(orderData);

                } else if (PaymentType == 'CCT') {
                    let creditCardNumber = $("#credit-card-number").val();
                    let cvv = $("#credit-card-verification").val();
                    if (creditCardNumber != '' && cvv != '') {
                        // proceed further 
                        // let orderSubTotal = $("#orderSubtotal").text();
                        // let orderTotal = $("#orderTotal").text();
                        // orderData.orderSubTotal = orderSubTotal;
                        // orderData.orderTotal = orderTotal;

                        orderData.paymentType = PaymentType;
                        orderData.creditCardNumber = creditCardNumber;
                        orderData.cvv = cvv;
                        makeOrder(orderData);
                    } else {
                        alert("Fill Card details");
                    }
                }
            });

            function makeOrder(orderData) {
                $.ajax({
                    url: '/makeOrder',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(
                        orderData
                    ),
                    success: function(response) {
                        console.log(response);
                        // location.href = '/orders-list';
                    },
                    error: function(xhr, status, error) {
                        // location.reload();
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    </script>
@endsection
