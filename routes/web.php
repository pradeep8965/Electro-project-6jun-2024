<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductFilterController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SystemInfoController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CouponController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class,'home'])->name('homeroute');

// Route for product slugs
Route::get('/{slug}', [HomeController::class, 'show'])->name('home.show');

Route::get('/chat/chat', [ChatController::class, 'chat']);
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::post('/chat', [ChatController::class, 'store']);

Route::post('/login',[AuthController::class,'login'])->name('login');

/*   Frontend Routes     */
Route::prefix('customer')->group(function () { // /admin/login
    Route::post('/register', [CustomerAuthController::class,'register'])->name('customerRegister');
    Route::post('/login', [CustomerAuthController::class,'login'])->name('customerLogin');
    Route::get('/logout', [CustomerAuthController::class,'logout']);

     // /shop/review
     Route::resource('review', ReviewController::class);
});

Route::prefix('/shop')->group(function () {
    Route::get('/shop-grid',[ProductFilterController::class,'filter'])->name('shop-grid');;
    Route::get('/shop',function(){
        return view('shop/shop'); //shop.blade.php
    });
    Route::resource('wishlist', WishlistController::class);
  
    Route::get('/single-product-fullwidth',function(){
        return view('shop/single-product-fullwidth'); //shop.blade.php
    });


    Route::resource('cart',CartController::class);

    Route::resource('coupons',CouponController::class);

    Route::post('coupons/apply',[CouponController::class, 'applyCoupon'])->name('coupons.apply');
    
    
    Route::get('/my-account',function(){
        return view('shop/my-account'); //my-account.blade.php
    });
    Route::get('/my-account',function(){
        return view('shop/my-account'); //my-account.blade.php
    });
    Route::get('/track-your-order',function(){
        return view('shop/track-your-order'); //my-account.blade.php
    });
    Route::get('/compare',function(){
        return view('shop/compare'); //compare.blade.php
    });
    
    Route::get('/checkout',function(){
        return view('shop/checkout'); //checkout.blade.php
    });
});

/* Admin/Backend Routes*/

Route::prefix('admin')->middleware(AdminAuth::class)->group(function () { // /admin/login
    Route::get('/',[SystemInfoController::class,'login'])->withoutMiddleware([AdminAuth::class]);
    Route::get('/login', function () {
        // Matches The "/admin/login" URL
        return view('admin.login'); //login.blade.php
    })->withoutMiddleware([AdminAuth::class]);
    
    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('/dashboard', [AuthController::class,'dashboard'])->name('admin_dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('brand',BrandController::class);
    Route::resource('product',ProductController::class);
    Route::resource('unit',UnitController::class);


    /* Only for practice */

        Route::get('/profile', function () {
            // Matches The "/admin/user" URL
            return view('admin.profile');
            // profile.blade.php 
        });
        Route::get('/general', function () {
            // Matches The "/admin/login" URL
            return view('admin.general');
            // general.blade.php 
        });
        Route::get('/icons', function () {
            // Matches The "/admin/login" URL
            return view('admin.icons');
            // icons.blade.php 
        });
        Route::get('/buttons', function () {
            // Matches The "/admin/login" URL
            return view('admin.buttons');
            // buttons.blade.php
        });
        Route::get('/sliders', function () {
            // Matches The "/admin/login" URL
            return view('admin.sliders');
            // sliders.blade.php
        });
        Route::get('/modals', function () {
            // Matches The "/admin/login" URL
            return view('admin.modals');
            // modals.blade.php
        });
        Route::get('/navbar', function () {
            // Matches The "/admin/login" URL
            return view('admin.navbar');
            // navbar.blade.php
        });
        Route::get('/timeline', function () {
            // Matches The "/admin/login" URL
            return view('admin.timeline');
            // timeline.blade.php
        });
        Route::get('/ribbons', function () {
            // Matches The "/admin/login" URL
            return view('admin.ribbons');
            // ribbons.blade.php
        });
});
