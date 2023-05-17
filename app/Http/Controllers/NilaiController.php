<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use PDF;

class NilaiController extends Controller
{
    //
    function show($id)
    {
        $mahasiswa = MahasiswaModel::where("id", "=", $id)->first();
        return view('nilai', ['mahasiswa' => $mahasiswa]);
    }
    function show_pdf($id){
        $mahasiswa = MahasiswaModel::where("id", "=", $id)->first();
        $pdf = PDF::loadview('nilai_pdf', ['mahasiswa' => $mahasiswa])
            ->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }
}
