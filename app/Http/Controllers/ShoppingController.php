<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function shopView() {
        return view('shop');
    }
    
    public function cartView() {
        return view('cart');
    }
    
    public function ordersView() {
        return view('orders');
    }
    public function wishlistsView() {
        return view('wishlist');
    }
    public function menuView() {
        return view('menu');
    }
}
