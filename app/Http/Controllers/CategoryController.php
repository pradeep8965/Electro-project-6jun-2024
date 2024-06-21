<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

//class CildClass extends ParentClass;

//this is example of single inheritance
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Getb the category form database 
        //1. QUERY BUILDER

        //2. Eleqouent ORM {Object relation maper}


        $categories = Category::all();
        //dd($categories);

        
        //then pass the data to view

            
        // return "index";
        //return is the last statement for every function..
       return view('admin.category.index',['categories'=>$categories]);
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
                                'cat_image'=>'mimes:jpg,png,jpeg|max:1024'
                            ]);
                            
        //dd($request->file('cat_image'));
        $file = $request->file('cat_image');
        $dst="";
        if($file){
            $path = $file->store('public/cat_images');
            //If the file is coming 
            // extract the filename from the path

            $filename = basename ($path);

            $dst='/storage/cat_images/'.$filename;
            //dd();
        }
        $data = $request->only('category_name','description');
        //ClassName ::Method ();
        $data['picture']=$dst;
        //dd($data);

        
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
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return response()->json(['success' => 'Category deleted successfully.']);
        }
        return response()->json(['error' => 'Category not found.'], 404);
    }
}
