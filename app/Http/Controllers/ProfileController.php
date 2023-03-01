<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function index(){
        $data = [
            "nama" => "Maulana Arif Wijaya",
            "kelas" => "2A",
            "prodi" => "D4-Teknik Informatika",
            "img_link" => "https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/small/avatar/dos:5372aa993199fff20b40210ed465542c20220601151114.png",
            "main_desc" => "Computer Science Student",
            "sec_desc" => "Sedang Berkuliah di Politeknik Negeri Malang",
            "nim" => "2141720085" 
        ];
        return view('profile',$data);
    }
}
