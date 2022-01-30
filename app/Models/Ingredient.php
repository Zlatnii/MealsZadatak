<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use SoftDeletes; 
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $dates = ['deleted_at'];
}
