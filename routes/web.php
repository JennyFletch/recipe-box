<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('home');
}); 

Route::get('/ingredients', 'App\Http\Controllers\IngredientController@index')->name('ingredients');
Route::get('/recipes', 'App\Http\Controllers\RecipeController@getRecipe')->name('recipes');