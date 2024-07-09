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
        //
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

        //skiping validation
        $data = $request->all();
        unset($data['_token']);
        //ClassName ::Method ();
        //$data['picture']=$dst;
        //dd($data);

        
        Product::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
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
