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
                'nama_posyandu' => 'Posyandu Jetis',
                'nama' => 'Rudi',
                'umur_tahun' => 15,
                'umur_bulan' => 3,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 50.5,
                'tinggi_badan' => 160.0,
                'tensi_darah_sistolik' => 110,
                'tensi_darah_diastolik' => 70,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu Blimbing',
                'nama' => 'Tina',
                'umur_tahun' => 14,
                'umur_bulan' => 8,
                'rt' => 1,
                'rw' => 3,
                'berat_badan' => 45.0,
                'tinggi_badan' => 155.0,
                'tensi_darah_sistolik' => 108,
                'tensi_darah_diastolik' => 68,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu Wonorejo',
                'nama' => 'Andi',
                'umur_tahun' => 16,
                'umur_bulan' => 1,
                'rt' => 2,
                'rw' => 1,
                'berat_badan' => 55.0,
                'tinggi_badan' => 165.0,
                'tensi_darah_sistolik' => 115,
                'tensi_darah_diastolik' => 75,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu Sayangan',
                'nama' => 'Dewi',
                'umur_tahun' => 13,
                'umur_bulan' => 9,
                'rt' => 3,
                'rw' => 2,
                'berat_badan' => 42.0,
                'tinggi_badan' => 150.0,
                'tensi_darah_sistolik' => 105,
                'tensi_darah_diastolik' => 65,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu Bangunrejo',
                'nama' => 'Siti',
                'umur_tahun' => 15,
                'umur_bulan' => 6,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 48.5,
                'tinggi_badan' => 158.0,
                'tensi_darah_sistolik' => 112,
                'tensi_darah_diastolik' => 72,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
        ]);
    }
}
