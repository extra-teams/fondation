<?php

use Illuminate\Database\Seeder;

class GallerieHasTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallerie_has_tags')->delete();
        
        \DB::table('gallerie_has_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gallerie_id' => '2',
                'tag_id' => 'actions-caritatives',
            ),
            1 => 
            array (
                'id' => 2,
                'gallerie_id' => '4',
                'tag_id' => 'actions-caritatives',
            ),
            2 => 
            array (
                'id' => 3,
                'gallerie_id' => '5',
                'tag_id' => 'actions-caritatives',
            ),
            3 => 
            array (
                'id' => 4,
                'gallerie_id' => '6',
                'tag_id' => 'padev',
            ),
        ));
        
        
    }
}