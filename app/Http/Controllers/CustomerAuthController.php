<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerAuthController extends Controller
{
    //
    public function register(Request $request){
        $request->validate([
                            'email'=>'required|email|unique:users',
                            'password'=>'required|min:8'
                           ]);
        //User::
        //classObject = new ClassName();
        $userco = new User();
        //Set the feels
        //LHS = RHS
        $userco->name = '';
        $userco->surname = '';
        $userco->email = $request->email;
        $userco->password = $request->password;

        $result = $userco->save();

        if($result){
            //True
            //user store successfully

            return back()->with('success' , 'User rergistered successfully. ');
        }else{
            //false
            //user can not be stored...
            //With mathod will create session variable ..

            return back()->with('failed' , 'You have rergistered successfully ');
        }
        //dd($request->all());
        //every function return something 
        return "register";
    }

    public function login(Request $request){
        // Login logic
        return "login";
    }
}
