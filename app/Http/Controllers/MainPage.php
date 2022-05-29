<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPage extends Controller
{
    // will be used for only redirecting to main page of oes@2.0
    public function index(){
        return view('index');
    }
}
