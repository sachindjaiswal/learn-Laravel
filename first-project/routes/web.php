<?php

use App\Http\Controllers\hotel;
use App\Http\Controllers\skillController;
use App\Http\Controllers\Student;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\countryCheck;
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
Route::get('/view/{name}',[UserController::class,'viewPage']);
Route::view('/admin','admin');
Route::get("/admin/login/{username}",[UserController::class,'adminLogin']);

Route::get("/student",[Student::class,'getStudentDetails']);

Route::view("/user-form",'user-form');
Route::post("/addUsers",[UserController::class , 'addUser']);

Route::view('/frontendSkill','skill-form');
Route::post('/backendSkill',[skillController::class , 'getSkill']);


// Hotels PAths 

Route::prefix('hotel')->group(function(){
    // Route::view('/home','hotelView');
    Route::get('/admin',[hotel::class , "add"]);
    Route::get('/show',[hotel::class , "show"]); 
});

// Route::prefix('hotel')->group(function(){
//     Route::view('/about' , 'hotelAbout')->middleware('checkAge&Country');
// });

Route::middleware('checkAge&Country')->group(function(){
    Route::prefix('/hotel')->group(function(){
        Route::view('/about' , 'hotelAbout');
        Route::view('/home','hotelView');
    });

});

Route::view('/hotel/contact', 'hotelContact')->middleware(ageCheck::class , countryCheck::class);