<?php

use Illuminate\Database\Seeder;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        Show::truncate();
        
        //Define data
       $artists = [
            ['slug'=>'Daniel','title'=>'Marcelin','description'=>'Marcelin','poster_url'=>'Marcelin', 'location_id'=>'Marcelin','bookable'=>'Marcelin', 'price'=>'10,2'],
            
        ];
        
        //Insert data in the table
        foreach ($artists as $data) {     
            DB::table('artists')->insert([
                'slug' => $data['slug'],
                'title' => $data['title'],
                'description' => $data['description'],
                'poster_url' => $data['poster_url'],
                'location_id' => $data['location_id'],
                'bookable' => $data['bookable'],
                'price' => $data['price'],
            ]);
        }
    }
}
