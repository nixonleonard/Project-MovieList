<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_genres')->insert([[
            'genre_id' => 1,
            'movie_id' => 1
        ],
        [
            'genre_id' => 2,
            'movie_id' => 1
        ],
        [
            'genre_id' => 6,
            'movie_id' => 1
        ],
        [
            'genre_id' => 1,
            'movie_id' => 2
        ],
        [
            'genre_id' => 2,
            'movie_id' => 2
        ],
        [
            'genre_id' => 7,
            'movie_id' => 2
        ],
        [
            'genre_id' => 2,
            'movie_id' => 3
        ],
        [
            'genre_id' => 3,
            'movie_id' => 3
        ],
        [
            'genre_id' => 4,
            'movie_id' => 3
        ],
        [
            'genre_id' => 8,
            'movie_id' => 3
        ],
        [
            'genre_id' => 9,
            'movie_id' => 3
        ],
        [
            'genre_id' => 5,
            'movie_id' => 4
        ],
        [
            'genre_id' => 6,
            'movie_id' => 4
        ],
        [
            'genre_id' => 10,
            'movie_id' => 4
        ],
        [
            'genre_id' => 5,
            'movie_id' => 5
        ],
        [
            'genre_id' => 6,
            'movie_id' => 5
        ],
        [
            'genre_id' => 11,
            'movie_id' => 5
        ]

    ]);
    }
}
