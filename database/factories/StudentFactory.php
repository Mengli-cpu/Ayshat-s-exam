<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num = ['A','B','C','D','E'];
        $locations = ['AG','AK','AH','DZ','TA','MR'];
        return [
            'gender' =>  $gender = fake()->boolean(50) ? 'male' : 'female',
            'name' => fake()->firstName($gender),
            'surname' => fake()->lastName($gender),
            'birth_date' => fake()->dateTimeBetween('-12 years', '-6 years'),
            'grade' => fake()->numberBetween(1, 12),
            'school_num' => fake()->numberBetween(1, 200),
            'class_num' => fake()->randomElement($num),
            'city' => fake()->randomElement($locations),
            'adress' => fake()->address(),
            'parent_phone' => fake()->boolean(80) ? fake()->numberBetween(99361000000, 99365999999):fake()->numberBetween(99371000000, 99371999999)
        ];
    }
}
