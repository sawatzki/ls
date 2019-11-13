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
            $movie->price = rand(1, 50) . "." . rand(1, 9);
            $movie->description = 'DESC ' . $i . ': Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet animi asperiores, deleniti dignissimos dolorem doloremque eaque est exercitationem illo iste laudantium minima mollitia numquam odit possimus praesentium, quae sint velit voluptas voluptates?';
            $movie->language = 'de';
            $movie->save();
        }

    }
}
