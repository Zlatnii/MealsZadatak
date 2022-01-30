<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            
        $slug = $this->faker->text(maxNbChars: 30);

        return [
            'title' => $this->faker->text(maxNbChars: 25),
            'slug' => Str::slug($slug),
        ];
    }
}
