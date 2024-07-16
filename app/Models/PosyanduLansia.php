<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosyanduLansia extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'posyandu_lansia';

    // Atribut yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'umur_tahun',
        'umur_bulan',
        'rt',
        'rw',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'tanggal',
        'keterangan_lain',
        'id_user',
    ];

    /**
     * Relasi dengan model User.
     * Satu posyandu balita dimiliki oleh satu pengguna (user).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
