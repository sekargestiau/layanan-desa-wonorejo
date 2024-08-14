<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RemajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posyandu_remaja')->insert([
            [
                'nama_posyandu' => 'Posyandu 1 Anggrek - Jetis',
                'dukuh' => 'Jetis',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Andi',
                'umur_tahun' => 15,
                'umur_bulan' => 6,
                'tanggal_lahir' => '2008-02-10',
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 50.0,
                'tinggi_badan' => 160.0,
                'tensi_darah_sistolik' => 110.0,
                'tensi_darah_diastolik' => 70.0,
                'hb' => 14.5,
                'status_anemia' => 'Tidak Anemia',
                'lingkar_perut' => 75.0,
                'lingkar_lengan' => 25.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Aktif dalam kegiatan ekstrakurikuler',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'dukuh' => 'Sayangan',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Budi',
                'umur_tahun' => 16,
                'umur_bulan' => 3,
                'tanggal_lahir' => '2007-04-15',
                'rt' => 3,
                'rw' => 1,
                'berat_badan' => 55.0,
                'tinggi_badan' => 165.0,
                'tensi_darah_sistolik' => 115.0,
                'tensi_darah_diastolik' => 75.0,
                'hb' => 13.8,
                'status_anemia' => 'Anemia',
                'lingkar_perut' => 80.0,
                'lingkar_lengan' => 26.0,
                'tanggal' => '2024-07-02',
                'keterangan_lain' => 'Perlu perhatian lebih pada nutrisi',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'dukuh' => 'Wonorejo',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Citra',
                'umur_tahun' => 14,
                'umur_bulan' => 8,
                'tanggal_lahir' => '2009-11-20',
                'rt' => 2,
                'rw' => 4,
                'berat_badan' => 48.0,
                'tinggi_badan' => 155.0,
                'tensi_darah_sistolik' => 108.0,
                'tensi_darah_diastolik' => 68.0,
                'hb' => 15.0,
                'status_anemia' => 'Tidak Anemia',
                'lingkar_perut' => 70.0,
                'lingkar_lengan' => 24.0,
                'tanggal' => '2024-07-03',
                'keterangan_lain' => 'Rajin berolahraga',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'dukuh' => 'Blimbing',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Diana',
                'umur_tahun' => 17,
                'umur_bulan' => 1,
                'tanggal_lahir' => '2007-06-30',
                'rt' => 4,
                'rw' => 3,
                'berat_badan' => 52.0,
                'tinggi_badan' => 162.0,
                'tensi_darah_sistolik' => 120.0,
                'tensi_darah_diastolik' => 80.0,
                'hb' => 14.0,
                'status_anemia' => 'Tidak Anemia',
                'lingkar_perut' => 72.0,
                'lingkar_lengan' => 23.0,
                'tanggal' => '2024-07-04',
                'keterangan_lain' => 'Sehat dan aktif',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'dukuh' => 'Blimbing',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Eka',
                'umur_tahun' => 15,
                'umur_bulan' => 0,
                'tanggal_lahir' => '2008-07-20',
                'rt' => 5,
                'rw' => 2,
                'berat_badan' => 53.0,
                'tinggi_badan' => 158.0,
                'tensi_darah_sistolik' => 112.0,
                'tensi_darah_diastolik' => 72.0,
                'hb' => 13.5,
                'status_anemia' => 'Anemia',
                'lingkar_perut' => 74.0,
                'lingkar_lengan' => 22.0,
                'tanggal' => '2024-07-05',
                'keterangan_lain' => 'Memerlukan diet seimbang',
            ],
        ]);
    }
}
