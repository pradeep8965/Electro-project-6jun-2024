<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;

//this is example of single inheritance;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $brands = Brand::all();


        //pass the data to view;

        return view('admin.brand.index',['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view ('admin.brand.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

       //return 'store';
        
        $request->validate([
            'brand_name'=>'required|unique:brands',
            'brand_image'=>'mimes:jpg,png,jpeg|max:2048'
        ]);
        
        //dd($request->file('brand_image'));


        $file = $request->file('brand_image');
        $dst="";
        if($file){
        $path = $file->store('public/brand_images');
        //If the file is coming 
        // extract the filename from the path

        $filename = basename ($path);

        $dst='/storage/brand_images/'.$filename;
        //dd();
        }

        $data = $request->only('brand_name',);
        //ClassName ::Method ();
        $data['picture']=$dst;
        //dd($data);


        Brand::create($data);

        return back()->with('success',"A Brand has been successfully created ");


        }


    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //Delete operation 
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Brand deleted successfully.');
    }
}
