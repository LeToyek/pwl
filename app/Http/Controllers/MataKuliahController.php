<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    //
    function index(){
        $data = MataKuliah::all();
        return view("mata_kuliah")->with("matkuls",$data);
    }
}
