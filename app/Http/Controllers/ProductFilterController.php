<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductFilterController extends Controller
{
    //

    //3. method
    public function filter(Request $request){
        $products = DB::table('products')
        ->join('brands', 'products.brand_id', '=', 'brands.id')
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->get();

        $brandProductCounts = DB::table('products')
        ->select('brands.brand_name', DB::raw('count(*) as productCount'))
        ->join('brands', 'products.brand_id', '=', 'brands.id')
        ->groupBy('brands.brand_name')  // Include brand_name in Group By
        ->get();
        return view('shop/shop-grid',[ 
            'brandProductCounts'=>$brandProductCounts,
            'products'=>$products,
        ]);
    }
}
