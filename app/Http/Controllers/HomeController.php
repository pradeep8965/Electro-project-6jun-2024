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
    public function home(){
        //M = Model
        //V = View  
        //C = Comtroler for write a ->(Business Logic)
        $categories = Category::whereNotNull('rank')->orderBy('rank', 'asc')->get();
        return view('home',['categories'=>$categories]); //home.blade.php
    }
    public function show($slug){
        //dd($slug);
        $product = Product::where('slug', $slug)
        ->join('categories','products.category_id','=','categories.category_id')
        ->join('brands','products.brand_id','=','brands.id')
        ->join('sellers','products.seller_id','=','sellers.id')
        ->select('products.*','categories.category_name','brands.brand_name','brands.picture','sellers.seller_name')
        ->first();
        
        //Calculate the average rating of the product from the review table
        //Join with the review table and count the number of reviews
        $customerReviewCount= DB::table('reviews')
        ->where('product_id', 1)
        ->count();

        $averageRating = DB::table('reviews')
        ->where('product_id', $product->id)
        ->avg('rating');
        //dd($averageRating);


        $product_gallery_image_controllers = Product::join('product_gallery_image_controllers','products.id','=','product_gallery_image_controllers.product_id')
        ->get();

        return view('shop/single-product-fullwidth',[
                                                        'product'=>$product,
                                                        'customerReviewCount'=>$customerReviewCount,
                                                        'product_gallery_image_controllers'=>$product_gallery_image_controllers,
                                                        'averageRating'=>$averageRating
                                                    ]); 
        //shop.blade.php
    }
}
