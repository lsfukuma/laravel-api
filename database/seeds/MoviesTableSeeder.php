<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Movie;

class MoviesTableSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        for ($i=0; $i < 40; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->sentence(4);
            $newMovie->overview = $faker->sentence(15);
            $newMovie->rating = $faker->randomFloat(2 , 2 , 10);
            $newMovie->comments = $faker->sentence(6);
            $newMovie->save();
        }
    }
}
