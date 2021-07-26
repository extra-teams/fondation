<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Adresse;
use App\Models\Commande;
use App\Models\CommandeDetail;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produits;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $countries = Pays::all();
        /* une variable session */
        $client = Auth::user();
        return view('checkout.index')->with([
            'client' => $client,
            'countries' => $countries
        ]);
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

        $validator = Validator::make($request->all(), [
            'tel' => 'required|min:8|max:20',
            'adresse' => 'required|max:50',
            'ville' => 'required|max:30',
            'code_bp' => 'required|max:30'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        /* vars */
        $client = Auth::user();
        $numero = trim($request->get('tel'));
        $pays = trim($request->get('pays'));
        $adresse = trim($request->get('adresse'));
        $ville = trim($request->get('ville'));
        $code_bp = trim($request->get('code_bp'));

        $clientid = $client->id;

        /* mise à jour du numero */
        if ($client->telephone != $numero) {
            $client->telephone = $numero;
            $client->save();
        }

        /* enregistrer la commande */
        $commande = new Commande();
        $commande->id_client = $clientid;
        $commande->montant = \Cart::total();
        $commande->quantite = \Cart::count();
        $commande->pays = $pays;
        $commande->ville = $ville;
        $commande->codebp = $code_bp;
        $commande->adresse = $adresse;
        $commande->save();

        /* enregistrer les details de la commande */
        foreach (\Cart::content() as $produit) {
            $detail = new CommandeDetail();
            $detail->id_commande = $commande->id;
            $detail->code_prod = $produit->model->code;
            $detail->quantite = $produit->qty;
            $detail->prix_vente = $produit->model->prix_vente;
            $detail->prix_achat = $produit->model->prix_achat;
            $detail->id_commande = $commande->id;
            $detail->save();
        }
        /* envoie du mail */
        /* modifier le stock */
        $this->updateStock();
        /* supprimer le panier */
        \Cart::destroy();
        /* afficher les messages */
        return redirect()->route('checkout.confirmation');
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
