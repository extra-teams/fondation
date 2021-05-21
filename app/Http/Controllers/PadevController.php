<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PadevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('padev.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function get_inscription(){
        return view('padev.inscription');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* vars */
        $nom = trim($request->nom);
        $prenom = trim($request->prenom);
        $pays = trim($request->pays);
        $adresse = trim($request->adresse);
        $telephone = trim($request->telephone);
        $email = trim($request->email);
        $site = trim($request->site);
        $secteur = trim($request->secteur);
        $entreprise = trim($request->entreprise);
        $profession = trim($request->profession);
        $titre = trim($request->titre);
        $representation_afrique = trim($request->representation_afrique);
        $employes_afrique = trim($request->employes_afrique);
        $impact = trim($request->impact);
        $palmares = trim($request->palmares);

        /* envoie du mail */
        $data = [
            'subject' => 'Inscription au PADEV 2021',
            'from' => 'contact@yebay.ci',
            'from_name' => 'fondation225.org',
            'template' => 'mail.blank',
            'info' => [
                'fullname' => $nom . ' ' . $prenom,
                'contenu' => 'Bonjour , <br> vous venez de créer un compte sur www.yebay.ci , vous pouvez vous connectez dès maintenant avec vos identifiants .',
                'lien' => 'http://www.yebay.ci/',
                'nom_lien' => 'se connecter'
            ]
        ];
        Mail::to(request('email'))->send(new \App\Mail\sendMail($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
