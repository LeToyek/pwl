<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function index($id){
        return view('pwl_3.news', ['id' => $id]);
    }
}
