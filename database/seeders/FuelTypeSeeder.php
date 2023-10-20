<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuel_types')->insert([
            'name' => 'Diesel',
        ]);

        DB::table('fuel_types')->insert([
            'name' => 'Petrol',
        ]);

        DB::table('fuel_types')->insert([
            'name' => 'Electric',
        ]);
    }
}
