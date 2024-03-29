<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TransmissionSeeder::class,
            FuelTypeSeeder::class,
            ManufacturerSeeder::class,
            CarSeeder::class,
            RentalSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
