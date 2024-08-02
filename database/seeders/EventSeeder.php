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
                'title' => 'Meeting with the mayor',
                'start' => '2024-08-10 10:00:00',
                'end' => '2024-08-10 12:00:00',
                'all_day' => false,
            ],
            [
                'title' => 'Community Festival',
                'start' => '2024-08-15 09:00:00',
                'end' => '2024-08-15 17:00:00',
                'all_day' => true,
            ],
            [
                'title' => 'Monthly Village Meeting',
                'start' => '2024-08-20 14:00:00',
                'end' => '2024-08-20 16:00:00',
                'all_day' => false,
            ],
        ];

        // Insert sample data into the database
        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
