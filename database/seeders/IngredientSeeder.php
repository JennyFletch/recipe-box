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
            [
                'name' => 'salt'
            ]
        );
        DB::table('ingredients')->insert(
            [
                'name' => 'pepper'
            ]
        );
        DB::table('ingredients')->insert(
            [
                'name' => 'cheddar cheese'
            ]
        );
    }
}
