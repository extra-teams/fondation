<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produits;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        /* une variable session */
        $client = Auth::user();
        return view('checkout.index', compact('client'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Vérification du stock
        $items = \Cart::Content();
        foreach ($items as $row) {
            $product = Produits::findOrFail($row->id);
            //dd($row->qty);
            if ($product->quantite < $row->qty) {
                session()->flash('alerte', 'Nous sommes désolés mais le produit "' . $row->name . '" ne dispose pas d\'un stock suffisant pour satisfaire votre demande. Il ne reste que ' . $product->quantite . ' exemplaires disponibles.');
                session()->flash('type', 'success');
                return back();
            }
        }

        /* vars */
        $client = Auth::user();
        $numero = trim($request->get('tel'));
        $communev = request()->input('commune');
        $clientid = $client->id;

        /* mise à jour du numero */
        if ($client->telephone != $numero) {
            $client->telephone = $numero;
            $client->save();
        }
        /* Info sur la commune */
        $commune = \DB::table('communes')->where('nom', $communev)->first();

        /* inseration d'une nouvelle adresse */
        $adresse = new Adresse();
        $adresse->id_client = $clientid;
        $adresse->code_commune = $commune->code;
        $adresse->description = $request->adresse;
        $saved = $adresse->save();

        /* if insert successful */
        if ($saved) {
            /* enregistrer la commande */
            $id_c = \DB::table('commandes')->insertGetId(array('id_client' => $client->id, 'id_adr' => $adresse->id, 'montant' => \Cart::total(), 'quantite' => \Cart::count(), "created_at" => now(), "updated_at" => now()));
            /* enregistrer les details */
            foreach (\Cart::content() as $produit) {
                $couleur = \DB::table('couleurs')->where('nom', $produit->options->couleur)->first();
                $code_couleur = $couleur ? $couleur->code : "#fff";
                $taille = \DB::table('tailleproduits')->where('nom', $produit->options->taille)->first();
                $code_taille = $taille ? $taille->code : "S/M";
                \DB::table('detailcommandes')->insert(array('id_commande' => $id_c, 'code_prod' => $produit->model->code, 'code_couleur' => $code_couleur, 'code_taille' => $code_taille, 'quantite' => $produit->qty, 'prix_vente' => $produit->model->prix_vente, 'prix_achat' => $produit->model->prix_achat));
            }

            /* envoie du mail */
            $data = [
                'subject' => 'Nouvelle Commande sur fondation225.ci',
                'from' => 'contact@fondation225.ci',
                'from_name' => 'fondation225.ci',
                'template' => 'mail.neworder',
                'info' => [
                    'fullname' => $client->nom . ' ' . $client->prenom,
                    'id_commande' => $id_c,
                    'date' => now(),
                    'quantite' => \Cart::count(),
                    'montant' => \Cart::total(),
                    'lien' => 'http://www.fondation225.ci/',
                    'nom_lien' => 'se connecter'
                ]
            ];

            $details['type_email'] = 'neworder';
            $details['email'] = "contact@fondation225.ci";
            $details['data'] = $data;

            dispatch(new \App\Jobs\SendEmailJob($details));

            /* modifier le stock */
            $this->updateStock();

            /* supprimer le panier */
            \Cart::destroy();
            /* afficher les messages */
            $request->session()->put('num', $id_c);
            session()->flash('alerte', 'commande effectué avec succès .');
            session()->flash('type', 'success');
            return redirect()->route('checkout.confirmation');
        }
        /* else if */
        session()->flash('alerte', 'une erreur est survenue pendant la validation de la commande , veuillez réessayer .');
        session()->flash('type', 'danger');
        return redirect()->back();
    }

    public function updateStock()
    {
        foreach (\Cart::content() as $item) {
            $produit = Produits::find($item->model->code);
            $produit->update([
                'quantite' => $produit->quantite - $item->qty,
            ]);
        }
    }


    public function confirmation()
    {
        return view('checkout.confirmation');
    }
}
