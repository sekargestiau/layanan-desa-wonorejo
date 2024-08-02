<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posyandu_balita')->insert([
            [
                'nama_posyandu' => 'Posyandu 1 Anggrek - Njetis',
                'nama' => 'Ayu',
                'umur_tahun' => 2,
                'umur_bulan' => 6,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 10.5,
                'tinggi_badan' => 85.0,
                'lingkar_kepala' => 45.0,
                'lingkar_lengan' => 14.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'nama' => 'Budi',
                'umur_tahun' => 3,
                'umur_bulan' => 4,
                'rt' => 1,
                'rw' => 3,
                'berat_badan' => 12.0,
                'tinggi_badan' => 90.0,
                'lingkar_kepala' => 47.0,
                'lingkar_lengan' => 15.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'nama' => 'Citra',
                'umur_tahun' => 4,
                'umur_bulan' => 2,
                'rt' => 2,
                'rw' => 1,
                'berat_badan' => 11.5,
                'tinggi_badan' => 88.0,
                'lingkar_kepala' => 46.0,
                'lingkar_lengan' => 14.5,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Dalam pengawasan',
                'status_stunting' => 'Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'nama' => 'Dewi',
                'umur_tahun' => 5,
                'umur_bulan' => 1,
                'rt' => 3,
                'rw' => 2,
                'berat_badan' => 14.0,
                'tinggi_badan' => 95.0,
                'lingkar_kepala' => 48.0,
                'lingkar_lengan' => 15.5,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'nama' => 'Eko',
                'umur_tahun' => 3,
                'umur_bulan' => 8,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 13.0,
                'tinggi_badan' => 92.0,
                'lingkar_kepala' => 47.5,
                'lingkar_lengan' => 15.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
        ]);
    }
}
