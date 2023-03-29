<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model 
use App\Models\Train;

// Helpers
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
        $newTrain = new Train;
        $newTrain->company = $faker->company();
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        while ($newTrain->departure_station == $newTrain->arrival_station){
            $newTrain->arrival_station = $faker->city();
        }
        $newTrain->departure_time = $faker->dateTimeBetween("-1 week", "+1 week");
        $newTrain->arrival_time = $faker->dateTimeBetween("+1 week", "+2 week");
        $newTrain->train_code = $faker->bothify("??##??");
        $newTrain->carriages_number = $faker->numberBetween(2, 15);
        $newTrain->on_time= $faker->boolean(0,1);
        $newTrain->canceled = $faker->boolean(0,1);
        $newTrain->save();
    }
}
