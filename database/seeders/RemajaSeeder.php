<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posyandu_remaja')->insert([
            [
                'nama_posyandu' => 'Posyandu 1 Anggrek - Njetis',
                'nama' => 'Rina Putri',
                'umur_tahun' => 15,
                'umur_bulan' => 6,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 50.5,
                'tinggi_badan' => 160.0,
                'tensi_darah_sistolik' => 110.0,
                'tensi_darah_diastolik' => 70.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'nama' => 'Andi Santoso',
                'umur_tahun' => 16,
                'umur_bulan' => 3,
                'rt' => 2,
                'rw' => 3,
                'berat_badan' => 55.0,
                'tinggi_badan' => 165.0,
                'tensi_darah_sistolik' => 115.0,
                'tensi_darah_diastolik' => 75.0,
                'tanggal' => '2024-07-02',
                'keterangan_lain' => 'Dalam pengawasan',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'nama' => 'Siti Aminah',
                'umur_tahun' => 14,
                'umur_bulan' => 11,
                'rt' => 3,
                'rw' => 1,
                'berat_badan' => 48.0,
                'tinggi_badan' => 158.0,
                'tensi_darah_sistolik' => 108.0,
                'tensi_darah_diastolik' => 68.0,
                'tanggal' => '2024-07-03',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'nama' => 'Budi Prasetyo',
                'umur_tahun' => 17,
                'umur_bulan' => 1,
                'rt' => 4,
                'rw' => 2,
                'berat_badan' => 60.0,
                'tinggi_badan' => 170.0,
                'tensi_darah_sistolik' => 120.0,
                'tensi_darah_diastolik' => 80.0,
                'tanggal' => '2024-07-04',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'nama' => 'Ayu Wulandari',
                'umur_tahun' => 16,
                'umur_bulan' => 8,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 52.0,
                'tinggi_badan' => 162.0,
                'tensi_darah_sistolik' => 112.0,
                'tensi_darah_diastolik' => 72.0,
                'tanggal' => '2024-07-05',
                'keterangan_lain' => 'Sehat',
            ],
        ]);
    }
}
