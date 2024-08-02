<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin Peta',
            'email' => 'admin.peta@gmail.com',
            'password' => bcrypt('wonorejo123'),
            'role' => 'admin_peta',
            'lokasi' => '-',
            'username' => 'adminpeta'
        ]);

        User::create([
            'name' => 'Admin Posyandu',
            'email' => 'admin.posyandu@gmail.com',
            'password' => bcrypt('wonorejo123'),
            'role' => 'admin_posyandu',
            'lokasi' => '-',
            'username' => 'adminposyandu'
        ]);

        User::create([
            'name' => 'Admin Pengaduan',
            'email' => 'admin.pengaduan@gmail.com',
            'password' => bcrypt('wonorejo123'),
            'role' => 'admin_pengaduan',
            'lokasi' => '-',
            'username' => 'adminpengaduan'
        ]);

        User::create([
            'name' => 'Admin Agenda',
            'email' => 'admin.agenda@gmail.com',
            'password' => bcrypt('wonorejo123'),
            'role' => 'admin_agenda',
            'lokasi' => '-',
            'username' => 'adminagenda'
        ]);

        //Super Admin
        User::create([
            'name' => 'Admin S',
            'email' => 'adminsuper@gmail.com',
            'password' => bcrypt('wonorejo123'),
            'role' => 'superadmin',
            'lokasi' => '-',
            'username' => 'superadmin'
        ]);
    }
}
