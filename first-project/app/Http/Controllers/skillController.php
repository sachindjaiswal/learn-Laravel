<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skillController extends Controller
{
    //
    function getSkill(Request $req){

        $skill = print_r($req->skill);
        $gender = $req->gender;

        echo "The user has {$skill} as skill and there gender is {$gender}";
    }
}
