<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function getUser(){
        $record = DB::select('select * from users');

        return view('user' , ["record"=> $record]);
    }
    // //
    // function getUser(){
    //     return "Sachin" ;
    // }

    // function aboutUser(){
    //     return "This is about the user";
    // }
    // function getUserName($name){
    //     return "The name of the user is {$name} ";
    // }
    // function viewPage($name){
    //     return view('user', ["name"=>$name]);
    // }

    // function adminLogin($username){
    //     return view('admin',["username"=>$username]);
    // }

    // function addUser(Request $req){

    //     $req -> validate([
    //         'username'=>'required | min:3 | max:20','email'=>'required | email' , 'city'=>'required | uppercase'
    //     ],['username.required'=>'Username can not be empty',
    //         'username.min'=>'usrname must be greater than 3 characters ']);
    //     $userDetail = [
    //         "username"=>$req->username,
    //         "email"=>$req->email,
    //         "city"=>$req->city
    //     ];
    //     echo $userDetail["username"] ;
    //     echo "<br>";        
    //     echo $userDetail["email"] ;
    //     echo "<br>"; 
    //             echo $userDetail["city"] ;

    // }
}
