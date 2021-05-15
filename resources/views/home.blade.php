@extends('layouts.app')
@section('title','yebay')
@section('content')
    <!-- caoursel -->
    <div id="slide" class="carousel slide" data-ride="carousel" data-interval="3000">
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

    {{-- <!-- première bannière publicitaire -->
    <div class="container-fulid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 col-md-4">
                <div class="single-banner">
                    <a href="{{route('produits.index')}}"><img
                                src="{{asset('images/banner/0001-13692069350.png')}}"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="single-banner">
                    <a href="{{route('produits.index')}}"><img src="{{asset('images/banner/9.png')}}"></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- 10 produitrs -->
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">MOT DU PRESIDENT</h2>
        </div>
        <div>
                <img src="{{asset('images/president.jpg')}}" class="float-left mr-3" style="width:420px;heigth:auto"> 
                <p>
                    La question du développement de l’Afrique se pose plus que jamais avec acuité au moment
                    où l’on entame la deuxième décennie du troisième millénaire. À ce stade de la marche
                    historique de l’humanité, notre continent continue comme par le passé de pointer à la
                    dernière place des peuples. Il demeure toujours le terrain d’expression par excellence des
                    guerres civiles (désormais compliquées par le djihadisme), des violences politiques, des
                    épidémies avec la résurgence du virus d’Ebola, des famines, de l’analphabétisme, etc.
                    Certes depuis quelques années maintenant, les institutions internationales, notamment le
                    FMI, annoncent une situation en constante amélioration en Afrique avec un taux de
                    croissance global au-dessus de 5%. C’est un bel indicateur. Mais notre joie en est-elle pour
                    autant parfaite ?
                    Ce taux de croissance économique élevé a beau donner du baume au moral, il reste que
                    dans la pratique, il ne se traduit toujours pas en un essor économique et social pour les
                    populations : le niveau de vie toujours dérisoire et la pauvreté omniprésence demeurent
                    encore la chose la mieux partagée dans la quasi-totalité des pays africains. La croissance ne
                    reste appréciable qu’au niveau macroéconomique, quand les sempiternels maux qui ont
                    toujours fait la mauvaise réputation de l’Afrique demeurent ! La terrible épidémie du virus
                    d’Ebola qui frappe plusieurs pays de la sous-région ouest-africaine qui sont incapables de la
                    vaincre, nous a brutalement rappelé toute la précarité de la situation globale de notre
                    continent!
                    Cette triste réalité, qu’étaient en train de nous voiler tous ces discours et projections sur la
                    croissance économique, doit aujourd’hui plus qu’hier décider chaque Africain à une prise de
                    conscience autour de la question du développement de nos pays : chacun de nous, en tant
                    qu’individu, doit se l’approprier et non plus la laisser aux seules mains de nos décideurs
                    politiques.
                    Bien à vous, sœurs et frères Africains.
                    KOFFI KOUADIO/Mr
                    Président exécutif de la
                    Fondation 225
                </p>
        </div>  
    </div>
        
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">NOS PRODUITS <a href="{{url('produits')}}" class="fa fa-angle-right float-right mr-5" style="color: black"></a></h2>
        </div>
        <div class="row col-lg-none ">
            @foreach (DB::table('produits')->where('enabled',1)->where('quantite','>',0)->inRandomOrder()->take(4)->get() as $produit)

                <div class="col-6 col-lg-3">
                    <div class="card_product">
                        @php $liens=$produit->image; $lien=json_decode($liens); $img="img.jpg";
                    if ($lien) { foreach($lien as $i){$img=$i;break; }}  @endphp

                        @if(file_exists(public_path().'/storage/'.$img))
                            <div class="top" style="background-image: url('{{asset('storage/'.$img)}}')">
                                @php $a=array('made-in-paris-h','made-in-paris-f','made-in-paris','made-in-paris-1','made-in-paris-2','made-in-paris-e')@endphp
                                <span class="flag"> {{in_array($produit->code_souscategorie,$a)?'PARIS':'NEW'}}</span>
                            </div>
                        @else
                            <div class="top"
                                 style="background-image: url('{{asset('images/articles/noavailable.png')}}')">
                                 @php $a=array('made-in-paris-h','made-in-paris-f','made-in-paris','made-in-paris-1','made-in-paris-2','made-in-paris-e')@endphp
                                 <span class="flag"> {{in_array($produit->code_souscategorie,$a)?'PARIS':'NEW'}}</span>
                            </div>
                        @endif
                        <div class="bottom text-center">
                            <span class="name d-inline-block text-truncate" style="max-width:100%;font-weight:bold">{{$produit->nom}}</span>

                            <div class="">
                                <span class="current-price">{{$produit->prix_vente}} FCFA</span>
                                <span class="old-price">{{$produit->prix_achat}} FCFA</span>
                            </div>
                            <a href="{{route('produits.show',$produit->code)}}">
                                <button class="" >Ajouter au panier</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>

    <div class="container-fluid">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">NOTRE EQUIPES</h2>
        </div>
        <div class="row text-center">
            <!-- Grid column -->
            <div class="col-md-4 mb-md-5 mb-5">
                <div class="mx-auto">
                    <img src="{{asset('images/president.jpg')}}" style="width: 250px;height: 250px" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. KOFFI KOUADIO</h4>
                <h6 class="grey-text mb-3"><strong>Président Exécutif<br>Commissaire Général du prix PADEV</strong></h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-4 mb-md-5 mb-5">
                <div class="avatar mx-auto">
                    <img src="{{asset('images/chargerdesprojets.jpg')}}" style="width: 250px;height: auto" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. OUEDRAOGO OUSMANE</h4>
                <h6 class="grey-text mb-3"><strong>Chargé des Projets</strong></h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-4 mb-md-5 mb-5">
                <div class="avatar mx-auto">
                    <img src="{{asset('images/secretaire.jpg')}}" style="width: 250px;height: auto" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. KOFFI KONAN CLAUDE</h4>
                <h6 class="grey-text mb-3"><strong>Secrétaire Général</strong></h6>
            </div>
        </div>

        <div class="row text-center">
            <!-- Grid column -->
            <div class="col-md-6 mb-md-5">
                <div class="mx-auto">
                    <img src="{{asset('images/tresorier.jpg')}}" style="width: 250px;height: 250px" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">CONGO RAKIATOU</h4>
                <h6 class="grey-text mb-3"><strong>Trésorière</strong></h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-6 mb-md-5">
                <div class="avatar mx-auto">
                    <img src="{{asset('images/comissaire.jpeg')}}" style="width: 250px;height: auto" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. Jérémie ARBE SAWADOGO</h4>
                <h6 class="grey-text mb-3"><strong>Commissaire général des activités de développement.</strong></h6>
            </div>
        </div>
    </div>


@endsection


@section('extra-js')
    <script type="module">
        var slider = tns({
            container: '.my-slider',
            items: 3,
            slideBy: 'page',
            center: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoWidth: true,
            lazyload: true,
            lazyloadSelector: '.tns-lazy',
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
