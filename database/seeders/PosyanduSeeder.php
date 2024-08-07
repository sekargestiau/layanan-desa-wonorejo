<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // petaSeeder::class;
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            BalitaSeeder::class,
            LansiaSeeder::class,
            RemajaSeeder::class,
            PosbinduSeeder::class
        ]);
    }
}
