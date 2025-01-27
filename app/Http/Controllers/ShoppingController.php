<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Foods;
use App\Models\Order;
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

        $wishlist = Wishlist::where('food_id', $id)->where('user_id', Auth::id())->first();

        if ($wishlist) {
            $wishlist->delete();
        }

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

    public function deleteCartItem($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();

        if (isset($cartItem)) {
            flash()->success('Item deleted from cart Successfully');
        } else {

            flash()->error('Please Try again');
        }
        return redirect()->back();
    }

    public function deleteWishlistItem($id)
    {
        $wishlistItem = Wishlist::find($id);
        $wishlistItem->delete();

        if (isset($wishlistItem)) {
            flash()->success('Item deleted from wishlist Successfully');
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

    public function chekoutOrderView(Request $request)
    {
        $orderedFood = $request->all();
        $food = Foods::where('id', $request->food_id)->first();
        return view('orders', compact('orderedFood', 'food'));
    }

    public function menuView()
    {
        return view('menu');
    }





    // API Request 
    public function checkCoupon(Request $request)
    {
        $coupon = Coupon::where('coupon_code', $request->couponCode)->first();

        if ($coupon) {
            return response()->json([
                'status' => true,
                'message' => 'Coupon Applied',
                'couponDiscount' => $coupon->discount,
            ], 200);
        }
        return response()->json([
            'status' => false,
            'message' => 'Coupon Expired Or Not Found',
        ], 404);
    }

    // API Request 
    public function makeOrder(Request $request)
    {
        // $foodId = implode(', ', $request->foodId);
        // $quantity = implode(', ', $request->quantity);
        // $size = implode(', ', $request->size);
        // $toppings = implode(', ', $request->toppings);
        // $totalPrice = implode(', ', $request->totalPrice);
        // $price = implode(', ', $request->price);

        for ($i = 0; $i < count($request->foodId); $i++) {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->food_id = $request->foodId[$i];
            $order->quantity = $request->quantity[$i];
            $order->size = $request->size[$i];
            $order->toppings = $request->toppings[$i];
            $order->total_price = $request->totalPrice[$i];
            $order->itemPrice = $request->price[$i];
            $order->subTotalOrderPrice = $request->orderSubTotal;
            $order->totalOrderPrice = $request->orderTotal;
            $order->paymentType = $request->paymentType;
            $order->couponDiscount = $request->couponId;
            $order->save();

            $cartItem = Cart::where('user_id', Auth::id())->where('food_id', $request->foodId[$i])->first();
            $cartItem->delete();
        }

        if ($order) {
            return response()->json([
                'status' => true,
                'message' => 'Coupon Applied',
            ], 200);
        }
        return response()->json([
            'status' => false,
            'message' => 'Coupon Expired Or Not Found',
        ], 404);
    }
}
