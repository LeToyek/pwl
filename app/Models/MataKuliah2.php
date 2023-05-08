<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah2 extends Model
{
    use HasFactory;

    protected $table = "matakuliah";

    public function mahasiswas(){
        return $this->belongsToMany(
            MahasiswaModel::class, 
            'mahasiswa_matakuliah', 
            'matakuliah_id', 
            'mahasiswa_nim')->withPivot('nilai');
    }
}
