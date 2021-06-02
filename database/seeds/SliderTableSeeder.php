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
                'nom' => 'images/sliders/719ba370afc0b268265366bc7014285c.jpg',
                'texte' => NULL,
                'url' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-11-27 08:08:13',
                'updated_at' => '2020-11-28 22:40:35',
            ),
            1 => 
            array (
                'id' => 5,
                'nom' => 'images/sliders/c38cd3e9dedb8933fa100f17594f41d5.jpg',
                'texte' => NULL,
                'url' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 09:13:31',
                'updated_at' => '2020-11-28 23:56:34',
            ),
           
        ));
        
        
    }
}