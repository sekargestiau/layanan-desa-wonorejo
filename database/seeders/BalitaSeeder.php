<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'dukuh' => 'Jetis',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Budi',
                'nama_ortu' => 'Agus Santoso',
                'umur_tahun' => 2,
                'umur_bulan' => 6,
                'tanggal_lahir' => '2022-01-01',
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 12.5,
                'tinggi_badan' => 85.0,
                'lingkar_kepala' => 45.0,
                'lingkar_lengan' => 14.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 2 Flamboyan - Sayangan',
                'dukuh' => 'Sayangan',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Siti',
                'nama_ortu' => 'Aminah',
                'umur_tahun' => 3,
                'umur_bulan' => 4,
                'tanggal_lahir' => '2021-03-15',
                'rt' => 2,
                'rw' => 3,
                'berat_badan' => 14.0,
                'tinggi_badan' => 90.0,
                'lingkar_kepala' => 46.0,
                'lingkar_lengan' => 14.5,
                'tanggal' => '2024-07-02',
                'keterangan_lain' => 'Aktif',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 3 Riya - Wonorejo',
                'dukuh' => 'Wonorejo',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Andi',
                'nama_ortu' => 'Sutrisno',
                'umur_tahun' => 1,
                'umur_bulan' => 11,
                'tanggal_lahir' => '2022-08-22',
                'rt' => 3,
                'rw' => 1,
                'berat_badan' => 11.0,
                'tinggi_badan' => 80.0,
                'lingkar_kepala' => 44.0,
                'lingkar_lengan' => 13.0,
                'tanggal' => '2024-07-03',
                'keterangan_lain' => 'Kurang Nafsu Makan',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 4 Melati - Blimbing 4',
                'dukuh' => 'Blimbing',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Dewi',
                'nama_ortu' => 'Suparman',
                'umur_tahun' => 2,
                'umur_bulan' => 8,
                'tanggal_lahir' => '2021-11-11',
                'rt' => 4,
                'rw' => 2,
                'berat_badan' => 12.0,
                'tinggi_badan' => 84.0,
                'lingkar_kepala' => 44.5,
                'lingkar_lengan' => 13.5,
                'tanggal' => '2024-07-04',
                'keterangan_lain' => 'Aktif dan Ceria',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu 5 Dahlia - Blimbing 5',
                'dukuh' => 'Blimbing',
                'nik' => rand(1000000000000000, 9999999999999999),
                'nama' => 'Eka',
                'nama_ortu' => 'Widodo',
                'umur_tahun' => 3,
                'umur_bulan' => 1,
                'tanggal_lahir' => '2021-06-30',
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 13.5,
                'tinggi_badan' => 88.0,
                'lingkar_kepala' => 45.0,
                'lingkar_lengan' => 14.0,
                'tanggal' => '2024-07-05',
                'keterangan_lain' => 'Ceria',
                'status_stunting' => 'Tidak Stunting',
            ],
        ]);
    }
}
