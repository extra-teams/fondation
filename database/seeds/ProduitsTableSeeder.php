<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produits')->delete();
        
        \DB::table('produits')->insert(array (
            0 => 
            array (
                'code' => 'air-force-1-blanche',
                'nom' => 'Air Force 1 blanche',
                'image' => '["articles\\/\\/da529e70c28f4fdf0289d4481496a8f3.jpeg","articles\\/\\/80645ced9b21c512633d7467f1bd4026.jpeg","articles\\/\\/13ce15ee3ef209f834cdfd8650e66f0e.jpeg","articles\\/\\/16e757cded2639708501dae879e16419.jpeg","articles\\/\\/7c615e718b6551dffad40509b76bcefe.jpeg","articles\\/\\/f8dd92945ba391e7f8fde7ff487c36b7.jpeg","articles\\/\\/e0e4e3da9966151c94b0cf5b0db1cb35.jpeg"]',
                'prix_achat' => 20000,
                'prix_vente' => 17000,
                'quantite' => 17,
                'description' => '<p>Le basketball dans le parc, le barbecue du dimanche et le soleil. Le charme continue d&rsquo;op&eacute;rer avec la Nike Air Force 1 &#39;07. Cette silhouette originale du basketball apporte un nouveau souffle &agrave; ses &eacute;l&eacute;ments les plus remarquables : le cuir impeccable, les renforts cousus blancs et l&#39;&eacute;clat qui vous met naturellement en valeur.</p>',
                'code_categorie' => 'mode-homme',
                'code_marq' => 'nk',
                'vues' => 0,
                'enabled' => 1,
                'owner_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-18 11:33:19',
                'updated_at' => '2020-11-27 17:50:54',
            ),
            1 => 
            array (
                'code' => 'bottes-surpiquees',
                'nom' => 'BOTTES SURPIQUÉES',
                'image' => '["articles\\/\\/fe93706f1ba981681819500eda92423f.jpeg","articles\\/\\/04ab2b22437b2193d7617f8194be539d.jpeg","articles\\/\\/180698140d9558bd19075ea4798aa5a1.jpeg","articles\\/\\/20e668d3ac20004ede0a26efb05b1436.jpeg","articles\\/\\/fd6078c688bf5ee72e9bc5e852495987.jpeg","articles\\/\\/f6a40fd3e2d38a8ad06bc3d10426f7f2.jpeg","articles\\/\\/3d7454b5878ba32fa87eb2839032e8b5.jpeg","articles\\/\\/a61752b16bd5597c6423dc97a1a36c55.jpeg","articles\\/\\/7e5f51faf1639c33555c076b4ed61572.jpeg","articles\\/\\/84472a9dcbdd5424c9632018a5e3ed78.jpeg","articles\\/\\/b55d8b3a87c6f1e8e51778af6c584d49.jpeg","articles\\/\\/2cb174b93613da93744858e26b477b2f.jpeg","articles\\/\\/bd6e2dcd5ebdd9218e2a446bdb5fb844.jpeg"]',
                'prix_achat' => 85000,
                'prix_vente' => 75000,
                'quantite' => 13,
                'description' => '<p>Bottes en cuir noir et vert&nbsp;&agrave; lacet. La&ccedil;age&nbsp;&agrave; spet&nbsp;passants. D&eacute;tails surpiqu&eacute; en contraste blancs sur la tige et la semelle tirant &agrave; l&#39;arri&egrave;re. Semelle&nbsp;de couleur noir .</p>',
                'code_categorie' => 'mode-homme',
                'code_marq' => 'Zar',
                'vues' => 0,
                'enabled' => 1,
                'owner_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-25 14:49:42',
                'updated_at' => '2020-11-28 11:58:11',
            ),
            2 => 
            array (
                'code' => 'shein-robe-holographique',
                'nom' => 'SHEIN Robe Holographique',
                'image' => '["articles\\/\\/da03dd051e3c642c2375c702e226d7c3.jpeg","articles\\/\\/fa8e66cc869fc486e14222ac04220491.jpeg","articles\\/\\/c126033453bd52fcee4eb9bafd7ed6b1.jpeg"]',
                'prix_achat' => 20400,
                'prix_vente' => 17000,
                'quantite' => 5,
                'description' => '<h1>SHEIN Robe Holographique Avec Col B&eacute;nitier Et Cha&icirc;ne</h1>',
                'code_categorie' => 'mode-femme',
                'code_marq' => 'Sh',
                'vues' => 0,
                'enabled' => 1,
                'owner_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 12:46:17',
                'updated_at' => '2020-11-30 13:31:26',
            ),
            3 => 
            array (
                'code' => 'shein-robe-bustier',
                'nom' => 'SHEIN Robe Bustier',
                'image' => '["articles\\/\\/5d9939a78a4c7fa1db5238b44abf6d51.jpeg","articles\\/\\/9e7deb2882f6b70f5fed6cb50badf158.jpeg","articles\\/\\/fe44a433e31c2706602ac6e783f1bac0.jpeg"]',
                'prix_achat' => 25000,
                'prix_vente' => 17000,
                'quantite' => 5,
                'description' => '<h1>SHEIN Robe Bustier Moulante En Velours</h1>',
                'code_categorie' => 'mode-femme',
                'code_marq' => 'Sh',
                'vues' => 0,
                'enabled' => 1,
                'owner_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 12:49:57',
                'updated_at' => '2020-11-28 12:49:57',
            ),
            4 => 
            array (
                'code' => 'baskets-noires-gravees',
                'nom' => 'Baskets noires gravées',
                'image' => '["articles\\/\\/7e3b4ed95907c6c12d88660c58bb63b7.jpeg","articles\\/\\/b838bbfb25c305ed30feb8a743934967.jpeg","articles\\/\\/821fce9d5967738ec8c2238ed2bce1af.jpeg"]',
                'prix_achat' => 50000,
                'prix_vente' => 45000,
                'quantite' => 5,
                'description' => '<p>Baskets &agrave; lacets de couleur&nbsp;noire. Gravure sur la tige . Semelles de couleurs&nbsp;vairi&eacute;es&nbsp;blanches et marron.</p>',
                'code_categorie' => 'mode-homme',
                'code_marq' => 'Zar',
                'vues' => 0,
                'enabled' => 1,
                'owner_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 13:06:46',
                'updated_at' => '2020-11-28 13:06:46',
            ),
            5 => 
            array (
                'code' => 'sandales-zara-a-double-bride',
                'nom' => 'Sandales Zara a double bride',
                'image' => '["articles\\/\\/bba72771a4a29d8d2a1ee77d12b5aa41.jpeg","articles\\/\\/d466436b234d97e5757c8d6fe4696040.jpeg","articles\\/\\/cd32f5bcd0b635e19a3eb7d401d561a6.jpeg"]',
                'prix_achat' => 40000,
                'prix_vente' => 33000,
                'quantite' => 10,
                'description' => '<p>Sandales en cuir avec boucles de fermeture d&eacute;corative.&nbsp;</p>',
                'code_categorie' => 'mode-homme',
                'code_marq' => 'Zar',
                'vues' => 0,
                'enabled' => 1,
                'owner_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2020-11-30 09:08:01',
                'updated_at' => '2020-11-30 09:08:49',
            ),
        ));
        
        
    }
}