<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posbindu extends Model
{
    use HasFactory;

    protected $table = 'posbindu';

    protected $fillable = [
        'nama_posyandu',
        'nama',
        'umur_tahun',
        'umur_bulan',
        'rt',
        'rw',
        'berat_badan',
        'tinggi_badan',
        'lemak_perut',
        'tensi_darah',
        'gula_darah',
        'kolesterol',
        'status_perokok',
        'riwayat_penyakit',
        'tanggal',
    ];
}
