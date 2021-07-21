<?php

namespace App\Http\Controllers;

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
        return view('home')->with([
            'produits' => $Produits,
            'sliders' => $Sliders
        ]);
    }

    public function motdupresident()
    {
        return view('static.motdupresident');
    }
}
