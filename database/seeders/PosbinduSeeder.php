<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosbinduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posbindu')->insert([
            [
                'nama_posyandu' => 'Posyandu 1 Anggrek - Njetis',
                'nama' => 'Agus Salim',
                'umur_tahun' => 45,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 70.0,
                'tinggi_badan' => 165.0,
                'lemak_perut' => 20.0,
                'tensi_darah_sistolik' => 120.0,
                'tensi_darah_diastolik' => 80.0,
                'gula_darah' => 110.0,
                'kolesterol' => 200.0,
                'asam_urat' => 6.0,
                'status_perokok' => 'Bukan Perokok',
                'riwayat_penyakit' => 'Hipertensi',
                'tanggal' => '2024-07-01',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'nama' => 'Siti Aminah',
                'umur_tahun' => 50,
                'rt' => 2,
                'rw' => 3,
                'berat_badan' => 65.0,
                'tinggi_badan' => 160.0,
                'lemak_perut' => 22.0,
                'tensi_darah_sistolik' => 130.0,
                'tensi_darah_diastolik' => 85.0,
                'gula_darah' => 115.0,
                'kolesterol' => 210.0,
                'asam_urat' => 7.0,
                'status_perokok' => 'Perokok Pasif',
                'riwayat_penyakit' => 'Diabetes',
                'tanggal' => '2024-07-02',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'nama' => 'Budi Santoso',
                'umur_tahun' => 55,
                'rt' => 3,
                'rw' => 1,
                'berat_badan' => 80.0,
                'tinggi_badan' => 170.0,
                'lemak_perut' => 25.0,
                'tensi_darah_sistolik' => 140.0,
                'tensi_darah_diastolik' => 90.0,
                'gula_darah' => 120.0,
                'kolesterol' => 220.0,
                'asam_urat' => 8.0,
                'status_perokok' => 'Perokok Aktif',
                'riwayat_penyakit' => 'Asam Urat',
                'tanggal' => '2024-07-03',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'nama' => 'Eko Purnomo',
                'umur_tahun' => 60,
                'rt' => 4,
                'rw' => 2,
                'berat_badan' => 75.0,
                'tinggi_badan' => 168.0,
                'lemak_perut' => 24.0,
                'tensi_darah_sistolik' => 135.0,
                'tensi_darah_diastolik' => 85.0,
                'gula_darah' => 125.0,
                'kolesterol' => 230.0,
                'asam_urat' => 9.0,
                'status_perokok' => 'Bukan Perokok',
                'riwayat_penyakit' => 'Kolesterol Tinggi',
                'tanggal' => '2024-07-04',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'nama' => 'Dewi Lestari',
                'umur_tahun' => 65,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 70.0,
                'tinggi_badan' => 162.0,
                'lemak_perut' => 23.0,
                'tensi_darah_sistolik' => 125.0,
                'tensi_darah_diastolik' => 80.0,
                'gula_darah' => 110.0,
                'kolesterol' => 210.0,
                'asam_urat' => 7.5,
                'status_perokok' => 'Perokok Pasif',
                'riwayat_penyakit' => 'Hipertensi',
                'tanggal' => '2024-07-05',
            ],
        ]);
    }
}
