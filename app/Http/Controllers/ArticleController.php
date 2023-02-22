<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function index($id){
        return "Halaman Artikel dengan ID " . $id;
    }
}
