<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LansiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posyandu_lansia')->insert([
            [
                'nama_posyandu' => 'Posyandu 1 Anggrek - Jetis',
                'dukuh' => 'Jetis',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Sujatmiko',
                'umur_tahun' => 70,
                'tanggal_lahir' => '1954-05-01',
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 60.5,
                'tinggi_badan' => 160.0,
                'tensi_darah_sistolik' => 120.0,
                'tensi_darah_diastolik' => 80.0,
                'gula_darah' => 90.0,
                'kolesterol' => 200.0,
                'aktivitas_olahraga' => 'Sering',
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat dan aktif',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'dukuh' => 'Sayangan',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Sri Mulyani',
                'umur_tahun' => 68,
                'tanggal_lahir' => '1956-09-12',
                'rt' => 3,
                'rw' => 1,
                'berat_badan' => 55.0,
                'tinggi_badan' => 155.0,
                'tensi_darah_sistolik' => 130.0,
                'tensi_darah_diastolik' => 85.0,
                'gula_darah' => 95.0,
                'kolesterol' => 210.0,
                'aktivitas_olahraga' => 'Kadang-kadang',
                'tanggal' => '2024-07-02',
                'keterangan_lain' => 'Sedang dalam pengawasan dokter',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'dukuh' => 'Wonorejo',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Slamet',
                'umur_tahun' => 72,
                'tanggal_lahir' => '1952-12-20',
                'rt' => 2,
                'rw' => 4,
                'berat_badan' => 62.0,
                'tinggi_badan' => 165.0,
                'tensi_darah_sistolik' => 125.0,
                'tensi_darah_diastolik' => 82.0,
                'gula_darah' => 100.0,
                'kolesterol' => 180.0,
                'aktivitas_olahraga' => 'Sering',
                'tanggal' => '2024-07-03',
                'keterangan_lain' => 'Suka berjalan pagi',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'dukuh' => 'Blimbing',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Kartini',
                'umur_tahun' => 66,
                'tanggal_lahir' => '1958-07-15',
                'rt' => 4,
                'rw' => 3,
                'berat_badan' => 58.0,
                'tinggi_badan' => 150.0,
                'tensi_darah_sistolik' => 135.0,
                'tensi_darah_diastolik' => 88.0,
                'gula_darah' => 110.0,
                'kolesterol' => 220.0,
                'aktivitas_olahraga' => 'Kadang-kadang',
                'tanggal' => '2024-07-04',
                'keterangan_lain' => 'Mengonsumsi obat rutin',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'dukuh' => 'Blimbing',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Bambang',
                'umur_tahun' => 69,
                'tanggal_lahir' => '1955-11-05',
                'rt' => 5,
                'rw' => 2,
                'berat_badan' => 64.0,
                'tinggi_badan' => 170.0,
                'tensi_darah_sistolik' => 140.0,
                'tensi_darah_diastolik' => 90.0,
                'gula_darah' => 105.0,
                'kolesterol' => 230.0,
                'aktivitas_olahraga' => 'Sering',
                'tanggal' => '2024-07-05',
                'keterangan_lain' => 'Perlu diet rendah garam',
            ],
        ]);
    }
}
