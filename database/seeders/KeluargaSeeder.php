<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("keluarga")->insert([
            [
                "nama" => "Michael Santoso",
                "hubungan" => "Ayah",
                "jk" => "L",
                "pekerjaan" => "jaga toko",
                "alamat" => "Jl.Cemara no 56",
                "tanggal_lahir" => Carbon::create("1968","02","09"),
            ],
            [
                "nama" => "Angelica Wijaya",
                "hubungan" => "Ibu",
                "jk" => "P",
                "pekerjaan" => "penjahit",
                "alamat" => "Jl.Cemara no 56",
                "tanggal_lahir" => Carbon::create("1967","01","11"),
            ],
            [
                "nama" => "Alex Handoko",
                "hubungan" => "Anak",
                "jk" => "L",
                "pekerjaan" => "karyawan",
                "alamat" => "Jl.Cemara no 56",
                "tanggal_lahir" => Carbon::create("2003","12","11"),
            ],
        ]);
    }
}
