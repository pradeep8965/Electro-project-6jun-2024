<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Unit;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all products from the database
        // Retrieve products from the database
        
        $products = Product::all();

        // Pass products to the view

        $products = Product
        ::join('brands','products.brand_id','=','brands.id')
        ->join('units','products.unit_id','=','units.id')
        ->join('categories','products.category_id','=','categories.category_id')
        ->select('products.id as product_id', 'products.*', 'brands.*', 'units.*', 'categories.*')
        ->get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $units = Unit::all(); // Fetch all units from the database
    $brands = Brand::all(); // Fetch all brands
    $categories = Category::all(); // Fetch all categories

    /* dd($units); */

    // Pass the variables to the view
    return view('admin.product.create', [
        'units' => $units,
        'brands' => $brands,
        'categories' => $categories,
    ]);
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        //
        //dd($request->all());

        //Skippig validation
        //1. Client Side Javascript

        //2. ServerSide PHP/Laravel Fraemwork MVC

        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'brand_id' => 'required|integer',
            'unit_id' => 'required|integer',
            'category_id' => 'required|integer',
            'mrp' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'qty_available' => 'required|integer',
            'prod_thumbnail_img' => 'required|dimensions:width=212,height=200|max:2048|mimes:jpg,png,jpeg',
            'prod_main_img' => 'required|dimensions:width=720,height=660|max:2048|mimes:jpg,png,jpeg',
        ]);

        //Direct INsert

        $data = $request->all();
        unset($data['_token']);
        // ClassName::method();

        $prod_thumbnail_img = $request->file('prod_thumbnail_img');
        $prod_thumbnail_img_dst='';                  
        if($prod_thumbnail_img){
            
            $path = $prod_thumbnail_img->store('public/prod_img');
            //The file is comming
             // Extract the filename from the path
            $filename = basename($path);
            $prod_thumbnail_img_dst='/storage/prod_img/'.$filename;
            //dd( );
        }
        $prod_main_img = $request->file('prod_main_img');
        $prod_main_img_dst='';                  
        if($prod_main_img){
            
            $path = $prod_main_img->store('public/prod_img');
            //The file is comming
            // Extract the filename from the path
            $filename = basename($path);
            $prod_main_img_dst='/storage/prod_img/'.$filename;
            //dd( );
        }
        $data['prod_thumbnail_img']=$prod_thumbnail_img_dst;
        $data['prod_main_img']=$prod_main_img_dst;
        Product::create($data);

        //Every function return something
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //

        $product->load('brand', 'unit', 'category');
        /* dd($product->product_name); */
        //show.blade.php
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
