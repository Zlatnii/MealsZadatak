<?php

namespace App\Http\Controllers;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Http\Resources\Ingredient as IngredientResource;

class IngredientController extends Controller
{
    public function index(){
        return Ingredient::all();
    }
}
