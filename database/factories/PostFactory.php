<?php

namespace Database\Factories;

use App;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $a_id = App\Models\Author::inRandomOrder()->first();
        $c_id = App\Models\Category::inRandomOrder()->first();
        return [
            'author_id'=> $a_id->id,
            'category_id'=> $c_id->id,
            'title'=> fake()->sentence(6, $variableNbWords = true),
            'content'=> fake()->paragraph(1, $variableNbWords = true),
            'date'=> fake()->dateTimeBetween('-6 months', 'now'),
            'view_count'=> $count = fake()->numberBetween(0,100000),
            'like_count'=>  fake()->numberBetween(0,$count),
        ];
    }
}
