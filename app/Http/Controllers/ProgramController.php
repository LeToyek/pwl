<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
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
