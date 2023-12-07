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
        $this->saveForOneCar(1, ["audi_a4.webp", "audi_a6.webp"]);
        $this->saveForOneCar(2, ["audi_a6.webp", "audi_a4.webp"]);
        $this->saveForOneCar(3, ["bmw_m3.png", "bmw_m8.png"]);
        $this->saveForOneCar(4, ["bmw_m8.png", "BMW_X5.webp"]);
        $this->saveForOneCar(5, ["BMW_X5.webp", "bmw_m8.png"]);
    }

    /**
     * @param int $carId
     * @param string[] $names
     * @return void
     */
    private function saveForOneCar(int $carId, array $names){
        foreach ($names as $name) {
            $imageName = new Image(["car_id" => $carId, "image_name" => $name]);
            $imageName->save();
        }
    }
}
