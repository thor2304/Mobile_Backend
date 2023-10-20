<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("transmissions")->insert([
            "name" => "Manual"
        ]);

        DB::table("transmissions")->insert([
            "name" => "Automatic"
        ]);
    }
}
