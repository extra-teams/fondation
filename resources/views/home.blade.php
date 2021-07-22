@extends('layouts.app')
@section('title','Fondation 225')
@section("extra-css")
    <link rel="stylesheet" href="{{asset("library/fancybox/jquery.fancybox-1.3.4.css")}}" type="text/css"
          media="screen"/>
@endsection

@section('content')
    <!-- caoursel -->
    <div id="slide" class="carousel slide mb-5" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            @foreach (DB::table('slider')->get() as $sliders)
                @if ($loop->first)
                    <div class="carousel-item active"
                         style="background-image: url('{{asset($sliders->nom)}}')">
                        <div class="carousel-text">
                            @if(!is_null($sliders->texte))
                                <p>{!! $sliders->texte !!}</p>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="carousel-item "
                         style="background-image: url('{{asset($sliders->nom)}}')">
                        <div class="carousel-text">
                            @if(!is_null($sliders->texte))
                                <p>{!! $sliders->texte !!}</p>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center">
            <h2 class="main-title">Qui Sommes <br> Nous ?</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="main-introduction">
                    La Fondation 225 est une Organisation Non Gouvernementale à but humanitaire
                    fondée le 21 NOVEMBRE 2012 à Ouagadougou sous le récépissé N°001724/MATDS/SG/DGLPAP/DAOSOC
                    du 31 DECEMBRE 2012. Elle est le fruit de l’initiative d’hommes et de femmes originaires de
                    différents pays d’Afrique de l’ouest, principalement de la Côte d’Ivoire et du Burkina Faso.
                    La Fondation 225 a pour objet d’accélérer l’intégration ouest-africaine en œuvrant à la
                    traduire en une réalité concrète dans les politiques des Etats et dans le vécu des populations,
                    en amenant celles-ci à mieux se l’approprier
                </p>
            </div>
        </div>
    </div>

    <!-- domaine intervention -->
    <div class="container mb-5">
        <h2 class="main-title">Nos Domaines <br> d'Intervention</h2>
        <p class="main-introduction">Tourisme, études, congrès, implantation ou développement d’activité : nos équipes
            se mobilisent pour vous accompagner dans la réussite de toutes vos initiatives !</p>
        <div class="row mt-5 align-content-lg-between justify-content-around">
            <!-- card 1 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card-domaine">
                    <div class="card-domaine-header">
                        <img src="https://lanouvelletribune.info/wp-content/uploads/2017/09/medecin-docteur.jpg" alt="">
                    </div>
                    <div class="card-domaine-body">
                        <h3 class="main-title">LA SANTE</h3>
                        <p class="main-introduction">
                            Nous voulons appuyer les politiques gouvernementales en matière de création de centres de santé et d’accès des populations aux soins.
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card-domaine">
                    <div class="order-1 order-lg-0  card-domaine-body ">
                        <h3 class="main-title">L’ÉDUCATION !</h3>
                        <p class="main-introduction">
                            Par la promotion de la scolarisation gratuite et obligatoire pour garçons et filles, l’alphabétisation, la création d’infrastructures additionnelles.
                        </p>
                    </div>
                    <div class="order-0 order-lg-1 card-domaine-header">
                        <img src="https://environnement-afrique.com/wp-content/uploads/2019/05/doug-linstedt-135670-unsplash-e1522102793597.jpg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row  justify-content-around mt-2">
            <!-- card 1 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class=" card-domaine">
                    <div class="card-domaine-header">
                        <img src="https://www.afrik21.africa/wp-content/uploads/2019/07/shutterstock_722601193-800x400.jpg"
                             alt="">
                    </div>
                    <div class="card-domaine-body">
                        <h3 class="main-title">
                            L’ENVIRONNEMENT
                        </h3>
                        <p class="main-introduction">
                            ar la protection des forêts et de la faune, la lutte contre l’avancée du sahel par le reboisement, contre la pollution atmosphérique, des eaux et du cadre de vie.
                        </p>
                    </div>
                </div>
            </div>


            <!-- card 2 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card-domaine">
                    <div class="order-1 order-lg-0 card-domaine-body">
                        <h3 class="main-title">L’IMMIGRATION CLANDESTINE</h3>
                        <p class="main-introduction">
                            Nous luttons contre l’immigration clandestine et la fuite des cerveaux vers les pays du nord, une aventure pleine de risque.
                        </p>
                    </div>
                    <div class="order-0 order-lg-1 card-domaine-header">
                        <img src="https://www.lintelligentdabidjan.info/news/wp-content/uploads/2017/04/Aeoroport_FHB19.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nos Actions Caritatives -->
    <div class="container mb-5">
        <div class="text-center">
            <h2 class="main-title">Nos Actions Caritatives</h2>
        </div>
        <div class="row slider">
            <!-- slider 1 -->
            <div class="mb-2 col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative4.jpg')}}" class="fancybox" rel="ligthbox">
                        <img src="{{asset('images/caritative/caritative4.jpg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="mb-2 col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative1.jpeg')}}" class="fancybox" rel="ligthbox">
                        <img src="{{asset('images/caritative/caritative1.jpeg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="mb-2 col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative2.jpeg')}}" class="fancybox" rel="ligthbox">
                        <img src="{{asset('images/caritative/caritative2.jpeg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="mb-2 col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative3.jpeg')}}" class="fancybox" rel="ligthbox">
                        <img src="{{asset('images/caritative/caritative3.jpeg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- LA BOUTIQUE HUMANITAIRE -->
    @if(isset($produits) && count($produits)>0)
        <div class="container mb-5">
            <div class="text-center">
                <h2 class="main-title">LA BOUTIQUE <br> HUMANITAIRE</h2>
            </div>
            <div class="row col-lg-none ">
                @foreach ($produits as $produit)
                    <div class="col-6 col-lg-3">
                        <div class="card_product">
                            @php
                                if (isset($produit)){
                                    $image = $produit->image[0];
                                }else{
                                    $image="img.jpg";
                                }
                            @endphp
                            @if(file_exists(public_path().'/storage/'.$image))
                                <div class="top" style="background-image: url('{{asset('storage/'.$image)}}')">
                                </div>
                            @else
                                <div class="top"
                                     style="background-image: url('{{asset('images/articles/noavailable.png')}}')">
                                </div>
                            @endif
                            <div class="bottom text-center">
                                <span class="name d-inline-block text-truncate">{{$produit->nom}}</span>
                                <div class="">
                                    <span class="current-price">{{$produit->prix_vente}} FCFA</span>
                                    <span class="old-price">{{$produit->prix_achat}} FCFA</span>
                                </div>
                                <a href="{{route('produits.show',$produit->code)}}">
                                    <button class="btn">Ajouter au panier</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- NOTRE EQUIPE -->
    <div class="container mb-5">
        <h2 class="main-title">NOTRE EQUIPE</h2>
        <div class="row justify-content-center">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/chargerdesprojets.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. OUEDRAOGO OUSMANE</span>
                        <p class="role">Chargé des Projets</p>
                    </div>
                </div>
            </div>

            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/president.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. KOFFI KOUADIO</span>
                        <p class="role">Président Exécutif<br>Commissaire Général du prix PADEV</p>
                    </div>
                </div>
            </div>

            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/secretaire.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. KOFFI KONAN CLAUDE</span>
                        <p class="role">Secrétaire Général</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5">
                <div class="card-team mx-auto">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/tresorier.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">CONGO RAKIATOU</span>
                        <p class="role">Trésorière</p>
                    </div>
                </div>
            </div>


            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/comissaire.jpeg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. Jérémie ARBE SAWADOGO</span>
                        <p class="role">Commissaire général des activités de développement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("extra-js")
    <script type="text/javascript" src="{{asset("library/fancybox/jquery.fancybox-1.3.4.pack.js")}}"></script>
    <script type="text/javascript">
        $("a[rel=ligthbox]").fancybox({
            'titlePosition': 'inside',
            'transitionIn': 'none',
            'transitionOut': 'none'
        });
    </script>
    <!-- tinyslider -->
    <script type="module">
        var slider = tns({
            container: '.slider',
            items: 4,
            center: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoWidth: true,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
            responsive: {
                640: {
                    edgePadding: 20,
                    gutter: 40,
                    items: 1
                },
                700: {
                    gutter: 30
                },
                900: {
                    items: 3
                }
            }
        });
    </script>
@endsection