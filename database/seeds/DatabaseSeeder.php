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
            // ArtistTypeShowSeeder::class,
            // CategorySeeder::class,
        ]);

    }
}
