<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'category_id' => rand(1, 10),
            'user_id' => rand(1, 10),
            'tags' => $this->faker->name(),
            'description' => $this->faker->text(500),
        ];
    }
}
