<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\std_class;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AdminController extends Controller
{



    public function allusers(){

    $users=user::where('role_id','=',Null)->paginate(5);


    $roles=Role::all();
    $class=std_class::all();


    return view('admin.unapproved',compact('users','roles','class'));
}




    public function userroles($id){

        $roles=user::find($id);
        return view('admin.roles')->with('roles',$roles);

    }





    public function students(){

          $id=Auth::user()->id;

        $stds=user::where('role_id',$id)->paginate(5);

    //     $std=user::where('role_id','=','1')->get();
        return view('admin.students',compact('stds'));


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

        $teachers=user::where('role_id','=','2')->paginate(5);
        return view('admin.teacher',compact('teachers'));


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

    public function record(request $request ,$id){

        $record_update=user::find($id);
        $record_update->role_id=$request->get('roles');
         $var=$request->get('class1');
         if(isset($var)){
            $record_update->class_id=$var;
         }


        $record_update->save();
        return response($record_update);



    }

    public function admindelete($id){
        $admindelete=user::find($id);
        $admindelete->delete();
        return back()->with('message','Recored deleted successfuly');

    }


    public function teacher_delete($id){
        $admindelete=user::find($id);
        if($admindelete->delete()){
            return back()
            ->with('success','Recored deleted successfully.');

    }

    }

    public function  record_delete($id){
        $record_delete=user::find($id);
        if($record_delete->delete()){
            return back()
            ->with('success','Recored deleted successfully.');

    }

}

public function  std_delete($id){
    $record_delete=user::find($id);
    if($record_delete->delete()){
        return back()
        ->with('success','Recored deleted successfully.');

}

}

   public function status($id){
         $status=user::find($id);

         if($status->status==0){
             $status->status=1;
         }else{
          $status->status=0;
         }
         if($status->save()){ return back()
            ->with('success','status updated  successfully.');}

   }

  public function admin_profile(){
      $id=Auth::user()->id;
      $profile=User::find($id);
      return view('admin/adminprofile',compact('profile'));
  }

  public function getprofile($id){

    $profile=User::find($id);
    return view('admin/profile',compact('profile'));
}

   public function profile(request $request,$id ){

    $profile=User::find($id);

    if($request->hasFile('image')){
        $image=$request->file('image');
        $imageName = time().'.'.$image->extension();

        $image->move(public_path('image'), $imageName);

        $profile->image=$imageName;
    }

    $profile->name=$request->input('name');

    $profile->email=$request->input('email');
    $profile->password=$request->input('password');
    $profile->address=$request->input('address');
    $profile->city=$request->input('city');
    $profile->phone=$request->input('phone');
    $profile->checkbox=$request->input('checkbox');



    $profile->save();
    return redirect('/admin_profile');

}


}
