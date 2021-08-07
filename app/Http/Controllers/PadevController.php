<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationPadev;
use App\Models\Gallery;
use App\Models\Images;
use App\Models\Padev;
use App\Models\PadevAdmin;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PadevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $images = Images::whereHas('tags', function ($query) {
            return $query->where('code', '=', 'prix-padev');
        })->get();

        $padev = PadevAdmin::OrderBy('fin', 'desc')->first();

        /* pour determiner si l'inscription est tjrs ouverte */
        $inscription = PadevAdmin::Where('debut', '<', Carbon::now()->format('Y-m-d'))
            ->Where('fin', '>', Carbon::now()->format('Y-m-d'))
            ->first();

        return view('padev.index')->with([
            'galleries' => $images,
            'padev' => $padev,
            'inscription' => $inscription
        ]);
    }


    public function get_inscription()
    {
        $countries = Pays::all();
        return view('padev.inscription')->with([
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:2|max:255',
            'prenom' => 'required|min:2|max:255',
            'pays' => 'required|min:2|max:255',
            'adresse' => 'required|min:2',
            'tel' => 'required|min:6|max:15',
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
            return redirect()->back()->withErrors($validator->errors())->withInput();
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

        /* envoie du mail */
        Mail::to($email)->send(new RegistrationPadev($padev));

        return view('padev.confirm')->with([
            'nom' => $nom . "" . $prenom,
        ]);
    }

    public function confirmation()
    {
        return view('padev.confirm');
    }
}
