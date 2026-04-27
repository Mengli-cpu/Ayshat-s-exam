<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            $gender = fake()->boolean(50) ? 'male':'female',
            'name' => fake()->firstName($gender),
            'surname' => fake()->lastName($gender),
            'email' => fake()->unique()->safeEmail(),
            'birth_date' => fake()->date(),
        ];
    }
}
