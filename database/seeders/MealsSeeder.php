<?php

namespace Database\Seeders;

use App\Models\Meals;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Meals::factory(10)
        // ->has(Category::factory(1))
        // ->create();

        Meals::factory()
        ->count(10)
        ->hasCategory(1)
        ->create();
    }
}