<?php

use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agencies = [
            ['name'=>'DistrArt'],
            ['name'=>'Aartis'],
            ['name'=>'Marius'],
            ['name'=>'Crossing'],
            ['name'=>'A2'],
            ['name'=>'Artcine'],
        ];
        
        //Insert data in the table
        foreach ($agencies as $data) {     
            DB::table('agencies')->insert([
                'name' => $data['name'],
            ]);
        }
    }
}
