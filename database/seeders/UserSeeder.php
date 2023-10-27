<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Chad Payne',
            'email' => 'feel.the@payne.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone_number' => '12345678',
            'billing_address' => '123 Fake Street',
            'image' => 'chad_payne.png',
            'remember_token'=>Str::random(10)
        ]);

        DB::table('users')->insert([
            'name' => 'Ricardo Madsen',
            'email' => 'RRRawr@madsen.dk',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone_number' => '23456781',
            'billing_address' => '12345 Fakest Street',
            'image' => 'ricardo_madsen.png',
            'remember_token'=>Str::random(10)
        ]);
    }
}
