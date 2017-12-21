<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class Postcontroller extends Controller
{
    public function index()
    {
        $cars = Car::all(); 
        return view('cars',compact(['cars']));
    }
   
}
