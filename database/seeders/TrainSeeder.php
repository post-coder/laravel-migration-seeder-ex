<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $newTrain->company = "Trenitalia";
        // $newTrain->departure_station = "Usini";
        // $newTrain->arrival_station = "Milano";
        // $newTrain->departure = "2024-04-11 10:10:00";
        // $newTrain->arrival = "2024-04-11 13:30:00";
        // $newTrain->code = "47a123";
        // $newTrain->carriages_number = 3;
        // $newTrain->is_on_time = true;
        // $newTrain->is_cancelled = false;

        
        for($i = 0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival = $faker->dateTimeBetween('+2 week', '+3 week');
            $newTrain->code = $faker->unique()->randomNumber(6, true);
            $newTrain->carriages_number = $faker->numberBetween(1, 10);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();
            
            $newTrain->save();
        }

        




    }
}
