
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
/* Fronted Routes*/
Route::prefix('/shop')->group(function () {
    Route::get('/cart',function(){
        return view('shop/cart');
    });
    Route::get('/shop-grid',function(){
        return view('shop/shop-grid'); //shop-grid.blade.php
    });
    Route::get('/my-account',function(){
        return view('shop/my-account'); //my-account.blade.php
    });
    Route::get('/track-your-order',function(){
        return view('shop/track-your-order'); //track-your-order.blade.php
    });
    Route::get('/compare',function(){
        return view('shop/compare'); //compare.blade.php
    });
    Route::get('/shop',function(){
        return view('shop/shop'); //shop.blade.php
    });
});

Route::get('/about',function(){
    return view('about'); //about.blade.php
});
Route::get('/faq',function(){
    return view('faq'); //faq.blade.php
});
Route::get('/contact-v1',function(){
    return view('contact-v1'); //contact-v1.blade.php
});
Route::get('/contact-v2',function(){
    return view('contact-v2'); //contact-v2.blade.php
});
Route::get('/store-directory',function(){
    return view('store-directory'); //store-directory.blade.php
});
Route::get('/terms-and-conditions',function(){
    return view('terms-and-conditions'); //terms-and-conditions.blade.php
});

/* Admin/Backend Routes*/

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        // Matches The "/admin/login" URL

        return view('admin.login');
        // login.blade.php 
    });
    Route::get('/login', function () {
        // Matches The "/admin/login" URL

        return view('admin.login');
        // login.blade.php 
    });
    Route::get('/dashboard', function () {
        // Matches The "/admin/login" URL
        return view('admin.dashboard');
        // dashboard.blade.php 
    });
    /* Only for practice */
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
