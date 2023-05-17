<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";
    protected $primaryKey = "nim";
    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'foto',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'kelas_id',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function matakuliahs()
    {
        return $this->belongsToMany(
            MataKuliah2::class, 
            'mahasiswa_matakuliah', 
            'mahasiswa_nim', 
            'matakuliah_id')->withPivot('nilai')->withTimestamps();
    }
}
