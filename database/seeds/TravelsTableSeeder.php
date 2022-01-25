<?php

use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $new_travel = new Travel();
            $new_travel->country = $faker->country();
            $new_travel->city = $faker->city();
            $new_travel->hotel_name = $faker->name();
            $new_travel->address = $faker->streetAddress();
            $new_travel->rooms = $faker->numberBetween(1, 6);
            $new_travel->price_per_night = $faker->numberBetween(30, 200);
            $new_travel->stars = $faker->numberBetween(1, 10);
            $new_travel->save();
        }
    }
}
