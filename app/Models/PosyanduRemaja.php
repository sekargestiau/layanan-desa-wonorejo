<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosyanduRemaja extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'posyandu_remaja';

    protected $dates = ['tanggal'];

    // Atribut yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_posyandu',
        'nama',
        'umur_tahun',
        'umur_bulan',
        'rt',
        'rw',
        'berat_badan',
        'tinggi_badan',
        'tensi_darah',
        'tanggal',
        'keterangan_lain',
    ];
    
}
