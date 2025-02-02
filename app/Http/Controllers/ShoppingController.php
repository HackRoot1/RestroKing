<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Foods;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\FoodCategories;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Auth;

class ShoppingController extends Controller
{
    public function shopView(Request $request)
    {
        $foods = Foods::query();
        if (isset($request->foodCategory) && $request->foodCategory != null) {
            $foods->whereIn('category', $request->foodCategory);
        }

        if (isset($request->priceRange) && $request->priceRange != null) {
            if ($request->priceRange == 200) {
                $foods->where('price', '<', '200');
            } else if ($request->priceRange == 400) {
                $foods->where('price', '<', '400')->where('price', '>', '200');
            } else if ($request->priceRange == 401) {
                $foods->where('price', '>', '400');
            }
        }
        $foods = $foods->with('categories')->with('image')->paginate(9);
        $foodsCategories = FoodCategories::get();
        return view('shop', ['foods' => $foods, 'foodsCategories' => $foodsCategories]);
    }

    public function foodDetail(String $slug)
    {
        $user = User::find(Auth::id());
        $foods = Foods::where('slug', $slug)->with('ratings.user')->first();
        $relatedFoods = Foods::where('category', $foods->category)->get();
        return view('food-detail', ['foods' => $foods, 'relatedFoods' => $relatedFoods, 'user' => $user]);
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

    public function ordersListView()
    {
        $ordersList = Order::where('user_id', Auth::id())
            ->with('foodslist')
            ->get();
        return view('orders-list', compact('ordersList'));
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

    public function checkoutOrderView(Request $request)
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

            if (isset($request->creditCardNumber)) {
                $order->cardNumber = $request->creditCardNumber;
                $order->cardVerificationNumber = $request->cvv;
            }

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


    public function addRating(Request $request)
    {

        $rating = new Testimonial();
        $rating->user_id = Auth::user()->id;
        $rating->food_id = $request->foodId;
        $rating->rating = $request->rating;
        $rating->testimonial = $request->feedback;
        $rating->save();

        if ($rating) {
            return response()->json([
                'status' => true,
                'message' => 'Thanks for your Feedback',
            ], 200);
        }
        return response()->json([
            'status' => false,
            'message' => 'Something Error',
        ], 404);
    }
}
