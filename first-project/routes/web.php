<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function(){
    return view('home');
});

Route::get("/about/{name}" , function($name){
    return view('about',['name'=>$name]);
});

Route::get("/user" , [UserController::class, 'getUser']);
Route::get("/about",[UserController::class,'aboutUser']);
Route::get("/user/{name}",[UserController::class,'getUserName']);
Route::get('/view',[UserController::class,'viewPage']);