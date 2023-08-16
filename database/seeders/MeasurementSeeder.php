<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('measurements')->insert(
            [
                'name' => 'Cup'
            ]
        );
        DB::table('measurements')->insert(
            [
                'name' => 'Tbsp'
            ]
        );
        DB::table('measurements')->insert(
            [
                'name' => 'tsp'
            ]
        );
        DB::table('measurements')->insert(
            [
                'name' => 'lb'
            ]
        );
    }
}
