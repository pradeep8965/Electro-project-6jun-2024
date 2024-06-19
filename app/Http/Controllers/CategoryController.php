<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "index";
       return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        
        $request->validate([
                                'category_name'=>'required|unique:categories',
                                'description'=>'',
                                'cat_image'=>'mimes:jpg,png,jpeg'
                            ]);
        $data = $request->only('category_name','description');
        //ClassName ::Method ();

        Category::create($data);
       
        return back()->with('success',"A category has been successfully created ");

      
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
