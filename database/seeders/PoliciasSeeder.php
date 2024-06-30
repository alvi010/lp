<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PoliciasSeeder extends Seeder
{
    public function run()
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
    }
}