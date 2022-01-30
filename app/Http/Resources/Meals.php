<?php

namespace App\Http\Resources;
use App\Http\Resources\Tag as TagsResource;
use App\Http\Resources\Ingredient as IngredientsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Meals extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->deleted_at > 0 ? 'deleted' : 'created',
                'category' => $this->category,
                'tags' => $this->tags,
                'ingredients' => $this->ingredients,
        ];
    }

}
