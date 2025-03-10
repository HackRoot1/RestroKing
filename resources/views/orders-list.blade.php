@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'My Orders', 'image' => 'bnr1.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i
                        class="fa fa-circle bg-white text-gray-dark"></i></div>
                <div class="row pb-4">
                    <div class="col-lg-12">
                        <h3>My Orders</h3>
                        <table class="table-bordered check-tbl">
                            <thead>
                                <tr>
                                    <th>IMAGE</th>
                                    <th>PRODUCT NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th>ORDER STATUS</th>
                                    <th>PAYMENT TYPE</th>
                                    <th>PAYMENT STATUS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ordersList as $order)
                                    <tr>
                                        <td>
                                            @if ($order->foodslist->image->image)
                                                <img src="{{ asset('/images/foods/thumb/' . $order->foodslist->image->image) }}"
                                                    alt="">
                                            @else
                                                <img src="{{ asset('/images/product/item1.jpg') }}" alt="">
                                            @endif
                                        </td>
                                        <td class="product-item-name">{{ $order->foodslist->name }}</td>
                                        <td class="product-item-price">{{ $order->total_price }}</td>
                                        <td class="product-item-quantity">{{ $order->quantity }}</td>
                                        <td class="product-item-total">{{ $order->totalOrderPrice }}</td>
                                        <td class="product-item-total"><button
                                                class="btn-status btn-success">Ordered</button></td>
                                        <td class="product-item-total">
                                            <div class="btn btn-status btn-danger">POD</div>
                                        </td>
                                        <td class="product-item-total">
                                            <div class="btn btn-status btn-danger">Pending</div>
                                        </td>
                                        <td class="product-item-total">
                                            <button class="btn-status">View</button>
                                            <button class="btn-status btn-danger cancel-order"
                                                data-orderid="{{ $order->id }}">Cancel</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center py-5" colspan="7">You Don't have any orders yet. <a
                                                href="{{ route('shop.view') }}">Go to Shop</a></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
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
            $(document).on("click", ".cancel-order", function() {
                let orderId = $(this).data('orderid');
                console.log(orderId);
                $.ajax({
                    url: '/cancel-order',
                    type: 'DELETE',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        orderId: orderId
                    }),
                    success: function(response) {
                        console.log(response)
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseJSON.message);
                        console.log(xhr.responseJSON.data);
                    }
                });
            });
        });
    </script>
@endsection
