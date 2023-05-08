<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("matakuliah")->insert([
            [
                "nama_matkul" => "Algoritma Struktur Dasar",
                "semester" => 2,
                "sks" => 3,
                "jam" => 3
            ],
            [
                "nama_matkul" => "Dasar Pemrograman",
                "semester" => 1,
                "sks" => 3,
                "jam" => 3
            ],
            [
                "nama_matkul" => "Pemrograman Berbasis Objek",
                "semester" => 3,
                "sks" => 3,
                "jam" => 3
            ],
            [
                "nama_matkul" => "Pancasila",
                "semester" => 1,
                "sks" => 2,
                "jam" => 3
            ],
            [
                "nama_matkul" => "K3",
                "semester" => 1,
                "sks" => 2,
                "jam" => 3
            ],
        ]);
    }
}
