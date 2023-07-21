<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 15; $i++) {
            Train::create([
                "agency" => "Trenitalia",
                "arrival_station" => $faker->city(),
                "departure_station" => $faker->city(),
                "train_code" => $faker->regexify("([A-Z]){4}([A-Z]){2}"),
                "departure_time" => $faker->time(),
                "number_of_carriages" => $faker->numberBetween(2, 11),
                "arrival_time" => $faker->time(),
                "deleted" => $faker->boolean(),
                "in_time" => $faker->boolean(),
            ]);
        }
    }
}
