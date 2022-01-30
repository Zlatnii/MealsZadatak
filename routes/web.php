<?php

use Illuminate\Support\Facades\Route;
use App\Models\Meals;
use App\Models\Tags;
use App\Models\Ingredient;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\TagsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('meals', MealsController::class);

Route::resource('ingredients', IngredientController::class);

Route::resource('tags', TagsController::class);