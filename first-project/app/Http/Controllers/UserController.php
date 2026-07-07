<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "Sachin" ;
    }

    function aboutUser(){
        return "This is about the user";
    }
    function getUserName($name){
        return "The name of the user is {$name} ";
    }
    function viewPage($name){
        return view('user', ["name"=>$name]);
    }

    function adminLogin($username){
        return view('admin',["username"=>$username]);
    }
}
