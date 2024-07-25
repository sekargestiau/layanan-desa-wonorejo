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
        $data = [
            ['dusun' => 'Jetis', 'rw' => '1', 'rt' => '1', 'destinasi' => '-7.6124853,110.8863853'],
            ['dusun' => 'Jetis', 'rw' => '1', 'rt' => '2', 'destinasi' => '-7.6129758,110.8863409'],
            ['dusun' => 'Jetis', 'rw' => '1', 'rt' => '3', 'destinasi' => '-7.613049,110.887579'],
            ['dusun' => 'Bancakan', 'rw' => '1', 'rt' => '4', 'destinasi' => '-7.6150035,110.887736'],
            ['dusun' => 'Bancakan', 'rw' => '1', 'rt' => '5', 'destinasi' => '-7.6151573,110.8880597'],
            ['dusun' => 'Sayangan', 'rw' => '2', 'rt' => '1', 'destinasi' => '-7.6202927,110.886678'],
            ['dusun' => 'Sayangan', 'rw' => '2', 'rt' => '2', 'destinasi' => '-7.6223977,110.8856005'],
            ['dusun' => 'Bangunrejo', 'rw' => '2', 'rt' => '3', 'destinasi' => '-7.623991,110.8864937'],
            ['dusun' => 'Tegalan', 'rw' => '2', 'rt' => '4', 'destinasi' => '-7.6219634,110.8884034'],
            ['dusun' => 'Wonorejo', 'rw' => '2', 'rt' => '5', 'destinasi' => '-7.6226847,110.887385'],
            ['dusun' => 'Wonorejo', 'rw' => '3', 'rt' => '1', 'destinasi' => '-7.6232462,110.8875783'],
            ['dusun' => 'Wonorejo', 'rw' => '3', 'rt' => '2', 'destinasi' => '-7.6237653,110.8876868'],
            ['dusun' => 'Wonorejo', 'rw' => '3', 'rt' => '3', 'destinasi' => '-7.6237653,110.8876868'],
            ['dusun' => 'Wonorejo', 'rw' => '3', 'rt' => '4', 'destinasi' => '-7.6247939,110.8876201'],
            ['dusun' => 'Wonorejo', 'rw' => '3', 'rt' => '5', 'destinasi' => '-7.6254925,110.8865518'],
            ['dusun' => 'Wonorejo', 'rw' => '4', 'rt' => '1', 'destinasi' => '-7.6255706,110.8860462'],
            ['dusun' => 'Wonorejo', 'rw' => '4', 'rt' => '2', 'destinasi' => '-7.6264249,110.8867042'],
            ['dusun' => 'Wonorejo', 'rw' => '4', 'rt' => '3', 'destinasi' => '-7.6256011,110.8873499'],
            ['dusun' => 'Blimbing', 'rw' => '4', 'rt' => '4', 'destinasi' => '-7.6253573,110.8879751'],
            ['dusun' => 'Blimbing', 'rw' => '4', 'rt' => '5', 'destinasi' => '-7.623747,110.8886256'],
            ['dusun' => 'Blimbing', 'rw' => '5', 'rt' => '1', 'destinasi' => '-7.6225127,110.8894787'],
            ['dusun' => 'Blimbing', 'rw' => '5', 'rt' => '2', 'destinasi' => '-7.6229155,110.8897743'],
            ['dusun' => 'Blimbing', 'rw' => '5', 'rt' => '3', 'destinasi' => '-7.6231408,110.8904506'],
            ['dusun' => 'Blimbing', 'rw' => '5', 'rt' => '4', 'destinasi' => '-7.6237809,110.8923957'],
            ['dusun' => 'Blimbing', 'rw' => '5', 'rt' => '5', 'destinasi' => '-7.6248471,110.8905772'],
            ['dusun' => 'Blimbing', 'rw' => '6', 'rt' => '1', 'destinasi' => '-7.6204795,110.8925697'],
            ['dusun' => 'Blimbing', 'rw' => '6', 'rt' => '2', 'destinasi' => '-7.6201002,110.8936533'],
            ['dusun' => 'Blimbing', 'rw' => '6', 'rt' => '3', 'destinasi' => '-7.616076,110.8928664'],
            ['dusun' => 'Blimbing', 'rw' => '6', 'rt' => '4', 'destinasi' => '-7.6141421,110.8938071'],
            ['dusun' => 'Blimbing', 'rw' => '6', 'rt' => '5', 'destinasi' => '-7.616254,110.8985468'],
            ['dusun' => 'Blimbing', 'rw' => '6', 'rt' => '6', 'destinasi' => '-7.6211582,110.8943136'],
        ];

        foreach ($data as $peta) {
            Peta::create($peta);
        }
    }
}
