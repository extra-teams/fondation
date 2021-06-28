<?php

use Illuminate\Database\Seeder;

class GestionPadevTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gestion_padev')->delete();
        
        \DB::table('gestion_padev')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'INSCRIPTION PADEV 2021 KIGALI',
                'description' => '<blockquote>
<p>Prenez part a la 16e edition du PADEV<br />
Qui se tiendra a Kigali</p>
</blockquote>',
                'debut' => '2021-09-24',
                'fin' => '2021-09-27',
                'images' => NULL,
                'ouvert' => 1,
                'created_at' => '2021-06-28 20:29:28',
                'updated_at' => '2021-06-28 20:29:28',
            ),
        ));
        
        
    }
}