<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([[
            'title' => 'Avengers : Endgame',
            'description' => 'storage/synopsis/endgame.txt',
            'director' => 'Anthony Russo, Joe Russo',
            'release_date' => '2019/04/22',
            'thumbnail' => 'storage/images/endgame/endgame_img.jpg',
            'background' => 'storage/images/endgame/endgame_tn.jpg'
        ],
        [
            'title' => 'Avatar',
            'description' => 'storage/synopsis/avatar.txt',
            'director' => 'James Cameron',
            'release_date' => '2009/12/10',
            'thumbnail' => 'storage/images/avatar/avatar_img.jpg',
            'background' => 'storage/images/avatar/avatar.jpg'
        ],
        [
            'title' => 'Sing 2',
            'description' => 'storage/synopsis/sing2.txt',
            'director' => 'Garth Jennings',
            'release_date' => '2021/11/14',
            'thumbnail' => 'storage/images/sing2/sing_img.jpg',
            'background' => 'storage/images/sing2/sing.jpg'
        ],
        [
            'title' => 'Zodiac',
            'description' => 'storage/synopsis/zodiac.txt',
            'director' => 'David Fincher',
            'release_date' => '2007/02/28',
            'thumbnail' => 'storage/images/zodiac/zodiac_img.jpg',
            'background' => 'storage/images/zodiac/zodiac.jpg'
        ],
        [
            'title' => 'Nightcrawler',
            'description' => 'storage/synopsis/nightcrawler.txt',
            'director' => 'David Fincher',
            'release_date' => '2014/09/05',
            'thumbnail' => 'storage/images/nightcrawler/night_img.jpg',
            'background' => 'storage/images/nightcrawler/night.jpg'
        ]]);
    }
}
