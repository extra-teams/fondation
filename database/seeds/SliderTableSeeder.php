<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider')->delete();
        
        \DB::table('slider')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nom' => 'images/sliders/db94d54df363f6fe5c1bc692010fc238.jpg',
                'texte' => NULL,
                'url' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-11-27 08:08:13',
                'updated_at' => '2020-11-28 22:40:35',
            ),
            1 => 
            array (
                'id' => 5,
                'nom' => 'images/sliders/6b855c1bc0772421bc9bc0350bfa7806.jpg',
                'texte' => NULL,
                'url' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 09:13:31',
                'updated_at' => '2020-11-28 23:56:34',
            ),
            2 => 
            array (
                'id' => 11,
                'nom' => 'images/sliders/d7636a8c18383a2ff3a6deda6d3fb3e4.jpg',
                'texte' => NULL,
                'url' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 11:33:45',
                'updated_at' => '2020-11-28 22:56:31',
            ),
        ));
        
        
    }
}