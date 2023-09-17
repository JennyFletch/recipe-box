<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient as Ingredient;

class IngredientController extends Controller
{
    public function __construct( Ingredient $ingredient ) {
        $this->ingredient = $ingredient;
    }

    public function index() {
        $data = [];

        $data['ingredients'] = $this->ingredient->all();
        return view('ingredients/index', $data);
    }
}
