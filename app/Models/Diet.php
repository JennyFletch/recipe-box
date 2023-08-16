<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;
    protected $diets_array = ['vegetarian', 'vegan', 'low-carb'];
}
