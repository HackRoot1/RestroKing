<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShoppingController;

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/login', [UserController::class, 'loginView'])->name('login.view');
Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
Route::get('/register', [UserController::class, 'registerView'])->name('register.view');
Route::post('/register', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/profile', [UserController::class, 'profileView'])->name('profile.view');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/shop/{category?}', [ShoppingController::class, 'shopView'])->name('shop.view');
Route::get('/food/{slug}', [ShoppingController::class, 'foodDetail'])->name('food.detail.view');
Route::get('/menu', [ShoppingController::class, 'menuView'])->name('menu.view');

Route::middleware(AuthMiddleware::class)->group(function() {
    Route::get('/cart', [ShoppingController::class, 'cartView'])->name('cart.view');
    Route::get('/wishlist', [ShoppingController::class, 'wishlistsView'])->name('wishlist.view');
    Route::get('/wishlist/{id}', [ShoppingController::class, 'addToWishlist'])->name('add.to.wishlist');
    Route::get('/wishlist-delete/{id}', [ShoppingController::class, 'deleteWishlistItem'])->name('delete.from.wishlist');
    Route::get('/cart/{id}', [ShoppingController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/cart-delete/{id}', [ShoppingController::class, 'deleteCartItem'])->name('delete.from.cart');
    
    Route::post('/checkCoupon', [ShoppingController::class, 'checkCoupon']);
    Route::post('/checkout', [ShoppingController::class, 'chekoutOrderView'])->name('chekout.order.view');
    Route::get('/orders', [ShoppingController::class, 'ordersView'])->name('orders.view');
});