<?php

namespace Database\Seeders;

use App\Models\Peta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class petaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Peta::create([
            'dusun' => 'Blimbing',
            'rw' => '4',
            'rt' => '4',
            'destinasi' => '-7.6221674,110.8896931'
        ]);
        //Create 10
        Peta::factory()->count(10)->create();
    }
}
