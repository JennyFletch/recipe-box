<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert(
            [ 'name' => 'salt' ],
            [ 'name' => 'pepper' ],
            [ 'name' => 'cheese - cheddar' ],
            [ 'name' => 'cheese - provolone' ],
            [ 'name' => 'chicken thighs - boneless' ],
            [ 'name' => 'chicken thights - bone-in' ],
            [ 'name' => 'beef - steak' ],
            [ 'name' => 'beef - chuck roast' ],
            [ 'name' => 'pasta - spaghetti' ],
            [ 'name' => 'pasta - penne' ],
            [ 'name' => 'apple(s)' ],
            [ 'name' => 'orange(s)' ],
        );
    }
}
