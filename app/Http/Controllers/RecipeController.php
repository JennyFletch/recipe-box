<?php

namespace App\Http\Controllers;

use App\Models\Recipe as Recipe;
use App\Models\Ingredient as Ingredient;
use App\Models\Recipeingredient as Recipeingredient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function __construct( Ingredient $ingredient, Recipe $recipe, Recipeingredient $recipeingredient ) {
        $this->ingredient = $ingredient;
        $this->recipe = $recipe;
    }

    public function index() {
        $data = [];

        $data['filter'] = 'none';
        $data['recipes'] = $this->recipe->all();
        return view('recipes/index', $data);
    }

    public function filter($filter) {
        $data = [];
        $cat_list = [];

        // $data['recipes'] = $this->recipe->all();

        // Change this to find recipe by category
        // $ingred= DB::table('ingredients')->where('name',  $request->input('ingredient1') )->first();
        // $data['ingredient_id'] = $ingred->id;

        $cat_list = DB::table('recipes')
                        ->where('category',  $filter )
                        ->orWhere('diet',  $filter )
                        ->orWhere('tool',  $filter )
                        ->get();
        $data['recipes'] = $cat_list;

        $data['filter'] = $filter;

        return view('recipes/index', $data);
    }

    public function show($recipe_id, Recipe $recipe, RecipeIngredient $recipeingredient, Ingredient $ingredient, Request $request) {
        $data = [];
        $data['singlerecipe'] = Recipe::find($recipe_id);
        
        /* $data['ingredients'] = RecipeIngredient::all()
                ->join('ingredients', 'ingredient.id', '=', 'recipeingredients.ingredient_id')
                ->where('recipe_id', $recipe_id);  */

        $data['ingredients'] = DB::table('recipeingredients')
                ->where('recipe_id', '=', $recipe_id)
                ->join('ingredients', 'ingredients.id', '=', 'recipeingredients.ingredient_id')
                ->get();

        return view('recipes/single', $data);
    }

    public function recipeform() {
        $data = [];

        $data['ingredients'] = $this->ingredient->all();
        return view('recipes/new', $data);
    }

    public function saveRecipe( Request $request, Recipe $recipe, Recipeingredient $recipeingredient ) {
        $data = [];
        $datalink = [];

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
        
        $data['short_description'] = $request->input('short_description');
        $data['category'] = $request->input('category');
        $data['diet'] = $request->input('diet');
        $data['tool'] = $request->input('tool');

        $ingred= DB::table('ingredients')->where('name',  $request->input('ingredient1') )->first();
        $datalink['ingredient_id'] = $ingred->id;

        $datalink['amount'] = $request->input('amount1');

        if( $request->isMethod('post') ) {
            
            $recipe_id = $recipe->insertGetId($data);
            $data['recipes'] = $this->recipe->all();
            $data['filter'] = 'none';

            $datalink['recipe_id'] = $recipe_id;
            $recipeingredient->insert($datalink);
        }

        return view('recipes/index', $data);
    }
}
