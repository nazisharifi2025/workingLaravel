<?php

namespace App\Http\Controllers;

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
}
