<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $slug = $this->faker->text(maxNbChars: 10);

            return [
               
                'title' => $this->faker->text(maxNbChars: 5),
                'slug' => Str::slug($slug),        
            ];
        
    }
}
