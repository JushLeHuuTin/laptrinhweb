<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseController extends Controller
{
    public function __construct()
    {
        
    }
    //
    public function login(){
        return view('index');
    }
}
