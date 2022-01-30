<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\Meals as MealsResource;


class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function response(){
        
    }

    public function index()
    {
        //$tags = TagsResource::collection()->all();

        $meals = Meals::with('category', 'tags','ingredients')->get();
        return MealsResource::collection($meals);

       // return MealsResource::collection(Meals::with(['category', $tags, 'ingredients'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show(Meals $meals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meals $meals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meals $meals)
    {
        //
    }
}
