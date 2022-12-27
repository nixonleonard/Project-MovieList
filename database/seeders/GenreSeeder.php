<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([[
            'name' => 'Action',
        ],
        [
            'name' => 'Adventure',
        ],
        [
            'name' => 'Animation',
        ],
        [
            'name' => 'Comedy',
        ],
        [
            'name' => 'Crime',
        ],
        [
            'name' => 'Drama',
        ],
        [
            'name' => 'Fantasy',
        ],
        [
            'name' => 'Family',
        ],
        [
            'name' => 'Musical',
        ],
        [
            'name' => 'Mystery',
        ],
        [
            'name' => 'Thriller',
        ]
    ]);
    }
}
