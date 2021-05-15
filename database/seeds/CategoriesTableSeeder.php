<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'code' => 'mode-enfant',
                'nom' => 'Mode Enfant',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-03 15:01:19',
                'updated_at' => '2020-11-03 15:01:19',
            ),
            1 => 
            array (
                'code' => 'mode-femme',
                'nom' => 'Mode Femme',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-03 15:00:38',
                'updated_at' => '2020-11-03 15:00:38',
            ),
            2 => 
            array (
                'code' => 'mode-homme',
                'nom' => 'Mode Homme',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-03 15:00:02',
                'updated_at' => '2020-11-03 15:00:02',
            ),
        ));
        
        
    }
}