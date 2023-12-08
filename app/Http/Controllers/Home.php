<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    public function home($nom){
        $nom ="mohamed";
        return view('home',compact('nom'));
    }
}
