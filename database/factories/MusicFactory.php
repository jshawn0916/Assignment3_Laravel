<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'artist' => fake()->name(),
            'album_title' => fake()->sentence(),
            'genre' => fake()->word(),
            'release_date' => fake()->date(),
            'length' => fake()->time(),
            'album_cover' => fake()->imageUrl(),
        ];
        
    }
}
