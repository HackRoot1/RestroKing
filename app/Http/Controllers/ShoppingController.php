<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Foods;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;

class ShoppingController extends Controller
{
    public function shopView(String $category = null)
    {
        if (isset($category) && $category != null) {
            $foods = Foods::where('category', $category)->paginate(9);
        } else {
            $foods = Foods::paginate(9);
        }
        $foodsCategories = DB::table('foods')->distinct()->pluck('category');
        return view('shop', ['foods' => $foods, 'foodsCategories' => $foodsCategories]);
    }

    public function foodDetail(String $slug)
    {
        $foods = Foods::where('slug', $slug)->first();
        $relatedFoods = Foods::where('category', $foods->category)->get();
        return view('food-detail', ['foods' => $foods, 'relatedFoods' => $relatedFoods]);
    }

    public function cartView()
    {
        $cartItems = Cart::where('user_id', Auth::user()->id)->with('foodslist')->get();
        return view('cart', compact('cartItems'));
    }

    public function addToCart($id)
    {
        $cart = new Cart();
        $cart->user_id = Auth::id();
        $cart->food_id = $id;
        $cart->save();

        if (isset($cart)) {
            flash()->success('Item added to cart Successfully');
        } else {

            flash()->error('Please Try again');
        }
        return redirect()->back();
    }

    public function ordersView()
    {
        return view('orders');
    }
    public function wishlistsView()
    {
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->with('foodslist')->get();
        return view('wishlist', compact('wishlists'));
    }

    public function addToWishlist($id)
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::id();
        $wishlist->food_id = $id;
        $wishlist->save();

        if (isset($wishlist)) {
            flash()->success('Item added to wishlist Successfully');
        } else {
            flash()->error('error', 'Please Try again');
        }
        return redirect()->back();
    }

    public function menuView()
    {
        return view('menu');
    }
}
