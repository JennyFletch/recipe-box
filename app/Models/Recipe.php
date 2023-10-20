<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function recipeingredients() 
    {
        return $this->hasMany('App\Models\Recipeingredient');
    }
}
