<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 8,
                'legende' => 'Prix des jeunes entrepreneurs Africains',
                'fichier' => 'gallerie/7df4f1fef3bf37edd1989c47def556b0.jpg',
                'image' => 1,
                'created_at' => '2021-07-25 09:42:01',
                'updated_at' => '2021-07-25 09:42:01',
            ),
            1 => 
            array (
                'id' => 9,
                'legende' => 'Top 100 du meilleur maire DE LA CEDEAO ET DE L\'UNION AFRICAINE',
                'fichier' => 'gallerie/713c7efa590b8fd1730bd5976d9428b6.jpeg',
                'image' => 1,
                'created_at' => '2021-07-25 09:42:21',
                'updated_at' => '2021-07-25 09:42:21',
            ),
            2 => 
            array (
                'id' => 10,
                'legende' => 'Prix Africain du meilleur parlementaire',
                'fichier' => 'gallerie/95b02a410a1f33b559737b3168f8c2d4.jpeg',
                'image' => 1,
                'created_at' => '2021-07-25 09:42:44',
                'updated_at' => '2021-07-25 09:42:44',
            ),
            3 => 
            array (
                'id' => 11,
                'legende' => 'Prix Africain du mérite et de l\'excellence',
                'fichier' => 'gallerie/5bef45d7da6ea17e10efc90a902e3593.jpg',
                'image' => 1,
                'created_at' => '2021-07-25 09:43:45',
                'updated_at' => '2021-07-25 09:43:45',
            ),
        ));
        
        
    }
}