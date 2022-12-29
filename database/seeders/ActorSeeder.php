<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->string('name');
        // $table->string('gender');
        // $table->string('biography');
        // $table->date('DOB');
        // $table->string('POB');
        // $table->string('image');
        // $table->float('popularity');

        DB::table('actors')->insert([[
            'name' => 'Chris Hemsworth',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/chris.txt',
            'DOB' => '1983/08/11',
            'POB' => 'Melbourne, Victoria, Australia',
            'image' => 'storage/images/endgame/chris.jpg',
            'popularity' => '9.55'
        ],
        [
            'name' => 'Jake Gyllenhaal',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/jake.txt',
            'DOB' => '1980/12/19',
            'POB' => 'Los Angeles, California, USA',
            'image' => 'storage/images/nightcrawler/jake.jpg',
            'popularity' => '8.74'
        ],
        [
            'name' => 'Stephen Lang',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/lang.txt',
            'DOB' => '1952/07/11',
            'POB' => 'New York City, New York, USA',
            'image' => 'storage/images/avatar/lang.jpg',
            'popularity' => '6.98'
        ],
        [
            'name' => 'Mark Ruffalo',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/mark.txt',
            'DOB' => '1967/11/22',
            'POB' => 'Kenosha, Wisconsin, USA',
            'image' => 'storage/images/zodiac/mark.jpg',
            'popularity' => '8.99'
        ],
        [
            'name' => 'Michael Papajohn',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/michael.txt',
            'DOB' => '1964/11/07',
            'POB' => 'Birmingham, Alabama, USA',
            'image' => 'storage/images/nightcrawler/michael.jpg',
            'popularity' => '6.29'
        ],
        [
            'name' => 'Robert Downey Jr.',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/rdj.txt',
            'DOB' => '1965/04/04',
            'POB' => 'Manhattan, New York City, New York, USA',
            'image' => 'storage/images/endgame/rdj.jpg',
            'popularity' => '9.76'
        ],
        [
            'name' => 'Reese Witherspoon',
            'gender' => 'Female',
            'biography' => 'storage/synopsis/actors/reese.txt',
            'DOB' => '1976/03/22',
            'POB' => 'New Orleans, Louisiana, USA',
            'image' => 'storage/images/sing2/reese.jpg',
            'popularity' => '7.15'
        ],
        [
            'name' => 'Sam Worthington',
            'gender' => 'Male',
            'biography' => 'storage/synopsis/actors/sam.txt',
            'DOB' => '1976/08/02',
            'POB' => 'Godalming, Surrey, England, UK',
            'image' => 'storage/images/avatar/sam.jpg',
            'popularity' => '8.01'
        ],
        [
            'name' => 'Scarlett Johansson',
            'gender' => 'Female',
            'biography' => 'storage/synopsis/actors/scarlett.txt',
            'DOB' => '1984/11/22',
            'POB' => 'Manhattan, New York City, New York',
            'image' => 'storage/images/endgame/scarlett.jpg',
            'popularity' => '9.61'
        ],
        [
            'name' => 'Sharon Tay',
            'gender' => 'Female',
            'biography' => 'storage/synopsis/actors/sharon.txt',
            'DOB' => '1966/10/15',
            'POB' => 'Singapore',
            'image' => 'storage/images/nightcrawler/sharon.jpg',
            'popularity' => '6.36'
        ],
        [
            'name' => 'Tori Kelly',
            'gender' => 'Female',
            'biography' => 'storage/synopsis/actors/tori.txt',
            'DOB' => '1992/12/24',
            'POB' => 'Wildomar, California, USA',
            'image' => 'storage/images/sing2/tori.jpg',
            'popularity' => '6.98'
        ],
        [
            'name' => 'Zoe Saldana',
            'gender' => 'Female',
            'biography' => 'storage/synopsis/actors/zoe.txt',
            'DOB' => '1978/06/19',
            'POB' => 'Passaic, New Jersey, USA',
            'image' => 'storage/images/avatar/zoe.jpg',
            'popularity' => '8.38'
        ]
        ]);

    }
}
