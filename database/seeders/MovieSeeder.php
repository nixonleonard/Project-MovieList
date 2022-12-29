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
            'description' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos\'s actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...',
            'director' => 'Anthony Russo, Joe Russo',
            'release_date' => '2019/04/22',
            'thumbnail' => 'storage/images/endgame/endgame_img.jpg',
            'background' => 'storage/images/endgame/endgame_tn.jpg'
        ],
        [
            'title' => 'Avatar',
            'description' => 'When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge\'s intentions of driving off the native humanoid "Na\'vi" in order to mine for the precious material scattered throughout their rich woodland.',
            'director' => 'James Cameron',
            'release_date' => '2009/12/10',
            'thumbnail' => 'storage/images/avatar/avatar_img.jpg',
            'background' => 'storage/images/avatar/avatar.jpg'
        ],
        [
            'title' => 'Sing 2',
            'description' => 'With his theatrical company a local success, Buster Moon is dreaming of bigger things. Unfortunately, when a talent scout dismisses their work as inadequate for the big time, Buster is driven to prove her wrong. With that goal in mind, Buster inspires his players to gamble everything to sneak into a talent audition in Redshore City for the demanding entertainment mogul Jimmy Crystal.',
            'director' => 'Garth Jennings',
            'release_date' => '2021/11/14',
            'thumbnail' => 'storage/images/sing2/sing_img.jpg',
            'background' => 'storage/images/sing2/sing.jpg'
        ],
        [
            'title' => 'Zodiac',
            'description' => 'A serial killer in the San Francisco Bay Area taunts police with his letters and cryptic messages. We follow the investigators and reporters in this lightly fictionalized account of the true 1970\'s case as they search for the murderer, becoming obsessed with the case. Based on Robert Graysmith\'s book, the movie\'s focus is the lives and careers of the detectives and newspaper people.',
            'director' => 'David Fincher',
            'release_date' => '2007/02/28',
            'thumbnail' => 'storage/images/zodiac/zodiac_img.jpg',
            'background' => 'storage/images/zodiac/zodiac.jpg'
        ],
        [
            'title' => 'Nightcrawler',
            'description' => 'NIGHTCRAWLER is a thriller set in the nocturnal underbelly of contemporary Los Angeles. Jake Gyllenhaal stars as Lou Bloom, a driven young man desperate for work who discovers the high-speed world of L.A. crime journalism. Finding a group of freelance camera crews who film crashes, fires, murder and other mayhem, Lou muscles into the cut-throat, dangerous realm of nightcrawling - where each police siren wail equals a possible windfall and victims are converted into dollars and cents. Aided by Rene Russo as Nina, a veteran of the blood-sport that is local TV news, Lou blurs the line between observer and participant to become the star of his own story.',
            'director' => 'David Fincher',
            'release_date' => '2014/09/05',
            'thumbnail' => 'storage/images/nightcrawler/night_img.jpg',
            'background' => 'storage/images/nightcrawler/night.jpg'
        ]]);
    }
}
