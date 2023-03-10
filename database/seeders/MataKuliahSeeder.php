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
        DB::table("mata_kuliah")->insert([
            [
                "nama" => "Algoritma Struktur Dasar",
                "semester" => 2,
                "sks" => 3,
                "dosen" => "Imam Wahyu S.Kom, M.Kom"
            ],
            [
                "nama" => "Dasar Pemrograman",
                "semester" => 1,
                "sks" => 3,
                "dosen" => "Nopri Cahyono S.Kom, M.Kom"
            ],
            [
                "nama" => "Pemrograman Berbasis Objek",
                "semester" => 3,
                "sks" => 3,
                "dosen" => "Fauzi Ahmad S.Kom, M.Kom"
            ],
            [
                "nama" => "Pancasila",
                "semester" => 1,
                "sks" => 2,
                "dosen" => "Mega Susilo Wardoyo S.Pol"
            ],
            [
                "nama" => "K3",
                "semester" => 1,
                "sks" => 2,
                "dosen" => "Gatot Subroto S.Pd"
            ],
        ]);
    }
}
