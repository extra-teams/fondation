@extends('layouts.app')
@section('title','Fondation 225')
@section("extra-css")
    <link rel="stylesheet" href="{{asset("library/fancybox/jquery.fancybox-1.3.4.css")}}" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
@endsection

@section('content')
    <!-- caoursel -->
    <div id="carousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach (DB::table('slider')->get() as $sliders)
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="{{$loop->index}}" class="active"
                        aria-current="true" aria-label="Slide {{$loop->index}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach (DB::table('slider')->get() as $sliders)
                @if ($loop->first)
                    <div class="carousel-item active" style="background-image: url('{{asset($sliders->nom)}}')"
                         data-bs-interval="5000">
                        <div class="carousel-caption">
                            @if(!is_null($sliders->texte))
                                {!! $sliders->texte !!}
                            @endif
                        </div>
                    </div>
                @else
                    <div class="carousel-item " style="background-image: url('{{asset($sliders->nom)}}')"
                         data-bs-interval="5000">
                        <div class="carousel-caption">
                            @if(!is_null($sliders->texte))
                                {!! $sliders->texte !!}
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center">
            <h2 class="main-title">{{__("home.qui")}}<br>{{__("home.nous")}}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="main-introduction" data-aos="fade-in">
                    {{__("home.desc")}}
                </p>
            </div>
        </div>
    </div>

    <!-- domaine intervention -->
    <div class="container mb-5">
        <h2 class="main-title">{{__("home.domaine")}}<br>{{__("home.intervention")}}</h2>
        <p class="main-introduction">{{__("home.desc2")}}</p>
        <div class="row mt-5 align-content-lg-between justify-content-around">
            <!-- card 1 -->
            <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up">
                <div class="card-domaine">
                    <div class="card-domaine-header">
                        <img src="https://lanouvelletribune.info/wp-content/uploads/2017/09/medecin-docteur.jpg" alt="">
                    </div>
                    <div class="card-domaine-body">
                        <h3 class="main-title">{{__("home.sante")}}</h3>
                        <p class="main-introduction">
                            {{__("home.sante_desc")}}
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up">
                <div class="card-domaine">
                    <div class="order-1 order-lg-0  card-domaine-body ">
                        <h3 class="main-title">{{__("home.education")}}</h3>
                        <p class="main-introduction">
                            {{__("home.education_desc")}}
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
            <div class="col-12 col-sm-6 col-md-4" data-aos="fade-down-left">
                <div class=" card-domaine">
                    <div class="card-domaine-header">
                        <img src="https://www.afrik21.africa/wp-content/uploads/2019/07/shutterstock_722601193-800x400.jpg"
                             alt="">
                    </div>
                    <div class="card-domaine-body">
                        <h3 class="main-title">
                            {{__("home.environnement")}}
                        </h3>
                        <p class="main-introduction">
                            {{__("home.environnement_desc")}}
                        </p>
                    </div>
                </div>
            </div>


            <!-- card 2 -->
            <div class="col-12 col-sm-6 col-md-4" data-aos="fade-down-right">
                <div class="card-domaine">
                    <div class="order-1 order-lg-0 card-domaine-body">
                        <h3 class="main-title">{{__("home.immigration")}}</h3>
                        <p class="main-introduction">
                            {{__("home.immigration_desc")}}
                        </p>
                    </div>
                    <div class="order-0 order-lg-1 card-domaine-header">
                        <img src="https://www.lintelligentdabidjan.info/news/wp-content/uploads/2017/04/Aeoroport_FHB19.jpg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nos Actions Caritatives -->
    @if(isset($galleries) && count($galleries)>0)
        <div class="container mb-5">
            <div class="text-center">
                <h2 class="main-title">{{__("home.action")}}</h2>
            </div>
            <div class="row slider">
            @foreach($galleries as $gallerie)
                <!-- slider 1 -->
                    <div class="mb-2 col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover">
                        <div class="wprock-img-zoom">
                            <a href="{{asset('storage/'.$gallerie->fichier)}}" class="fancybox" rel="ligthbox">
                                <img src="{{asset('storage/'.$gallerie->fichier)}}" class="zoom img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- LA BOUTIQUE HUMANITAIRE -->
    @if(isset($produits) && count($produits)>0)
        <div class="container mb-5">
            <div class="text-center">
                <h2 class="main-title">{{__("home.boutique")}}<br>{{__("home.humanitaire")}}</h2>
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
                                </div>
                                <a href="{{route('produits.show',$produit->code)}}">
                                    <button class="btn">{{__("home.panier")}}</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Actualites -->
    @if(isset($articles) && count($articles)>0)
        <div class="container mt-5">
            <div class="row">
                <h2 class="main-title">{{__("home.actualite")}}</h2>
            </div>
            <div class="row justify-content-center align-content-center">
            @foreach($articles as $article)
                <!-- card 1 -->
                    <a href="{{$article->slug}}">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card-news">
                                <div class="card-news-header">
                                    <img src="{{asset($article->cover)}}" alt="{{asset($article->title)}}">
                                </div>
                                <div class="card-news-body">
                                    <h5 class="card-title">
                                        {{$article->titre}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    <!-- NOTRE EQUIPE -->
    <div class="container mb-5">
        <h2 class="main-title">{{__("home.equipe")}}</h2>
        <div class="row justify-content-center">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5" data-aos="fade-down-up">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/chargerdesprojets.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. OUEDRAOGO OUSMANE</span>
                        <p class="role">{{__("home.poste1")}}</p>
                    </div>
                </div>
            </div>

            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5" data-aos="fade-down-left">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/president.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. KOFFI KOUADIO</span>
                        <p class="role">{{__("home.poste2")}}<br>{{__("home.poste3")}}</p>
                    </div>
                </div>
            </div>

            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5" data-aos="fade-down-right">
                <div class="card-team">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/secretaire.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">M. KOFFI KONAN CLAUDE</span>
                        <p class="role">{{__("home.poste4")}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-down-top">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-5 mb-5">
                <div class="card-team mx-auto">
                    <div class="card-team-header">
                        <img src="{{asset('images/equipe/tresorier.jpg')}}" class="img-fluid avatar" alt="">
                    </div>
                    <div class="card-team-body">
                        <span class="name">CONGO RAKIATOU</span>
                        <p class="role">{{__("home.poste5")}}</p>
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
                        <p class="role">{{__("home.poste6")}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- partenaires -->
    @if(isset($partenaires) && count($partenaires)>0)
        <div class="container mt-5 mb-5">
            <div class="row">
                <h2 class="main-title">Nos partenaires</h2>
            </div>
            <div class="row slider-partenaire justify-content-center align-content-center">
                @foreach($partenaires as $partenaire)
                    <div class="col-2 col-md-2 logo-partenaire">
                        <a href="{{$partenaire->url}}">
                            <img  src="{{$partenaire->logo}}" alt="{{$partenaire->nom}}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection


@section("extra-js")
    <!-- fancybox -->
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

        var slider2 = tns({
            container: '.slider-partenaire',
            items: 2,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
            mouseDrag: true,
            responsive: {
                350: {
                    items: 3
                },
                640: {
                    edgePadding: 20,
                    items: 1
                },
                700: {
                    items: 3
                },
                900: {
                    items: 5
                }
            }
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection