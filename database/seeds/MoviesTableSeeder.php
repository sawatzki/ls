<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 100; $i++) {
            $movie = new Movie();
            $movie->author_id = rand(1, 5);
            $movie->category_id = rand(1, 10);
            $movie->title = 'Movie ' . $i;
            $movie->price = rand(1, 50) . "." . rand(1,9);
            $movie->language = 'de';
            $movie->save();
        }

    }
}
