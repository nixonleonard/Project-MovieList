<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\MovieGenre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // create a user
         DB::table('users')->insert([
            'username' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'DOB' => '2002/09/16',
            'phone' => '098767898789',
            'image' => '',
        ]);

        // create admin user
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'DOB' => '2002/09/16',
            'phone' => '098767875489',
            'image' => '',
            'is_admin' => 'admin'
        ]);

        $this->call([
            ActorSeeder::class,
            MovieSeeder::class,
            GenreSeeder::class,
            MovieGenreSeeder::class,
            CharacterSeeder::class,
            WatchListSeeder::class
        ]);
    }
}
