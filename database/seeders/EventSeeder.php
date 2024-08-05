<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Define some sample events
        $events = [
            [
                'title' => 'Rapat dengan Walikota',
                'start' => '2024-08-10 10:00:00',
                'end' => '2024-08-10 12:00:00',
                'all_day' => false,
                'location' => 'Kantor Walikota',
                'latitude' => -7.6230, // Example coordinate
                'longitude' => 110.8890, // Example coordinate
            ],
            [
                'title' => 'Festival Komunitas',
                'start' => '2024-08-15 09:00:00',
                'end' => '2024-08-15 17:00:00',
                'all_day' => true,
                'location' => 'Lapangan Desa',
                'latitude' => -7.6225, // Example coordinate
                'longitude' => 110.8885, // Example coordinate
            ],
            [
                'title' => 'Pertemuan Bulanan Desa',
                'start' => '2024-08-20 14:00:00',
                'end' => '2024-08-20 16:00:00',
                'all_day' => false,
                'location' => 'Balai Desa',
                'latitude' => -7.6220, // Example coordinate
                'longitude' => 110.8880, // Example coordinate
            ],
            [
                'title' => 'Pelatihan Teknologi',
                'start' => '2024-08-25 09:00:00',
                'end' => '2024-08-25 12:00:00',
                'all_day' => false,
                'location' => 'Ruang Serbaguna',
                'latitude' => -7.6215, // Example coordinate
                'longitude' => 110.8875, // Example coordinate
            ],
            [
                'title' => 'Peringatan Hari Kemerdekaan',
                'start' => '2024-08-17 08:00:00',
                'end' => '2024-08-17 14:00:00',
                'all_day' => true,
                'location' => 'Lapangan Desa',
                'latitude' => -7.6225, // Example coordinate
                'longitude' => 110.8885, // Example coordinate
            ],
            [
                'title' => 'Pendaftaran Program KKN',
                'start' => '2024-08-30 10:00:00',
                'end' => '2024-08-30 15:00:00',
                'all_day' => false,
                'location' => 'Kantor Desa',
                'latitude' => -7.6235, // Example coordinate
                'longitude' => 110.8895, // Example coordinate
            ],
        ];

        // Insert sample data into the database
        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
