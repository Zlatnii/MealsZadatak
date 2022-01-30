<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meals extends Model
{
    use SoftDeletes; 
    use HasFactory;

    protected $fillable = ['title', 'description'];

    protected $dates = ['deleted_at'];

    public function category(){
        return $this->hasOne(Category::class, 'meals_id', 'id');
    }
    

    public function tags(){
        return $this->hasMany(Tag::class, 'meals_id', 'id');
    }

    public function ingredients(){
        return $this->hasMany(Ingredient::class, 'meals_id', 'id');
    }   
}   
