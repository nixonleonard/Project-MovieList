<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([[
            'actor_id' => 6,
            'movie_id' => 1,
            'name' => 'Tony Stark / Iron Man'
        ],
        [
            'actor_id' => 1,
            'movie_id' => 1,
            'name' => 'Thor'
        ],
        [
            'actor_id' => 9,
            'movie_id' => 1,
            'name' => 'Natasha Romanoff / Black Widow'
        ],
        [
            'actor_id' => 8,
            'movie_id' => 2,
            'name' => 'Jake Sully'
        ],
        [
            'actor_id' => 12,
            'movie_id' => 2,
            'name' => 'Neytiri'
        ],
        [
            'actor_id' => 3,
            'movie_id' => 2,
            'name' => 'Colonel Miles Quaritch'
        ],
        [
            'actor_id' => 11,
            'movie_id' => 3,
            'name' => 'Meena (voice)'
        ],
        [
            'actor_id' => 7,
            'movie_id' => 3,
            'name' => 'Rosita(Voice)'
        ],
        [
            'actor_id' => 9,
            'movie_id' => 3,
            'name' => 'Ash(Voice)'
        ],
        [
            'actor_id' => 2,
            'movie_id' => 4,
            'name' => 'Robert Graysmith'
        ],
        [
            'actor_id' => 6,
            'movie_id' => 4,
            'name' => 'Paul Avery'
        ],
        [
            'actor_id' => 4,
            'movie_id' => 4,
            'name' => 'Inspector David Toschi'
        ],
        [
            'actor_id' => 2,
            'movie_id' => 5,
            'name' => 'Louis Bloom'
        ],
        [
            'actor_id' => 5,
            'movie_id' => 5,
            'name' => 'Security Guard'
        ],
        [
            'actor_id' => 10,
            'movie_id' => 5,
            'name' => 'Sharon Tay'
        ]
    ]);
    }
}
