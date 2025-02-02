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
                                        <th>Size</th>
                                        <th>Toppings</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Close</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cartItems as $item)
                                        <tr class="alert">
                                            <td class="product-item-img">
                                                <img src="images/product/thumb/item1.jpg" alt="">
                                            </td>
                                            <td class="foodId" style="display: none">{{ $item->foodslist->id }}</td>
                                            <td class="product-item-name">{{ $item->foodslist->name }}</td>
                                            <td class="product-item-price">{{ $item->foodslist->price }}</td>
                                            <td class="product-item-size">
                                                <select name="productSize" class="productSize" class="text-black">
                                                    <option value="large">Large</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="small">Small</option>
                                                </select>
                                            </td>
                                            <td class="product-item-toppings">
                                                <select name="productToppings" class="productToppings" class="text-black">
                                                    <option value="medium">Medium</option>
                                                    <option value="veggies">Veggies</option>
                                                </select>
                                            </td>
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
                                    @empty
                                        <tr>
                                            <td class="text-center py-5" colspan="8">You Don't have any Cart Items yet.
                                                <a href="{{ route('shop.view') }}">Go to Shop</a></td>
                                        </tr>
                                    @endforelse

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
                            <div class="form-group">
                                <input type="text" id="couponCode" class="form-control"
                                    placeholder="Coupon Code (Optional)">
                                <span id="couponError" style="display: none"></span>
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
                            $("#couponPrice").html(response.message + " <span id='couponId'>" +
                                response
                                .couponDiscount + "</span>%")
                            let subTotal = $("#orderSubtotal").text();
                            let percentPrice = parseFloat((subTotal / 100) * response
                                .couponDiscount);
                            let total = parseFloat(subTotal - percentPrice);
                            $("#orderTotal").text(total);
                        },
                        error: function(xhr, status, error) {
                            $("#couponError").show();
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

            function makeOrder(orderData) {
                $.ajax({
                    url: '/makeOrder',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(orderData),
                    success: function(response) {
                        console.log(response);
                        location.href = '/orders-list';
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }

            $("#proceedCheckout").on("click", function() {
                let PaymentType = $("select[name='paymentMethod']").val();
                let foodId = [];
                let price = [];
                let quantity = [];
                let size = [];
                let toppings = [];
                let totalPrice = [];

                $(".alert").map((index, row) => {
                    let id = $(row).find(".foodId").text();
                    let foodPrice = parseFloat($(row).find(".product-item-price").text());
                    let foodQuantity = parseInt($(row).find(".productQuantity").val());
                    let productSize = $(row).find(".productSize").val();
                    let productToppings = $(row).find(".productToppings").val();
                    let productTotalPrice = parseInt($(row).find(".product-item-total").text());
                    foodId.push(id);
                    price.push(foodPrice);
                    quantity.push(foodQuantity);
                    size.push(productSize);
                    toppings.push(productToppings);
                    totalPrice.push(productTotalPrice);
                });

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

                if (PaymentType == 'POD') {
                    alert("Ordered with POD")
                    // Proceed further 
                    let orderSubTotal = $("#orderSubtotal").text();
                    let orderTotal = $("#orderSubtotal").text();
                    orderData.orderSubTotal = orderSubTotal;
                    orderData.orderTotal = orderTotal;
                    orderData.paymentType = PaymentType;
                    makeOrder(orderData);

                } else if (PaymentType == 'CCT') {
                    let creditCardNumber = $("#credit-card-number").val();
                    let cvv = $("#credit-card-verification").val();
                    if (creditCardNumber != '' && cvv != '') {
                        alert("Ordered with CCT");
                        // proceed further 
                        let orderSubTotal = $("#orderSubtotal").text();
                        let orderTotal = $("#orderSubtotal").text();
                        orderData.creditCardNumber = creditCardNumber;
                        orderData.cvv = cvv;
                        orderData.orderSubTotal = orderSubTotal;
                        orderData.orderTotal = orderTotal;
                        orderData.paymentType = PaymentType;
                        makeOrder(orderData);
                    } else {
                        alert("Fill Card details");
                    }
                }
            });

        });
    </script>
@endsection
