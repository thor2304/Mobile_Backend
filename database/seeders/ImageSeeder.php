<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $image = new Image(["car_id" => 1, "image_name" => "audi_a4.webp"]);
        $image->save();

        $image = new Image(["car_id" => 1, "image_name" => "audi_a6.webp"]);
        $image->save();

        $image = new Image(["car_id" => 2, "image_name" => "audi_a4.webp"]);
        $image->save();

        $image = new Image(["car_id" => 2, "image_name" => "audi_a6.webp"]);
        $image->save();

        $image = new Image(["car_id" => 3, "image_name" => "bmw_m3.png"]);
        $image->save();

        $image = new Image(["car_id" => 3, "image_name" => "bmw_m8.png"]);
        $image->save();

        $image = new Image(["car_id" => 4, "image_name" => "bmw_m8.png"]);
        $image->save();

        $image = new Image(["car_id" => 4, "image_name" => "BMW_X5.webp"]);
        $image->save();

        $image = new Image(["car_id" => 5, "image_name" => "BMW_X5.webp"]);
        $image->save();

        $image = new Image(["car_id" => 5, "image_name" => "bmw_m8.png"]);
        $image->save();
    }
}
