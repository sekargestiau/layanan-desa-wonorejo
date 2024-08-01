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
                'nama_posyandu' => 'Posyandu Jetis',
                'nama' => 'Budi',
                'umur_tahun' => 2,
                'umur_bulan' => 6,
                'rt' => 1,
                'rw' => 2,
                'berat_badan' => 10.5,
                'tinggi_badan' => 85.0,
                'lingkar_kepala' => 45.0,
                'lingkar_lengan' => 15.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu Blimbing',
                'nama' => 'Siti',
                'umur_tahun' => 3,
                'umur_bulan' => 1,
                'rt' => 1,
                'rw' => 3,
                'berat_badan' => 12.0,
                'tinggi_badan' => 90.0,
                'lingkar_kepala' => 47.0,
                'lingkar_lengan' => 16.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu Wonorejo',
                'nama' => 'Ahmad',
                'umur_tahun' => 1,
                'umur_bulan' => 8,
                'rt' => 2,
                'rw' => 1,
                'berat_badan' => 9.0,
                'tinggi_badan' => 75.0,
                'lingkar_kepala' => 43.0,
                'lingkar_lengan' => 14.5,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu Sayangan',
                'nama' => 'Dewi',
                'umur_tahun' => 4,
                'umur_bulan' => 2,
                'rt' => 3,
                'rw' => 2,
                'berat_badan' => 14.5,
                'tinggi_badan' => 95.0,
                'lingkar_kepala' => 48.0,
                'lingkar_lengan' => 17.0,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
            [
                'nama_posyandu' => 'Posyandu Bangunrejo',
                'nama' => 'Sonia',
                'umur_tahun' => 2,
                'umur_bulan' => 3,
                'rt' => 1,
                'rw' => 4,
                'berat_badan' => 11.0,
                'tinggi_badan' => 86.0,
                'lingkar_kepala' => 46.0,
                'lingkar_lengan' => 15.5,
                'tanggal' => '2024-07-01',
                'keterangan_lain' => 'Sehat',
                'status_stunting' => 'Tidak Stunting',
            ],
        ]);
    }
}
