<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosyanduBalita extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'posyandu_balita';

    protected $dates = ['tanggal'];
    // Atribut yang dapat diisi (mass assignable)
    protected $casts = [
        'nik' => 'string',
    ];
    protected $fillable = [
        'nama_posyandu',
        'nama',
        'nik',
        'umur_tahun',
        'umur_bulan',
        'nama_ortu',
        'tanggal_lahir',
        'dukuh',
        'rt',
        'rw',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'lingkar_lengan',
        'status_stunting',
        'tanggal',
        'keterangan_lain',
    ];

    /**
     * Relasi dengan model User.
     * Satu posyandu balita dimiliki oleh satu pengguna (user).
     */
}
