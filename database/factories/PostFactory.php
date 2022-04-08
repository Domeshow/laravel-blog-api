<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            "content" => $this->faker->sentence(),
            "image" => $this->faker->text(5),
            "slug" => $this->faker->text(5),
        ];
    }
}
