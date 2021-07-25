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
                'id' => 2,
                'legende' => 'caritaive 1',
                'fichier' => 'gallerie/5f8b78d491d8928a6d5fb8d185c8b10a.jpeg',
                'image' => 1,
                'created_at' => '2021-07-24 08:50:42',
                'updated_at' => '2021-07-24 08:50:42',
            ),
            1 => 
            array (
                'id' => 3,
                'legende' => 'caritaive 2',
                'fichier' => 'gallerie/2ef23212a6472ef1c202b980237228d8.jpeg',
                'image' => 1,
                'created_at' => '2021-07-24 08:51:03',
                'updated_at' => '2021-07-24 08:51:03',
            ),
            2 => 
            array (
                'id' => 4,
                'legende' => 'caritaive 3',
                'fichier' => 'gallerie/d3decaedf38b1d50ff293c7bde428be4.jpeg',
                'image' => 1,
                'created_at' => '2021-07-24 08:51:20',
                'updated_at' => '2021-07-24 08:51:20',
            ),
            3 => 
            array (
                'id' => 5,
                'legende' => 'caritaive 4',
                'fichier' => 'gallerie/aa74054d7b1f4820e57dbed0d80a4e17.jpg',
                'image' => 1,
                'created_at' => '2021-07-24 08:51:38',
                'updated_at' => '2021-07-24 08:51:38',
            ),
            4 => 
            array (
                'id' => 6,
                'legende' => 'padev kingali',
                'fichier' => 'gallerie/31728d0b8da4c1cbd709c47bf4bf7445.jpeg',
                'image' => 1,
                'created_at' => '2021-07-24 08:53:48',
                'updated_at' => '2021-07-24 08:53:48',
            ),
        ));
        
        
    }
}