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
            4 => 
            array (
                'id' => 5,
                'gallerie_id' => '7',
                'tag_id' => 'padev',
            ),
            5 => 
            array (
                'id' => 6,
                'gallerie_id' => '7',
                'tag_id' => 'prix-padev',
            ),
            6 => 
            array (
                'id' => 7,
                'gallerie_id' => '7',
                'tag_id' => 'actions-caritatives',
            ),
            7 => 
            array (
                'id' => 8,
                'gallerie_id' => '8',
                'tag_id' => 'prix-padev',
            ),
            8 => 
            array (
                'id' => 9,
                'gallerie_id' => '9',
                'tag_id' => 'prix-padev',
            ),
            9 => 
            array (
                'id' => 10,
                'gallerie_id' => '10',
                'tag_id' => 'prix-padev',
            ),
            10 => 
            array (
                'id' => 11,
                'gallerie_id' => '11',
                'tag_id' => 'prix-padev',
            ),
        ));
        
        
    }
}