<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            "model" => "Audi A4",
            "manufacturer_id" => 1,
            "engine_cc_size" => 2000,
            "fuel_type_id" => 1,
            "price_per_day" => 100,
            "price_per_week" => 600,
            "doors" => 4,
            "description" => "Audi A4 is a line of compact executive cars produced since 1994 by the German car manufacturer Audi, a subsidiary of the Volkswagen Group.",
            "transmission_id" => 1,
            "wheel_size" => 18,
            "image_name" => "audi_a4.webp",
        ]);

        DB::table('cars')->insert([
            "model" => "Audi A6",
            "manufacturer_id" => 1,
            "engine_cc_size" => 3000,
            "fuel_type_id" => 2,
            "price_per_day" => 120,
            "price_per_week" => 720,
            "doors" => 4,
            "description"=> "Audi A6 is a line of executive cars produced since 1994 by the German car manufacturer Audi, a subsidiary of the Volkswagen Group.",
            "transmission_id" => 2,
            "wheel_size" => 21,
            "image_name" => "audi_a6.webp",
        ]);

        DB::table('cars')->insert([
            "model" => "BMW M3",
            "manufacturer_id" => 2,
            "engine_cc_size" => 3000,
            "fuel_type_id" => 1,
            "price_per_day" => 150,
            "price_per_week" => 900,
            "doors" => 4,
            "description"=> "The BMW M3 is a high-performance version of the BMW 3 Series, developed by BMW's in-house motorsport division, BMW M GmbH.",
            "transmission_id" => 2,
            "wheel_size" => 20,
            "image_name" => "bmw_m3.png",
        ]);

        DB::table('cars')->insert([
            "model" => "BMW M8",
            "manufacturer_id" => 2,
            "engine_cc_size" => 3000,
            "fuel_type_id" => 2,
            "price_per_day" => 200,
            "price_per_week" => 1200,
            "doors" => 2,
            "description"=> "The BMW M8 is a high performance variant of the BMW 8 Series marketed under the BMW M sub-brand.",
            "transmission_id" => 2,
            "wheel_size" => 20,
            "image_name" => "bmw_m8.png",
        ]);

        DB::table('cars')->insert([
            "model" => "BMW X5",
            "manufacturer_id" => 2,
            "engine_cc_size" => 3000,
            "fuel_type_id" => 2,
            "price_per_day" => 200,
            "price_per_week" => 1200,
            "doors" => 4,
            "description"=> "The BMW X5 is a mid-size luxury crossover SUV produced by BMW.",
            "transmission_id" => 2,
            "wheel_size" => 21,
            "image_name" => "bmw_x5.webp",
        ]);
    }
}
