<?php

use Illuminate\Database\Seeder;

class AdressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('adresses')->delete();
        
        \DB::table('adresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_client' => 5,
                'code_commune' => 'coc',
                'description' => 'St Jean',
                'latitude' => '0',
                'longitude' => '0',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_client' => 5,
                'code_commune' => 'coc',
                'description' => 'St Jean',
                'latitude' => '0',
                'longitude' => '0',
                'deleted_at' => NULL,
                'created_at' => '2020-11-20 03:32:57',
                'updated_at' => '2020-11-20 03:32:57',
            ),
            2 => 
            array (
                'id' => 3,
                'id_client' => 5,
                'code_commune' => 'coc',
                'description' => 'St Jean',
                'latitude' => '0',
                'longitude' => '0',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_client' => 3,
                'code_commune' => 'coc',
                'description' => 'Rosier',
                'latitude' => '0',
                'longitude' => '0',
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 11:58:11',
                'updated_at' => '2020-11-28 11:58:11',
            ),
            4 => 
            array (
                'id' => 5,
                'id_client' => 3,
                'code_commune' => 'coc',
                'description' => 'Rosier programme 5',
                'latitude' => '0',
                'longitude' => '0',
                'deleted_at' => NULL,
                'created_at' => '2020-11-30 08:59:22',
                'updated_at' => '2020-11-30 08:59:22',
            ),
        ));
        
        
    }
}