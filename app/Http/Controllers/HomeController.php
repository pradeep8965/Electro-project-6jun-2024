<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //1. Properties

    //2. Constructor

    //3. Methods
    public function home() {
        // Fetch categories from the database
        $categories = Category::whereNotNull('rank')->orderBy('rank', 'asc')->get();
        
        // Fetch products from the database
        $products = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
                           ->select('products.*', 'categories.category_name')
                           ->get();

        // Pass the categories and products to the view
        return view('home', [
            'categories' => $categories,
            'products' => $products
        ]); // home.blade.php
    }

    public function show($slug) {
        // Fetch product details based on the slug
        $product = Product::where('slug', $slug)
                          ->join('categories', 'products.category_id', '=', 'categories.category_id')
                          ->join('brands', 'products.brand_id', '=', 'brands.id')
                          ->join('sellers', 'products.seller_id', '=', 'sellers.id')
                          ->select('products.*', 'categories.category_name', 'brands.brand_name', 'brands.picture', 'sellers.seller_name')
                          ->first();
        
        // Calculate the average rating of the product from the review table
        // Join with the review table and count the number of reviews
        $customerReviewCount = DB::table('reviews')
                                 ->where('product_id', $product->id)
                                 ->count();

        $averageRating = DB::table('reviews')
                           ->where('product_id', $product->id)
                           ->avg('rating');

        // Fetch product gallery images
        $product_gallery_image_controllers = Product::join('product_gallery_image_controllers', 'products.id', '=', 'product_gallery_image_controllers.product_id')
                                                    ->get();

        // Fetch related products (example: same category or similar criteria)
        $relatedProducts = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
                                  ->where('products.category_id', $product->category_id)
                                  ->where('products.id', '!=', $product->id)
                                  ->select('products.*', 'categories.category_name')
                                  ->get();

        // Pass the product details and related products to the view
        return view('shop/single-product-fullwidth', [
                                                        'product' => $product,
                                                        'customerReviewCount' => $customerReviewCount,
                                                        'product_gallery_image_controllers' => $product_gallery_image_controllers,
                                                        'averageRating' => $averageRating,
                                                        'products' => $relatedProducts
                                                    ]); // single-product-fullwidth.blade.php
    }
}