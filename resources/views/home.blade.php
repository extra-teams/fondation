@extends('layouts.app')
@section('title','yebay')
@section('content')
<style>
.testimonial .pic:before,
.testimonial .pic:after{
    content: "";
    width: 130px;
    height: 150px;
    background: #fabe14;
    position: absolute;
    z-index: -1;
}
.testimonial .pic:before{
    top: 0;
    right: -20px;
}
.testimonial .pic:after{
    bottom: 0;
    left: -20px;
}
.wprock-img-zoom-hover .wprock-img-zoom {
    overflow: hidden;
    position: relative; 
}
.wprock-img-zoom-hover .wprock-img-zoom img {
    max-width: 100%;
    -moz-transition: all 0.8s;
    -webkit-transition: all 0.8s;
    transition: all 0.8s;
}
.wprock-img-zoom-hover .wprock-img-zoom * {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.wprock-img-zoom-hover:hover .wprock-img-zoom img {
    -moz-transform: scale(1.06);
    -webkit-transform: scale(1.06);
    transform: scale(1.06);
}
.testimonial .description:before,
.testimonial .description:after{
    font-family: "Font Awesome 5 Free"; font-weight: 900;
    font-size: 17px;
    color: #fabe14;
    position: relative;
}
.testimonial .description:before{
    content: "\f10d";
    margin-right: 5px;
    top: 0;
    left: 0;
}
.testimonial .description:after{
    content: "\f10e";
    margin-left: 5px;
    position: relative;
    bottom: 0;
    right: 0;
}     
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}

@media only screen and (max-width: 990px){
    .testimonial{
        text-align: center;
    }
    .testimonial .pic{
        width: 200px;
        margin: 0 auto;
        float: none;
    }
    .testimonial .pic:before,
    .testimonial .pic:after{
        width: 80px;
        height: 100px;
    }
    .testimonial .testimonial-content{
        width: 100%;
        float: none;
    }
    .testimonial .title{
        padding: 15px 0 0 0;
    }
    .testimonial .post{
        padding: 0;
        margin-bottom: 10px;
    }
}
</style>
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
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">Qui Sommes Nous ?</h2>
        </div>
        <div class="container">
            <div>
                <img src="{{asset('images/fondation.jpeg')}}" class="float-left mr-3 mb-3" alt="" style="width: 400px;height: 140px">
                <p>
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
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">Nos Domaines d'Intervention</h2>
        </div>
        <div class="row">
            <div class="col-md-4 border-dark">
                <div class="card p-3 mb-2" style="border-radius: 10px;">
                    <div class="text-center">
                        <div class="align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center" style="margin: auto;padding: 50px;width: 50px;height: 50px;background-color: #fabe14;border-radius: 50px;font-size: 39px;"> <i class="fa fa-heart"></i> </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p>
                            Dans le domaine de la santé nous voulons appuyer les politiques gouvernementales 
                            en matière de création de centres de santé et d’accès des populations aux soins.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border-dark">
                <div class="card p-3 mb-2" style="border-radius: 10px;">
                    <div class="text-center">
                        <div class="align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center" style="margin: auto;padding: 50px;width: 50px;height: 50px;background-color: #fabe14;border-radius: 50px;font-size: 39px;"> <i class="fa fa-book"></i> </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p>
                            Dans le domaine de la scolarité nous intervenons par la promotion de la scolarisation 
                            gratuite et obligatoire pour garçons et filles, l’alphabétisation, la création 
                            d’infrastructures additionnelles.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border-dark">
                <div class="card p-3 mb-2" style="border-radius: 10px;">
                    <div class="text-center">
                        <div class="align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center" style="margin: auto;padding: 50px;width: 50px;height: 50px;background-color: #fabe14;border-radius: 50px;font-size: 39px;"> <i class="fa fa-tree"></i> </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p>
                            Pour l'environnement nous agissons par la protection des forêts et de la faune, la lutte 
                            contre l’avancée du sahel par le reboisement, contre la pollution atmosphérique, des 
                            eaux et du cadre de vie.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 border-dark">
                <div class="card p-3 mb-2" style="border-radius: 10px;">
                    <div class="text-center">
                        <div class="align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center" style="margin: auto;padding: 50px;width: 50px;height: 50px;background-color: #fabe14;border-radius: 50px;font-size: 39px;"> <i class="fa fa-user-secret"></i> </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p>
                            Nous luttons contre l’immigration clandestine et la fuite des cerveaux vers les pays 
                            du nord, une aventure pleine de risque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 border-dark">
                <div class="card p-3 mb-2" style="border-radius: 10px;">
                    <div class="text-center">
                        <div class="align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center" style="margin: auto;padding: 50px;width: 50px;height: 50px;background-color: #fabe14;border-radius: 50px;font-size: 39px;"> <i class="fa fa-trophy"></i> </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p>
                            Nous encourageons la promotion  du travail, du mérite et de l’excellence comme nouveau 
                            socle de l’édifice social africain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">Nos Actions Caritatives</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover" style="margin-bottom: 30px;">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative4.jpg')}}" class="fancybox" rel="ligthbox">
                        <img  src="{{asset('images/caritative/caritative4.jpg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>  
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover" style="margin-bottom: 30px;">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative1.jpeg')}}" class="fancybox" rel="ligthbox">
                        <img  src="{{asset('images/caritative/caritative1.jpeg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>  
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover" style="margin-bottom: 30px;">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative2.jpeg')}}" class="fancybox" rel="ligthbox">
                        <img  src="{{asset('images/caritative/caritative2.jpeg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>  
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 wprock-img-zoom-hover" style="margin-bottom: 30px;">
                <div class="wprock-img-zoom">
                    <a href="{{asset('images/caritative/caritative3.jpeg')}}" class="fancybox" rel="ligthbox">
                        <img  src="{{asset('images/caritative/caritative3.jpeg')}}" class="zoom img-fluid" alt="">
                    </a>
                </div>  
            </div>    
       </div>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-light mt-5 mb-3">MOT DU PRESIDENT</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="pic float-left position-relative" style="width: 22%;padding: 20px 0;margin: 0 6% 0 2%;z-index: 1;">
                            <img src="{{asset('images/equipe/president.jpg')}}" style="width: 100%;height: auto;border: 3px solid #fabe14;" alt="">
                        </div>
                        <div class="testimonial-content" style="width: 70%;float: right;">
                            <h3 class="title d-block m-0 text-uppercase" style="font-size: 18px;font-weight: 600;color: #000;padding-top: 65px;padding-left: 15px;">M. KOFFI KOUADIO</h3>
                            <span class="post d-block text-capitalize" style="font-size: 14px;font-weight: 400;line-height: 27px;color: #000;margin-bottom: 25px;padding-left: 15px;">Président Exécutif<br>Commissaire Général du prix PADEV</span>
                            <p class="description position-relative m-0" style="font-size: 16px;color: #000;padding: 0 15px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dolor nibh, semper at pretium vitae, tincidunt non risus. Aenean mattis sit amet ex nec venenatis. Pellentesque tempus pellentesque efficitur. Nulla commodo bibendum quam, at imperdiet orci congue non. Maecenas interdum.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam illum velit ratione enim a repellendus sequi aspernatur ullam quaerat voluptatum eveniet hic harum, dolore fugit vel magnam amet nihil. Cupiditate.
                            </p>
                        </div>
                    </div>  
                </div>
            </div>
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
                    <img src="{{asset('images/equipe/president.jpg')}}" style="width: 250px;height: 250px" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. KOFFI KOUADIO</h4>
                <h6 class="grey-text mb-3"><strong>Président Exécutif<br>Commissaire Général du prix PADEV</strong></h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-4 mb-md-5 mb-5">
                <div class="avatar mx-auto">
                    <img src="{{asset('images/equipe/chargerdesprojets.jpg')}}" style="width: 250px;height: auto" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. OUEDRAOGO OUSMANE</h4>
                <h6 class="grey-text mb-3"><strong>Chargé des Projets</strong></h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-4 mb-md-5 mb-5">
                <div class="avatar mx-auto">
                    <img src="{{asset('images/equipe/secretaire.jpg')}}" style="width: 250px;height: auto" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">M. KOFFI KONAN CLAUDE</h4>
                <h6 class="grey-text mb-3"><strong>Secrétaire Général</strong></h6>
            </div>
        </div>

        <div class="row text-center">
            <!-- Grid column -->
            <div class="col-md-6 mb-md-5">
                <div class="mx-auto">
                    <img src="{{asset('images/equipe/tresorier.jpg')}}" style="width: 250px;height: 250px" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold dark-grey-text my-2">CONGO RAKIATOU</h4>
                <h6 class="grey-text mb-3"><strong>Trésorière</strong></h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-6 mb-md-5">
                <div class="avatar mx-auto">
                    <img src="{{asset('images/equipe/comissaire.jpeg')}}" style="width: 250px;height: auto" class="rounded z-depth-1-half" alt="Sample avatar">
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
