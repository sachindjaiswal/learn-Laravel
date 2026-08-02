<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
    //
    function uploadPhoto (Request $req){
        echo "This is upload function ";
        $path = $req->file('fileName')->store('uploads', 'public');
        $fileName = explode("/" , $path);
        return $path ; 
    }
}
