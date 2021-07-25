<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Gallery;
use App\Models\Produits;
use App\Models\Sliders;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $Produits = Produits::where('quantite', '>', 0)->where('enabled', 1)->take(4)->get();
        $Sliders = Sliders::all();
        $galleries = Gallery::whereHas('tags', function ($query) {
            return $query->where('code', '=', 'actions-caritatives');
        })->where('image', '=', 1)->limit(4)->get();
        $articles = Articles::whereHas('tags', function ($query) {
            return $query->where('code', '=', 'padev');
        })->limit(3)->get();

        return view('home')->with([
            'produits' => $Produits,
            'sliders' => $Sliders,
            'galleries' => $galleries,
            'articles' => $articles
        ]);
    }

    public function motdupresident()
    {
        return view('static.motdupresident');
    }
}
