<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LansiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posyandu_lansia')->insert([
            [
                'nama_posyandu' => 'Posyandu Jetis',
                'nama' => 'Joko',
                'umur_tahun' => 70,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 65.5,
                'tensi_darah_sistolik' => 130,
                'tensi_darah_diastolik' => 80,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Dalam perawatan',
            ],
            [
                'nama_posyandu' => 'Posyandu Blimbing',
                'nama' => 'Siti',
                'umur_tahun' => 68,
                'rt' => 1,
                'rw' => 3,
                'berat_badan' => 60.0,
                'tensi_darah_sistolik' => 125,
                'tensi_darah_diastolik' => 78,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu Wonorejo',
                'nama' => 'Ahmad',
                'umur_tahun' => 75,
                'rt' => 2,
                'rw' => 1,
                'berat_badan' => 70.0,
                'tensi_darah_sistolik' => 135,
                'tensi_darah_diastolik' => 85,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Memerlukan perhatian khusus',
            ],
            [
                'nama_posyandu' => 'Posyandu Sayangan',
                'nama' => 'Dewi',
                'umur_tahun' => 72,
                'rt' => 3,
                'rw' => 2,
                'berat_badan' => 62.5,
                'tensi_darah_sistolik' => 128,
                'tensi_darah_diastolik' => 77,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu Bangunrejo',
                'nama' => 'Budi',
                'umur_tahun' => 71,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 68.0,
                'tensi_darah_sistolik' => 132,
                'tensi_darah_diastolik' => 82,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Dalam perawatan',
            ],
        ]);
    }
}
