<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function index($id){
        return "News page with id ".$id;
    }
}
