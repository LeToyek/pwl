<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    //
    function show($id){
        $mahasiswa = MahasiswaModel::where("id", "=", $id)->first();
        return view('nilai', ['mahasiswa' => $mahasiswa]);
    }
}
