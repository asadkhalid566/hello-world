<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use App\Models\Pivot;
use Illuminate\Http\Request;
use App\Models\std_class;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiaryController extends Controller
{

    public function diary(){
        $class=std_class::all();
      return  view('diarysend')->with('class',$class);


    }

    public function dynamicdependent(Request $request){

        $class=new user();

        $value = $request->get('value');

        $data = $class
          ->where('class_id','=', $value)

          ->get();

        //  return response($data);
        $output = '<option id="select_all"  >Select Students</option>';
        foreach($data as $row)
        {
         $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        echo $output;
       }



    public function summernote(Request $request){

        $users=new Diary();
        $users->class_id=$request->input('class');
        $std=$request->input('student');
        // $std = implode(',', $std);

        $users->diary=$request->input('description');
        $users->save();
        $id=$users->id;


        $pivot=new Pivot();
        // foreach($std as $item){

        //     $pivot->diary_id=$id;
        //    $pivot->user_id=$item;
        // }
        // $pivot->saveMany();


        foreach($std as $item){

        $post = Pivot::create([
            'user_id' => $item,
            'diary_id' => $id
            ]);
        }
        return back()->with('success','Diary created successfully');
    }


    public function getdiary(){
        $users=Diary::paginate(5);
        return view('diary',compact('users'));
    }


    public function viewdiary($id){
        $diary=Diary::find($id);
        return view('viewdiary',compact('diary'));
    }

    public function diary_delete($id){
        $diary=Diary::find($id);
        $diary->delete();
        return back()->with('success','Recored deleted successfully');
    }


    public function edit_diary( $id){
        $diary=Diary::find($id);

        return view('editdiary',compact('diary'));
    }

    public function editdiary(Request $request, $id){
        $diary=Diary::find($id);
        $diary->diary=$request->input('description');
        $diary->save();

        return redirect('getdiary')->with('success','Diary edited successfully');
    }

    public function stddiary(){
        $id=Auth::user()->id;

        $user=User::find($id);


        // $diarys=Diary::find($dia);
        // $diarys=DB::table('diary_user')->where('user_id',$id)->get();
        // dd($diarys);

        return view('stddiary',compact('user'));
    }

}
