<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    function index(){
        return view('pwl_3.program');
    }
    function showKurir(){
        return "Kurir page";
    }
    function showMagang(){
        return "Magang page";
    }
    function showKunjunganIndustri(){
        return "kunjungan industri page";
    }
}
