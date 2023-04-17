<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $movieGenres = [
            'Action',
            'Adventure',
            'Animation',
            'Comedy',
            'Crime',
            'Drama',
            'Fantasy',
            'Historical',
            'Horror',
            'Mystery',
            'Romance',
            'Science Fiction',
            'Thriller',
            'Western',
        ];

        return [
            'title' => fake()->title(),
            'director' => fake()->name(),
            'genre' => fake()->randomElement($movieGenres),
            'plot' => fake()->title(),
            'rating' => fake()->numberBetween(0, 10),
            'box_office' => fake()->randomFloat(2, 10000, 1000000),
            'cast_id' => function() {
                return \App\Models\Cast::factory()->create()->id;
            }

        ];
    }
}
