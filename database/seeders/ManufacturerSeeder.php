<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("manufacturers")->insert([
            "name" => "Audi"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "BMW"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Mercedes"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Volkswagen"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Ford"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Toyota"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Honda"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Hyundai"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Nissan"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Kia"
        ]);

        DB::table("manufacturers")->insert([
            "name" => "Renault"
        ]);
    }
}
