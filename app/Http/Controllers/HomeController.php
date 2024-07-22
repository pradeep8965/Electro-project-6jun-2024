<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
}
