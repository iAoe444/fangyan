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

    public function homelocation(){
        return view('frontend.homelocation');
    }

    public function lifescene(){
        return view('frontend.lifescene');
    }

    public function dialecttest(){
        return view('frontend.dialecttest');
    }

    public function aboutus(){
        return view('frontend.aboutus');
    }
}
