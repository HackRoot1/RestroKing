<?php

use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/login', [UserController::class, 'loginView'])->name('login.view');
Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
Route::get('/register', [UserController::class, 'registerView'])->name('register.view');
Route::post('/register', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/profile', [UserController::class, 'profileView'])->name('profile.view');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/shop', [ShoppingController::class, 'shopView'])->name('shop.view');
Route::get('/cart', [ShoppingController::class, 'cartView'])->name('cart.view');
Route::get('/orders', [ShoppingController::class, 'ordersView'])->name('orders.view');
Route::get('/wishlist', [ShoppingController::class, 'wishlistsView'])->name('wishlist.view');
Route::get('/menu', [ShoppingController::class, 'menuView'])->name('menu.view');
