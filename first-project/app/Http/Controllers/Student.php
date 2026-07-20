<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    //
    function getStudentDetails(){

        return view('student',compact('Student'));
    }
}
