<?php

namespace App\Http\Controllers;

use App\Models\Recipe as Recipe;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {

        return view('recipes/index');
    }
}
