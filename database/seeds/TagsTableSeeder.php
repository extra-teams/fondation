<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'code' => 'padev',
                'nom' => 'padev',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'code' => 'prix-padev',
                'nom' => 'prix-padev',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'code' => 'actions-caritatives',
                'nom' => 'actions-caritatives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}