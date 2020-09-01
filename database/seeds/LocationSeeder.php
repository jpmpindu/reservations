<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Locality;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Location::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        //Define data
        $locations = [
            [
                'slug'=>null,
                'designation'=>'Espace Delvaux / La Vénerie',
                'address'=>'3 rue Gratès',
                'locality_postal_code'=>'1170',
                'website'=>'https://www.lavenerie.be',
                'phone'=>'+32 (0)2/663.85.50',
            ],
            [
                'slug'=>null,
                'designation'=>'Dexia Art Center',
                'address'=>'50 rue de l\'Ecuyer',
                'locality_postal_code'=>'1000',
                'website'=>null,
                'phone'=>null,
            ],
            [
                'slug'=>null,
                'designation'=>'La Samaritaine la',
                'address'=>'16 rue de la samaritaine',
                'locality_postal_code'=>'1200',
                'website'=>'http://www.lasamaritaine.be/',
                'phone'=>null,
            ],
            [
                'slug'=>null,
                'designation'=>'Espace Magh la',
                'address'=>'17 rue du Poinçon',
                'locality_postal_code'=>'1150',
                'website'=>'http://www.espacemagh.be',
                'phone'=>'+32 (0)2/274.05.10',
            ],
            [
                'slug'=>null,
                'designation'=>'La Tête Haute',
                'address'=>'15 rue du Sablon',
                'locality_postal_code'=>'7020',
                'website'=>'http://www.lhomme.be',
                'phone'=>'+32 (0)2/274.13.10',
            ],
        ];
        
                //Insert data in the table
        foreach ($locations as $data) {
            $locality = Locality::firstWhere('postal_code',$data['locality_postal_code']);
            
            DB::table('locations')->insert([
                'slug' => Str::slug($data['designation'],'-'),
                'designation' => $data['designation'],
                'address' => $data['address'],
                'locality_id' => $locality->id,	//Référence à la table localities
                'website' => $data['website'],
                'phone' => $data['phone'],
            ]);
        }

    }
}
