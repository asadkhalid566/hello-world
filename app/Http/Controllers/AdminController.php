<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function allusers(){

        $user=user::all();
        return view('admin.unapproved')->with('user',$user);


    }

    public function userroles($id){

        $roles=user::find($id);
        return view('admin.roles')->with('roles',$roles);

    }





    public function students(){

        $std=user::all();
        return view('admin.students')->with('std',$std);


    }

    public function students_edit($id){

        $std_id=user::find($id);
        return view('admin.edit_students')->with('std_id',$std_id);



    }
    public function students_update(request $request ,$id){

        $std_update=user::find($id);
        $std_update->name=$request->input('name');
        $std_update->email=$request->input('email');
        $std_update->password=$request->input('password');
        $std_update->address=$request->input('address');
        $std_update->update();



    }


    public function teacher(){

        $teacher=user::all();
        return view('admin.teacher')->with('teacher',$teacher);


    }

    public function teacher_update(request $request ,$id){

        $teacher_update=user::find($id);
        $teacher_update->name=$request->input('name');
        $teacher_update->email=$request->input('email');
        $teacher_update->password=$request->input('password');
        $teacher_update->address=$request->input('address');
        $teacher_update->update();
        return $teacher_update;



    }

    public function admindelete($id){
        $admindelete=user::find($id);
        $admindelete->delete();

    }

}


