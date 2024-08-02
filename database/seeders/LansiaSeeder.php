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
                'nama_posyandu' => 'Posyandu 1 Anggrek - Njetis',
                'nama' => 'Pak Budi',
                'umur_tahun' => 65,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 70.5,
                'tensi_darah_sistolik' => 120.0,
                'tensi_darah_diastolik' => 80.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'nama' => 'Bu Siti',
                'umur_tahun' => 70,
                'rt' => 2,
                'rw' => 3,
                'berat_badan' => 68.0,
                'tensi_darah_sistolik' => 130.0,
                'tensi_darah_diastolik' => 85.0,
                'tanggal' => '2024-07-02',
                'keterangan_lain' => 'Dalam pengawasan',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'nama' => 'Pak Joko',
                'umur_tahun' => 72,
                'rt' => 3,
                'rw' => 1,
                'berat_badan' => 65.5,
                'tensi_darah_sistolik' => 125.0,
                'tensi_darah_diastolik' => 82.0,
                'tanggal' => '2024-07-03',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'nama' => 'Bu Ani',
                'umur_tahun' => 68,
                'rt' => 4,
                'rw' => 2,
                'berat_badan' => 66.0,
                'tensi_darah_sistolik' => 128.0,
                'tensi_darah_diastolik' => 84.0,
                'tanggal' => '2024-07-04',
                'keterangan_lain' => 'Sehat',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'nama' => 'Pak Agus',
                'umur_tahun' => 69,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 69.0,
                'tensi_darah_sistolik' => 122.0,
                'tensi_darah_diastolik' => 78.0,
                'tanggal' => '2024-07-05',
                'keterangan_lain' => 'Sehat',
            ],
        ]);
    }
}
