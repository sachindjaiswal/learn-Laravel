<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    //
    function getStudentDetails(){

        $students = \App\Models\student::all();
        return view('student' , ['Students'=>$students]);
    }
}
