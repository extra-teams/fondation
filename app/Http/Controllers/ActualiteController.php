<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Partenaires;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Articles::all();
        $partenaires = Partenaires::all();

        return view('actualites.index')->with([
            'articles' => $articles,
            'partenaires' => $partenaires
        ]);
    }

    public function show(string $slug)
    {
        $article = Articles::where('slug', $slug)->first();
        return view('actualites.show')->with([
            'article' => $article
        ]);
    }
}
