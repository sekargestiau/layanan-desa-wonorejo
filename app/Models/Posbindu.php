<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posbindu extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'posbindu';
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
        'lemak_perut',
        'tensi_darah_sistolik',
        'tensi_darah_diastolik',
        'gula_darah',
        'kolesterol',
        'asam_urat',
        'lingkar_perut',
        'status_perokok',
        'riwayat_penyakit',
        'tanggal',
    ];
}
