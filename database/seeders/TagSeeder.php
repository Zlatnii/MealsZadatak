<?php

namespace Database\Seeders;
use App\Models\Meals;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
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
        ->hasTags(1)
        ->create();
    }
}
