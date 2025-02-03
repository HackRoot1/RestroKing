<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Cart;
use App\Models\User;
use App\Models\Foods;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Wishlist;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\FoodCategories;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $foods = Foods::where('slug', $slug)->with('ratings.user.userImage')->first();
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
        $key = env('RAZORPAY_KEY');
        $orderedFood = $request->all();
        $food = Foods::where('id', $request->food_id)->first();
        return view('orders', compact('orderedFood', 'food', 'key'));
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
    // API Request 
    public function makeOrder(Request $request)
    {
        // Validate incoming request
        // $validations = Validator::make($request->all(), [
        //     'foodId' => 'required',
        //     'price' => 'required',
        //     'quantity' => 'required',
        //     'size' => 'required',
        //     'toppings' => 'nullable|array',
        //     'totalPrice' => 'required',
        //     'orderSubTotal' => 'required|numeric',
        //     'orderTotal' => 'required|numeric',
        //     'paymentType' => 'required|string',
        //     'couponId' => 'nullable|string',
        //     'creditCardNumber' => 'nullable|string',
        //     'cvv' => 'nullable|string',
        // ]);

        $userId = Auth::id();

        if (empty($request->foodId)) {
            return response()->json([
                'status' => false,
                'message' => 'No food items selected.',
            ], 400);
        }


        $foodIds = is_array($request->foodId) ? $request->foodId : [$request->foodId];
        $ordersCreated = [];

        foreach ($foodIds as $index => $foodId) {
            $order = new Order();
            $order->user_id = $userId;
            $order->food_id = $foodId;
            $order->quantity = $request->quantity[$index];
            $order->size = $request->size[$index];
            $order->toppings = $request->toppings[$index] ?? null;
            $order->total_price = $request->totalPrice[$index];
            $order->itemPrice = $request->price[$index];
            $order->subTotalOrderPrice = $request->orderSubTotal;
            $order->totalOrderPrice = $request->orderTotal;
            $order->paymentType = $request->paymentType;
            $order->couponDiscount = $request->couponId ?? null;

            // Add card info if payment type is card
            if ($request->paymentType === 'card' && isset($request->creditCardNumber)) {
                $order->cardNumber = $request->creditCardNumber;
                $order->cardVerificationNumber = $request->cvv;
            }

            $order->save();
            $ordersCreated[] = $order;

            // Remove item from cart if it exists
            $cartItem = Cart::where('user_id', $userId)->where('food_id', $foodId)->first();
            if ($cartItem) {
                $cartItem->delete();
            }
        }

        // Response based on order and coupon status
        if (count($ordersCreated) > 0) {
            $couponMessage = $request->couponId ? 'Coupon Applied' : 'Order placed successfully';
            return response()->json([
                'status' => true,
                'message' => $couponMessage,
                'orders' => $ordersCreated
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Order could not be processed. Please try again.',
        ], 500);
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
