<?php

namespace App\Http\Controllers;

use App\Models\Recipe as Recipe;
use App\Models\Ingredient as Ingredient;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function __construct( Ingredient $ingredient, Recipe $recipe ) {
        $this->ingredient = $ingredient;
        $this->recipe = $recipe;
    }

    public function index() {
        $data = [];

        $data['recipes'] = $this->recipe->all();
        return view('recipes/index', $data);
    }

    public function recipeform() {
        $data = [];

        $data['ingredients'] = $this->ingredient->all();
        return view('recipes/new', $data);
    }

    public function saveRecipe( Request $request, Recipe $recipe ) {
        $data = [];

        $data['title'] = $request->input('title');
        $data['instructions'] = $request->input('instructions');
        $data['image_url'] = 'placeholder.jpg';
        $data['category'] = 'drinks';
        $data['diet'] = 'none';
        $data['tool'] = 'none';

        if( $request->isMethod('post') ) {
            $recipe->insert($data);

            $data['recipes'] = $this->recipe->all();
            
            return view('recipes/index', $data);
        }
    }
}
