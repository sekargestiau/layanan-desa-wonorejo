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
                'nama_posyandu' => 'Posyandu Jetis',
                'nama' => 'Rudi',
                'umur_tahun' => 45,
                'umur_bulan' => 2,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 75.0,
                'tinggi_badan' => 175.0,
                'lemak_perut' => 90.0,
                'tensi_darah_sistolik' => 130,
                'tensi_darah_diastolik' => 85,
                'gula_darah' => 100.0,
                'kolesterol' => 200.0,
                'asam_urat' => 6.5,
                'status_perokok' => 'Perokok Aktif',
                'riwayat_penyakit' => 'Hipertensi',
                'tanggal' => '2024-07-01',
            ],
            [
                'nama_posyandu' => 'Posyandu Blimbing',
                'nama' => 'Siti',
                'umur_tahun' => 50,
                'umur_bulan' => 6,
                'rt' => 1,
                'rw' => 3,
                'berat_badan' => 68.0,
                'tinggi_badan' => 160.0,
                'lemak_perut' => 85.0,
                'tensi_darah_sistolik' => 120,
                'tensi_darah_diastolik' => 80,
                'gula_darah' => 90.0,
                'kolesterol' => 180.0,
                'asam_urat' => 5.5,
                'status_perokok' => 'Bukan Perokok',
                'riwayat_penyakit' => 'Diabetes',
                'tanggal' => '2024-07-01',
            ],
            [
                'nama_posyandu' => 'Posyandu Wonorejo',
                'nama' => 'Andi',
                'umur_tahun' => 60,
                'umur_bulan' => 1,
                'rt' => 2,
                'rw' => 1,
                'berat_badan' => 80.0,
                'tinggi_badan' => 170.0,
                'lemak_perut' => 95.0,
                'tensi_darah_sistolik' => 135,
                'tensi_darah_diastolik' => 88,
                'gula_darah' => 110.0,
                'kolesterol' => 210.0,
                'asam_urat' => 7.0,
                'status_perokok' => 'Perokok Pasif',
                'riwayat_penyakit' => 'Asma',
                'tanggal' => '2024-07-01',
            ],
            [
                'nama_posyandu' => 'Posyandu Sayangan',
                'nama' => 'Dewi',
                'umur_tahun' => 55,
                'umur_bulan' => 4,
                'rt' => 3,
                'rw' => 2,
                'berat_badan' => 65.0,
                'tinggi_badan' => 165.0,
                'lemak_perut' => 80.0,
                'tensi_darah_sistolik' => 125,
                'tensi_darah_diastolik' => 78,
                'gula_darah' => 95.0,
                'kolesterol' => 175.0,
                'asam_urat' => 5.0,
                'status_perokok' => 'Bukan Perokok',
                'riwayat_penyakit' => 'Tidak ada',
                'tanggal' => '2024-07-01',
            ],
            [
                'nama_posyandu' => 'Posyandu Bangunrejo',
                'nama' => 'Budi',
                'umur_tahun' => 48,
                'umur_bulan' => 9,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 78.0,
                'tinggi_badan' => 172.0,
                'lemak_perut' => 92.0,
                'tensi_darah_sistolik' => 132,
                'tensi_darah_diastolik' => 84,
                'gula_darah' => 105.0,
                'kolesterol' => 190.0,
                'asam_urat' => 6.0,
                'status_perokok' => 'Perokok Aktif',
                'riwayat_penyakit' => 'Kolesterol Tinggi',
                'tanggal' => '2024-07-01',
            ],
        ]);
    }
}
