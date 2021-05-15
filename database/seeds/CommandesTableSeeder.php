<?php

use Illuminate\Database\Seeder;

class CommandesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commandes')->delete();
        
        \DB::table('commandes')->insert(array (
            0 => 
            array (
                'id' => 8,
                'id_client' => 3,
                'id_adr' => 5,
                'quantite' => 1,
                'montant' => '33,000.00',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2020-11-30 08:59:22',
                'updated_at' => '2020-11-30 08:59:22',
            ),
        ));
        
        
    }
}