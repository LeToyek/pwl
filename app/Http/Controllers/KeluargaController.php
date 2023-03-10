<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    //
    function index(){
        $data = Keluarga::all();
        return view("keluarga")->with("keluarga",$data);
    }
}
