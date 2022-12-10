<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->text(200),
            'user_id' => rand(1, 10),
            'question_id' => rand(1, 100),
            'is_accept' => rand(0, 1),
        ];
    }
}
