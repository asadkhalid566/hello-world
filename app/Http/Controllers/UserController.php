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
    public function logout(){
       if(session()->has('loggeduser')){
           session()->pull('loggeduser');
           return view('login');
       }
       else{
        return view('home');
       }

    }




    public function register(request $request){

        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');

        $user->phone=$request->input('mobile');
        $user->address=$request->input('address');
        $user->role_as=$request->input('role');
        $user->save();

    }

    public function login(request $request){


        if($user= User::where('email','=',$request->email)->where('password','=',$request->password)->where('status','=',1)->first()){

            if($user->role_as=='admin')
            {

                $request->session()->put('loggeduser',$user->id);
                return view('admin.admin_home');

            }
            else{
                return back()->with('success','please enter correct information');
            }
        }


        else{
            return back()->with('success','please enter correct information');
        }


    }
}
