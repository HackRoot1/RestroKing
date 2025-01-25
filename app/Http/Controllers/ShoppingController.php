<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function shopView()
    {
        $foods = Foods::get();
        return view('shop', ['foods' => $foods]);
    }

    public function foodDetail(String $slug)
    {
        $foods = Foods::where('slug', $slug)->first();
        // dd($foods);
        return view('shop', ['foods' => $foods]);
    }

    public function cartView()
    {
        return view('cart');
    }

    public function ordersView()
    {
        return view('orders');
    }
    public function wishlistsView()
    {
        return view('wishlist');
    }
    public function menuView()
    {
        return view('menu');
    }
}
