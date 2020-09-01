<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            ArtistSeeder::class,
            TypeSeeder::class,
            AgencySeeder::class,
            ArtistTypeSeeder::class,
            LocalitySeeder::class,
            LocationSeeder::class,
            ShowSeeder::class,

            // ArtistTypeShowSeeder::class,
            // CategorySeeder::class,
        ]);

    }
}
