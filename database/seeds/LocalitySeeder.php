<?php

use Illuminate\Database\Seeder;
use App\Locality;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Empty the table first
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
       $localities = [
            ['postal_code'=>'1200','locality' => 'Woluwe-Saint-Lambert'],
            ['postal_code'=>'1150','locality' => 'Woluwe-Saint-Pierre'],
            ['postal_code'=>'1050','locality' => 'Ixelles'],
            ['postal_code'=>'1000','locality' => 'Bruxelles'],
            ['postal_code'=>'1170','locality' => 'Watermael-Boitsfort'],
            ['postal_code'=>'7020', 'locality' => 'Mons'],
            
        ];
        
        //Insert data in the table
        foreach ($localities as $data) {     
            DB::table('localities')->insert([
                'postal_code' => $data['postal_code'],
                'locality' => $data['locality'],
            ]);
        }
    }
}
