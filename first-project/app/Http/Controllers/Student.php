<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    //
    function getStudentDetails(){
        $Student = [
            'name'=>"sachin",'age'=>20,"course"=>"CS"
        ];

        return view('student',compact('Student'));
    }
}
