<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function index(){
        return view('pwl_3.about-us');
    }
}
