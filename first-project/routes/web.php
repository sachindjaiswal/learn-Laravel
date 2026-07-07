<?php

use App\Http\Controllers\Student;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function(){
    return view('home');
});

Route::get("/about/{name}" , function(){
    return view('about');
});

Route::get("/user" , [UserController::class, 'getUser']);
Route::get("/about",[UserController::class,'aboutUser']);
Route::get("/user/{name}",[UserController::class,'getUserName']);
Route::get('/view',[UserController::class,'viewPage']);
Route::view('/admin','admin');
Route::get("/admin/login/{username}",[UserController::class,'adminLogin']);

Route::get("/student",[Student::class,'getStudentDetails']);

