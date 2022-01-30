<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MealsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker->text(maxNbChars: 10),
            'description' => $this->faker->text(maxNbChars: 20),
        ];
    }
}
