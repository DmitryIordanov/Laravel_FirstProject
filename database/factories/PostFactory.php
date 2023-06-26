<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'content' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1, 5000),
            'is_published' => 1,
            'category_id' => Category::get()->random()->id
        ];
    }
}
