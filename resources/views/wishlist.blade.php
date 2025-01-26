@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Wishlist', 'image' => 'bnr2.jpg'])
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
                                    @foreach ($wishlists as $item)
                                        <tr class="alert">
                                            <td class="product-item-img">
                                                <img src="images/product/thumb/item1.jpg" alt="">
                                            </td>
                                            <td class="product-item-name">{{ $item->foodslist->name }}</td>
                                            <td class="product-item-price">${{ $item->foodslist->price }}</td>
                                            <td class="product-item-quantity">
                                                <div class="quantity btn-quantity max-w80">
                                                    <input id="demo_vertical2" type="text" value="1"
                                                        name="demo_vertical2" />
                                                </div>
                                            </td>
                                            <td class="product-item-totle">
                                                <a href="{{ route('add.to.cart', $item->foodslist->id) }}"
                                                    class="btn btnhover">Add To Cart</a>
                                            </td>
                                            <td class="product-item-close">
                                                <a href="javascript:void(0);" data-dismiss="alert" aria-label="close"
                                                    class="ti-close"></a>
                                            </td>
                                        </tr>
                                    @endforeach

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
