<?php

namespace Database\Seeders;

use App\Models\Meals;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        Meals::factory()
        ->count(10)
        ->hasIngredients(1)
        ->create();
    }
}
