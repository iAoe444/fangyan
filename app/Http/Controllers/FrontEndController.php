<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function dialectculture(){
        return view('frontend.dialectculture');
    }
}
