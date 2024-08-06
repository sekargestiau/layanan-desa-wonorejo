<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosyanduRemaja extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'posyandu_remaja';
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
        'umur_bulan',
        'tanggal_lahir',
        'rt',
        'rw',
        'berat_badan',
        'tinggi_badan',
        'tensi_darah_sistolik',
        'tensi_darah_diastolik',
        'hb',
        'status_anemia',
        'lingkar_perut',
        'lingkar_lengan',
        'tanggal',
        'keterangan_lain',
    ];
}
