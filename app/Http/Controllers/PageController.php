<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index(){
        return "selamat datang";
    }
    function about(){
        return "NIM\t: 2141720085 | Nama\t: Maulana Arif Wijaya";
    }
    function articles($id){
        if (is_numeric($id)) {
            return "Halaman Artikel dengan ID " . $id;
        }else{
            //challenge dari pak zawa
            return "id harus berisi numeric";
        }
    }
}
