<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('policias')->insert([
                'nombre' => $faker->name,
                'email' => $faker->email,
                'comisaria' => $faker->company,
                'nroPatrulla' => $faker->randomNumber(3),
            ]);
        }

        DB::table('users')->insert([
            'name' => "Pier",
            'email' => "123@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
}
}