<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            [
                "title" => "Menjadi baik",
                "author" => "Maulana",
                "category" => "sport",
                "tahun_terbit" => 2014,
            ],
            [
                "title" => "Menjadi programmer",
                "author" => "Arif",
                "category" => "technology",
                "tahun_terbit" => 2013,
            ],
        ]);
    }
}

