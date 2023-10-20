<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipeingredient extends Model
{
    use HasFactory;

    public function ingredient()
    {
        return $this->belongsTo('App\Models\Ingredient', 'ingredient_id', 'id');
    }

    public function measurement()
    {
        return $this->belongsTo('App\Models\Measurement', 'measurement_id', 'id');
    }

    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id', 'id');
    }
}
