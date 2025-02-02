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
                                        <th>Add to cart </th>
                                        <th>Close</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wishlists as $item)
                                        <tr class="alert">
                                            <td class="product-item-img">
                                                @if ($item->foodslist->image->image)
                                                    <img src="{{ asset('/images/foods/thumb/' . $item->foodslist->image->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('/images/product/item1.jpg') }}" alt="">
                                                @endif
                                            </td>
                                            <td class="product-item-name">{{ $item->foodslist->name }}</td>
                                            <td class="product-item-price">${{ $item->foodslist->price }}</td>
                                            <td class="product-item-totle">
                                                <a href="{{ route('add.to.cart', $item->foodslist->id) }}"
                                                    class="btn btnhover">Add To Cart</a>
                                            </td>
                                            <td class="product-item-close">
                                                <a href="{{ route('delete.from.wishlist', $item->id) }}" aria-label="close"
                                                    class="ti-close"></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center py-5" colspan="5">You Don't have any Wishlist Items
                                                yet.
                                                <a href="{{ route('shop.view') }}">Go to Shop</a>
                                            </td>
                                        </tr>
                                    @endforelse

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
