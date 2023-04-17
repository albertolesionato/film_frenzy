<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cast>
 */
class CastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = [
            'Male',
            'Female'
        ];

        return [
            'name' => fake()->name(),
            'character_name' => fake()->name(),
            'gender' => fake()->randomElement($gender),
            'birthdate' => fake()->date(),
            'birthplace' => fake()->city(),
            'profile_photo' => fake()->imageUrl()
        ];
    }
}
