<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ingredient;

class IngredientFactory extends Factory
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
            
            'title' => $this->faker->text(maxNbChars: 50),
            'slug' => Str::slug($slug),
        ];
            
    }
}
