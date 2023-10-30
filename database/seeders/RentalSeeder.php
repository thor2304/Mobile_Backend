<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rentals")->insert([
            "car_id" => 1,
            "user_id" => 1,
            "start_date" => "2021-10-11",
            "end_date" => "2021-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 2,
            "user_id" => 2,
            "start_date" => "2021-10-11",
            "end_date" => "2021-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 3,
            "user_id" => 1,
            "start_date" => "2021-10-11",
            "end_date" => "2021-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 4,
            "user_id" => 2,
            "start_date" => "2021-10-11",
            "end_date" => "2021-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 1,
            "user_id" => 1,
            "start_date" => "2023-10-11",
            "end_date" => "2023-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 2,
            "user_id" => 2,
            "start_date" => "2023-10-11",
            "end_date" => "2023-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 4,
            "user_id" => 1,
            "start_date" => "2023-10-11",
            "end_date" => "2024-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 5,
            "user_id" => 2,
            "start_date" => "2023-10-11",
            "end_date" => "2024-10-12",
        ]);

        DB::table("rentals")->insert([
            "car_id" => 1,
            "user_id" => 2,
            "start_date" => "2023-10-11",
            "end_date" => "2024-10-12",
        ]);
    }
}
