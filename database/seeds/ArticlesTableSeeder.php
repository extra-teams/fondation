<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cover' => 'images/cover_article/b30fbe0c1ccc1f9f6c9c7fe87c796fcb.jpg',
                'slug' => 'prix-padev-2020-ag-mohamed-almoubareck-recoit-le-prix-du-meilleur-promoteur-africain-des-oeuvres-sociales',
                'titre' => 'Prix PADEV 2020 : Ag Mohamed Almoubareck reçoit le prix du meilleur promoteur africain des œuvres sociales',
                'contenu' => '<p>L&rsquo;&eacute;dition 2020 du Prix PADEV a d&eacute;cern&eacute; des troph&eacute;es aux promoteurs excellents .</p>',
                'deleted_at' => NULL,
                'created_at' => '2021-07-25 10:12:34',
                'updated_at' => '2021-07-25 10:12:34',
            ),
        ));
        
        
    }
}