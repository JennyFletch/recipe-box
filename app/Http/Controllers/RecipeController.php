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

        if(!($request->hasFile('image_upload'))) {
            echo "<script type='text/javascript'>console.log('none');</script>";
            $data['image_url'] = "none";
        } else {
            echo "<script type='text/javascript'>console.log('image upload attempted');</script>";
            
            $image = $request->file('image_upload');
            $image_name = time().'.'.$image->getClientOriginalExtension();

            $data['image_url'] = $image_name;
            $request->file('image_upload')->move('images', $image_name);
        }
        
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
