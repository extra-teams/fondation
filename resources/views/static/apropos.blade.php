@extends('layouts.app')
@section('title','apropos')
@section('content')

    <div class="container">
        <div class="border border-top-0 border-left-0 border-right-0 border-dark pt-3">
            <h1 class="text-center">Qui sommes-nous?</h1>
        </div>
        <div class="pt-5">
            <div>
                <img src="{{asset('images/logo.jpeg')}}" class="float-none float-lg-right img-fluid">
                <p class="font-weight-normal">
                    Notre mission est d’améliorer le quotidien des ivoiriens en proposant
                    aux consommateurs des services en ligne innovants, pratiques et abordables
                    tout en soutenant le développement d’entreprises ayant recours à notre plateforme
                    pour satisfaire leurs clients.<br>
                    Notre plateforme réunit une MarketPlace, qui connecte vendeurs et acheteurs,
                    un réseau logistique, qui permet la livraison de colis, et un service
                    de paiement, qui facilite les transactions de nos clients dans la plupart de nos
                    marchés. <br>
                    Nous ouvrons le champ des possibles pour une nouvelle génération de talents en
                    créant des opportunités de carrière et en accompagnant le développement de
                    nouvelles compétences sur le continent.<br>
                </p>
            </div>
        </div>
        <div class="pt-3 pb-3">
            <div class="ml-5">
                <h3><li>Nos ambitioms</li></h3>
            </div>
            <div>
                <p class="font-weight-normal">
                    Créé en Novembre 2020, fondation225 est un des sites émergent de e-commerce en Côte d'Ivoire.
                    Nous proposons à nos clients un large assortiment de produits, des prix
                    compétitifs et des délais de livraison toujours plus réduits, dans le but d'offrir
                    une expérience client de qualité.<br>
                </p>
            </div>
        </div>
    </div>


@endsection 