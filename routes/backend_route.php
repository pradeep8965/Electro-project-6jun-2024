<?php


use Illuminate\Support\Facades\Route;


use App\Http\Middleware\AdminAuth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SystemInfoController;

// Admin Routes

/* Admin/Backend Routes*/

Route::prefix('admin')->middleware(AdminAuth::class)->group(function () { // /admin/login
    Route::get('/login',[SystemInfoController::class,'login'])->withoutMiddleware([AdminAuth::class]);
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
        Route::get('/design', function () {
            // Matches The "/admin/user" URL
            return view('admin.design');
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


?>