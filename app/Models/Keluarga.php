<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = "keluarga";
    protected $fillable = [
        'no',
        'nama',
        'hubungan',
        'jk',
        'pekerjaan',
        'alamat',
        'tanggal_lahir',
    ];
}
