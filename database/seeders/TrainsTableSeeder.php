<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['italo', 'trenitalia', 'freccia rossa', 'renfe']);
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_station = $faker->city();
            $newTrain->time_of_departure = $faker->time();
            $newTrain->time_of_arrival = $faker->time();
            $newTrain->train_code = $faker->bothify('??-####');
            $newTrain->number_of_coach = $faker->randomDigit();
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}