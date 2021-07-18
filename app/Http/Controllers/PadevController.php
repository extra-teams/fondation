<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Padev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PragmaRX\Countries\Package\Countries;

class PadevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('padev.index');
    }


    public function get_inscription()
    {
        $countries = new Countries();
        $allcountries = $countries->all();
        return view('padev.inscription')->with([
            'countries' => $allcountries
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
        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:2|max:255',
            'prenom' => 'required|min:2|max:255',
            'pays' => 'required|min:2|max:255',
            'adresse' => 'required|min:2',
            'tel' => 'required|min:6|max:255',
            'entreprise' => 'required|min:2|max:255',
            'profession' => 'required|min:2|max:255',
            'titre' => 'required|min:2|max:255',
            'secteur' => 'required|min:2|max:255',
            'nombreParticipant' => 'required|numeric',
            'email' => 'required|email',
            'impact' => 'required|min:2|max:255',
            'nbreEmploye' => 'required|numeric',
            'nbreRepresentation' => 'required|numeric',
            'palmares' => 'required',
            'statut' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('alerte', 'veuillez choisir votre statut');
            session()->flash('type', 'error');
            return redirect()->back()->withErrors($validator->errors());
        }
        /* vars */
        $nom = trim($request->nom);
        $prenom = trim($request->prenom);
        $pays = trim($request->pays);
        $adresse = trim($request->adresse);
        $telephone = trim($request->tel);
        $email = trim($request->email);
        $site = trim($request->siteweb);
        $entreprise = trim($request->entreprise);
        $profession = trim($request->profession);
        $titre = trim($request->titre);
        $secteur = trim($request->secteur);
        $nbre_representation = trim($request->nbreRepresentation);
        $nbre_employe = trim($request->nbreEmploye);
        $nbre_participant = trim($request->nombreParticipant);
        $impact = trim($request->impact);
        $palmares = trim($request->palmares);
        $statut = trim($request->statut);

        $padev = new Padev();
        $padev->nom = $nom;
        $padev->prenoms = $prenom;
        $padev->pays = $pays;
        $padev->telephone = $telephone;
        $padev->adresse = $adresse;
        $padev->email = $email;
        $padev->site = $site;
        $padev->secteur = $secteur;
        $padev->nom_entreprise = $entreprise;
        $padev->profession = $profession;
        $padev->titre = $titre;
        $padev->nbre_employe = $nbre_employe;
        $padev->nbre_representation = $nbre_representation;
        $padev->nbre_participant = $nbre_participant;
        $padev->impact = $impact;
        $padev->palmares = $palmares;
        $padev->statut = $statut;
        $padev->save();

        return redirect()->route('padev.confirmation')->with([
            'nom' => $nom
        ]);
    }

    public function confirmation($noms)
    {
        return view('padev.confirm')->with(["noms" => $noms]);
    }
}
