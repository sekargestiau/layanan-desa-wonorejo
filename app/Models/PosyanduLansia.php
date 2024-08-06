<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosyanduLansia extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'posyandu_lansia';
    protected $dates = ['tanggal', 'tanggal_lahir'];
    protected $casts = [
        'nik' => 'string',
    ];
    // Atribut yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_posyandu',
        'dukuh',
        'nik',
        'nama',
        'umur_tahun',
        'tanggal_lahir',
        'rt',
        'rw',
        'berat_badan',
        'tinggi_badan',
        'tensi_darah_sistolik',
        'tensi_darah_diastolik',
        'gula_darah',
        'kolesterol',
        'aktivitas_olahraga',
        'tanggal',
        'keterangan_lain',
    ];
}
