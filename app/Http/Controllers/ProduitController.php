<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Souscategories;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        if (request()->categorie and request()->souscategorie) {
            switch (request()->input('trie')) {
                case 1:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)
                        ->where('code_categorie', request()->categorie)
                        ->orderBy('prix_vente', 'ASC')->paginate(36);
                    break;
                case 2:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)
                        ->where('code_categorie', request()->categorie)
                        ->orderBy('prix_vente', 'DESC')->paginate(36);
                    break;
                default:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)
                        ->where('code_categorie', request()->categorie)
                        ->orderBy('created_at', 'DESC')->paginate(36);
                    break;
            }
            $titre = DB::table('souscategories')->where('code', request()->souscategorie)->first()->nom;
        } else if (request()->categorie) {
            $liste_cate = (request()->input());
            unset($liste_cate['categorie'], $liste_cate['trie']);
            $categories_coches = array_keys($liste_cate);
            if (count($categories_coches) == 0) {
                return redirect('/produits');
            }
            switch (request()->input('trie')) {
                case 1:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->whereIn('code_categorie', $categories_coches)
                        ->orderBy('prix_vente', 'ASC')->paginate(36);
                    break;
                case 2:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->whereIn('code_categorie', $categories_coches)
                        ->orderBy('prix_vente', 'DESC')->paginate(36);
                    break;
                default:
                    $produits = DB::table('produits')->orderBy('created_at', 'DESC')->where('enabled', 1)->where('quantite', '>', 0)->whereIn('code_categorie', $categories_coches)
                        ->paginate(36);
                    break;
            }

            // dd($produits);
        } else if (request()->souscategorie) {
            $liste_souscate = (request()->input());
            $souscategorie = array_values($liste_souscate);

            switch (request()->input('trie')) {
                case 1:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->whereIn('code_souscategorie', $souscategorie)
                        ->orderBy('prix_vente', 'ASC')->paginate(36);
                    break;
                case 2:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->whereIn('code_souscategorie', $souscategorie)
                        ->orderBy('prix_vente', 'DESC')->paginate(36);
                    break;
                default:
                    $produits = DB::table('produits')->orderBy('created_at', 'DESC')->where('enabled', 1)->where('quantite', '>', 0)->whereIn('code_souscategorie', $souscategorie)
                        ->paginate(36);
                    break;
            }

            $titre = DB::table('souscategories')->where('code', request()->souscategorie)->first()->nom;
        } else {
            switch (request()->input('trie')) {
                case 1:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->orderBy('prix_vente', 'ASC')->paginate(36);
                    break;
                case 2:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->orderBy('prix_vente', 'DESC')->paginate(36);
                    break;
                default:
                    $produits = DB::table('produits')->where('enabled', 1)->where('quantite', '>', 0)->orderBy('created_at', 'DESC')->paginate(36);

                    break;
            }
            $titre = "Tous Les Produits";
        }
        $categories_coches = $categories_coches ?? [];
        $titre = $titre ?? 'Nos Produits';
        return view('produits.index', compact('produits', 'categories_coches', 'titre'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function show($id)
    {
        $couleurs = DB::table('produit_has_couleurs')->where('code_prod', $id)->get();
        $tailles = DB::table('produit_has_taille')->where('code_prod', $id)->get();

        $produit = DB::table('produits')->where('code', $id)->first();
        /* si aucun produit avec ce nom */
        if (is_null($produit)) {
            return redirect('/');
        }
        $categorie = Categories::find($produit->code_categorie);
        $souscategorie = Souscategories::find($produit->code_souscategorie);
        $lien = array(
            $categorie->nom => "produits.index",
            $souscategorie->nom => "produits.index",
            $produit->nom => "produits.show"
        );
        return view('produits.detail', compact('produit', 'couleurs', 'tailles', 'lien', 'categorie', 'souscategorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function search()
    {
        $q = request()->input('q');

        request()->validate([
            'q' => 'required|min:3'
        ]);

        $products = DB::table('produits')->where('nom', 'like', "%$q%")
            ->orWhere('description', 'like', "%$q%")
            ->paginate(36);
        $titre = "";
        return view('produits.recherche')->with(['produits' => $products, 'titre' => $titre, 'categories_coches' => []]);
    }
}
