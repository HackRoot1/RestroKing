<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HandleFoodsDataController;
use App\Http\Controllers\ShoppingController;
use App\Http\Middleware\ValidCustomer;

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/login', [UserController::class, 'loginView'])->name('login.view');
Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
Route::get('/register', [UserController::class, 'registerView'])->name('register.view');
Route::post('/register', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/shop/{category?}', [ShoppingController::class, 'shopView'])->name('shop.view');
Route::get('/food/{slug}', [ShoppingController::class, 'foodDetail'])->name('food.detail.view');
Route::get('/menu', [ShoppingController::class, 'menuView'])->name('menu.view');

Route::middleware('IsUserValid:customer')->group(function() {
    Route::get('/profile', [UserController::class, 'profileView'])->name('profile.view');
    Route::get('/update-profile', [UserController::class, 'updateProfileView'])->name('update.profile.view');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');

    Route::get('/cart', [ShoppingController::class, 'cartView'])->name('cart.view');
    Route::get('/wishlist', [ShoppingController::class, 'wishlistsView'])->name('wishlist.view');
    Route::get('/wishlist/{id}', [ShoppingController::class, 'addToWishlist'])->name('add.to.wishlist');
    Route::get('/wishlist-delete/{id}', [ShoppingController::class, 'deleteWishlistItem'])->name('delete.from.wishlist');
    Route::get('/cart/{id}', [ShoppingController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/cart-delete/{id}', [ShoppingController::class, 'deleteCartItem'])->name('delete.from.cart');
    
    Route::post('/checkCoupon', [ShoppingController::class, 'checkCoupon']);
    Route::post('/makeOrder', [ShoppingController::class, 'makeOrder'])->middleware(ValidCustomer::class);
    Route::post('/checkout', [ShoppingController::class, 'checkoutOrderView'])->name('checkout.order.view');
    Route::get('/orders', [ShoppingController::class, 'ordersView'])->name('orders.view');
    Route::get('/orders-list', [ShoppingController::class, 'ordersListView'])->name('orders.list.view');
    Route::post('/add-rating', [ShoppingController::class, 'addRating'])->name('add.rating');
});

// admin side routes
Route::prefix('admin')->group(function () {

    // login
    Route::get('/login', [AdminController::class, 'viewLogin'])->name('admin.login.view');
    Route::get('/login-admin', [AdminController::class, 'loginAuth'])->name('admin.login.auth');
    
    Route::middleware('IsAdminValid:admin')->group(function () {
        // dashboard
        Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        
        // Customers Data
        Route::get('/view-customers', [HandleFoodsDataController::class, 'viewCustomers'])->name('view.customers');

        // Manage Foods data
        Route::get('/add-food', [HandleFoodsDataController::class, 'addFoodDataView'])->name('add.food.view');
        Route::post('/store-food', [HandleFoodsDataController::class, 'storeFood'])->name('store.food');
        Route::get('/view-foods', [HandleFoodsDataController::class, 'viewFoods'])->name('view.foods');
        Route::delete('/delete-food', [HandleFoodsDataController::class, 'deleteFood'])->name('delete.food');
        Route::get('/update-food/{id}', [HandleFoodsDataController::class, 'showUpdateFood'])->name('update.food.view');
        Route::put('/update-food', [HandleFoodsDataController::class, 'updateFood'])->name('update.food');
        
        // Manage Food Category
        Route::get('/add-food-category', [HandleFoodsDataController::class, 'addFoodCategoryDataView'])->name('add.food.category.view');
        Route::post('/store-food-category', [HandleFoodsDataController::class, 'storeFoodCategoryDataView'])->name('store.food.category');
        Route::get('/view-food-categories', [HandleFoodsDataController::class, 'viewFoodCategoriesData'])->name('view.food.categories');
        Route::delete('/delete-food-categories', [HandleFoodsDataController::class, 'deleteFoodCategory'])->name('delete.food.category');
        Route::get('/update-food-category/{id}', [HandleFoodsDataController::class, 'showUpdateFoodCategory'])->name('update.food.category.view');
        Route::put('/update-food-category', [HandleFoodsDataController::class, 'updateFoodCategory'])->name('update.food.category');
    });
});