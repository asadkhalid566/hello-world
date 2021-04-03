<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home(){

        return view('home');
    }

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function instructor(){

        return view('instructor');
    }


  


    public function register(request $request){

        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->passconf=$request->input('passconf');
        $user->mobile=$request->input('mobile');
        $user->address=$request->input('address');
        $user->role=$request->input('role');
        $user->save();

    }

    public function login(request $request){

        $user= User::where('email',$request->input('email'))->get();
        if($user[0]->password==$request->input('password'))
        {
            //  echo "welcome";
            return response()->json([1]);
        }
       
  
    }
}
