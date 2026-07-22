<?php

namespace App\Http\Controllers;

use App\Models\student as ModelsStudent;
use Illuminate\Http\Request;

class Student extends Controller
{
    //
//     function getStudentDetails(){

//         $students = \App\Models\student::all();
//         return view('student' , ['Students'=>$students]);
//     }

    function getStudentDetails(){
        //  $response = ModelsStudent::get();
        $response = ModelsStudent::where('first_name','John')->update(['last_name'=>"jaiswal"]);
        $response = [$response];
        return $response ;
    }
}
