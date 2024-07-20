<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peta>
 */
class petaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dusun' => $this->faker->word,
            'rw' => $this->faker->word,
            'rt' => $this->faker->word,
            'destinasi' => $this->faker->word,
        ];
    }
}
