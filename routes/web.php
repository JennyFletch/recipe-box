<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Recipe as Recipe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Laravel Breeze-Generated Routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Application Routes

Route::get('/', function () {
    return view('home');
});

Route::get('/ingredients', 'App\Http\Controllers\IngredientController@index')->middleware(['auth', 'verified'])->name('ingredients');

// Recipes
Route::get('/recipes', 'App\Http\Controllers\RecipeController@index')->middleware(['auth', 'verified'])->name('recipes');
Route::get('/recipes/new', 'App\Http\Controllers\RecipeController@recipeform')->middleware(['auth', 'verified'])->name('add_recipe');
Route::post('/recipes/new', 'App\Http\Controllers\RecipeController@saveRecipe')->middleware(['auth', 'verified'])->name('save_recipe');
Route::get('/recipes/{recipe_id}', 'App\Http\Controllers\RecipeController@show')->middleware(['auth', 'verified'])->name('show_recipe');
Route::get('/recipes/filtered/{filter}', 'App\Http\Controllers\RecipeController@filter')->middleware(['auth', 'verified'])->name('list_filtered');