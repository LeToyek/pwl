<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matakuliah')->insert([
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 2,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 3,
                'nilai' => 'B'
            ],
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 4,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 5,
                'nilai' => 'B'
            ],
            
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 1,
                'nilai' => 'B'
            ],
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 2,
                'nilai' => 'B'
            ],
            [
                'mahasiswa_nim' => '2141720099',
                'matakuliah_id' => 3,
                'nilai' => 'B'
            ]
        ]);
    }
}
