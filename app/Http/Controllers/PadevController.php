<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
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
        return view('padev.index');
    }


    public function get_inscription()
    {
        return view('padev.inscription');
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
        $telephone = trim($request->telephone);
        $email = trim($request->email);
        $site = trim($request->site);
        $secteur = trim($request->secteur);
        $entreprise = trim($request->nom_entreprise);
        $profession = trim($request->profession);
        $titre = trim($request->titre);
        $nbre_representation = trim($request->nbre_representation);
        $nbre_employe = trim($request->nbre_employe);
        $nbre_participant = trim($request->nbre_participant);
        $impact = trim($request->impact);
        $palmares = trim($request->palmares);
        $statut = trim($request->statut);

        \DB::table("padev")->insert(["nom" => $nom, "prenoms" => $prenom, "pays" => $pays, "adresse" => $adresse,
            "telephone" => $telephone, "email" => $email, "site" => $site, "secteur" => $secteur, "nom_entreprise" => $entreprise,
            "profession" => $profession, "titre" => $titre, "nbre_representation" => $nbre_representation, "nbre_employe" => $nbre_employe,
            "nbre_participant" => $nbre_participant, "impact" => $impact, "palmares" => $palmares, "statut" => $statut]);
        /* envoie du mail */
        $noms = trim($nom . ' ' . $prenom);
        $data = [
            'subject' => 'Demande d\'inscription au PADEV 2021',
            'from' => 'contact@fondation225.org',
            'from_name' => 'fondation225.org',
            'template' => 'mail.blank',
            'info' => [
                'fullname' => $noms,
                'contenu' => 'votre demande d\'inscription au padev 2021 a été prise en compte , nous vous contacterons pour confirmation <br> Merci !',
                'lien' => 'http://fondation225.org/',
                'nom_lien' => 'allez sur le site'
            ]
        ];
        $details['type_email'] = 'blank';
        $details['email'] = $email;
        $details['data'] = $data;


        $data2 = [
            'subject' => 'Nouvelle demande d\'inscription au PADEV 2021',
            'from' => 'contact@fondation225.org',
            'from_name' => 'fondation225.org',
            'template' => 'mail.blank',
            'info' => [
                'fullname' => '',
                'contenu' => "une nouvelle demande d'inscription au padev 2021 à été envoyé <br>
                 [ informations sur le client ] <br>
                 nom : $nom <br>
                 prenom : $prenom <br>
                 pays : $pays <br>
                 adresse : $adresse <br>
                 telephone : $telephone <br>
                 email : $email <br>
                 site : $site <br>
                 secteur : $secteur <br>
                 entreprise : $entreprise <br>
                 profession : $profession <br>
                 titre : $titre <br>
                 nombre de representation en afrique : $nbre_representation <br>
                 nbre_employe : $nbre_employe <br>
                 nbre_participant : $nbre_participant<br>
                 impact : $impact <br>
                 palmares : $palmares <br>
                 statut : $statut <br>
                 ",
                // 'lien' => 'http://fondation225.org/',
                // 'nom_lien' => 'allez sur le site'
            ]
        ];

        $details2['type_email'] = 'neworder';
        $details2['email'] = "virtus225one@gmail.com";
        $details2['data'] = $data2;


        // Mail::to($email)->send(new \App\Mail\sendMail($data));
        dispatch(new SendEmailJob($details));
        // Mail::to($email)->send(new \App\Mail\sendMail($data));
        dispatch(new SendEmailJob($details2));
        return redirect()->route('padev.confirmation', [$noms]);
    }

    public function confirmation($noms)
    {
        return view('padev.confirm')->with(["noms" => $noms]);
    }
}
