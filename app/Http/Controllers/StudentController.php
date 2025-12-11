<?php

namespace App\Http\Controllers;
use App\Http\Requests\addRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    public function fetchData(){
        $allStudent = student::where("score", ">" , 30)->where("age", ">" , 18)->get();
        // $allStudent = student::where("score", ">" , 30)->orwhere("age", ">" , 18)->get();
        // $allStudent = student::whereBetween("score" , [30,80])->get();
        // $allStudent= student::whereIn("id" , [15,4,3,6,9,12])->get();
        return $allStudent;
    }
      public function read(){
        $allst = student::where("score" , ">" , "30")->where(function($query){
            $query->where("age" , ">" , 18)->orWhere("name" , "like" , "%a%");
        })->get();
        return  $allst;
    }
    public function Chield(){
        $st = student::score()->where("age", "<", 12)->get();
    return $st;
    }
    public function yong(){
        $st = student::score()->where(function($query){
            $query->where("age", ">", 12)->where("age", "<" , 20);
        })->get();
        return $st;
    }
    public function Old(){
        $st = student::score()->where(function($query){
            $query->where("age", ">", 20);
        })->get();
        return $st;
    }
    // public function deleteStudent(){
    //    $st = student::findorFail(3);
    //    $st->delete();
    //    return "student deleted";
    // }
    public function restoreStudent(){
       $st = student::withTrashed()->where("id" , 3)->restore();
       return "student restored";
    }
  public function allStudent(Request $request)
{
    $st = Student::when($request->search, function ($query) use ($request) {
        $query->where(function ($q) use ($request) {
            $q->whereAny([
                "id", "name", "lastName", "score", "age"
            ], 'LIKE', '%' . $request->search . '%');
        });
    })->paginate(10);

    return view("student.student", compact("st"));
}

    // public function allStudent(Request $request){
        //  $st = student::withTrashed()->get();
        // $st = student::when($request->search, function($query) use ($request)$query->where(function($q) use ($request)){
        //     $q->whereAny([
        //         "id", "name" , "lastName" , "score", "age" 
        //     ],'LIKE','%'. $query->search . '%');
        // })->get();
        //  return view("student" , compact("st"));
    // }
    public function insertStudent(addRequest $request){
        $imgPath = null;
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('photos', 'public');
        }
        // valedation
        $st = new student();
        $st->name = $request->name;
        $st->lastName = $request->lastName;
        $st->score = $request->score;
        $st->age = $request->age;
        $st->image = $imgPath;
        $st->save();
        return redirect("student");
    }
   public function update($id){
        $st = student::findorFail($id);
        return view("update" , compact("st"));
    }
    public function editStudent(Request $request , $id){
       $student =  student::findOrFail($id);
       $student->name = $request->name ;
       $student->lastName = $request->lastName ;
       $student->score = $request->score;
       $student->age = $request->age;
       $student->update();
       return redirect('student');
    }
    public function destroy(Request $request , $id){
       $student = student::findOrFail($id);
       if($student->image){
        Storage::disk('public')->delete($student->image);
        // Storage::delete($student->image);
       }
       $student->delete();
        return redirect('student');
    }
    
}
