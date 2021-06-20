@extends('layouts.app')
@section('title')
    {{$produit->nom}}
@endsection
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL('/')}}">Accueil</a></li>
                    @foreach ($lien as  $item=>$i)
                        @if ($item==$souscategorie->nom)
                            <li class="breadcrumb-item"><a
                                        href="{{route($i,['categorie'=>$categorie->code,'souscategorie'=>$souscategorie->code])}}">{{$item}}</a>
                            </li>
                        @elseif ($item==$categorie->nom)
                            <li class="breadcrumb-item"><a
                                        href="{{route($i,['categorie'=>'yes',$categorie->code=>'on'])}}">{{$item}}</a>
                            </li>
                        @else
                            <li class="breadcrumb-item"><a href="#">{{$item}}</a></li>
                        @endif
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>

    <!-- contenu -->
    <div class="container product">
        <!-- row -->
        <div class="row mt-md-5">
            <!-- Product thumb imgs -->
            @php $liens=$produit->image; $lien=json_decode($liens); $img="img.jpg";
            if ($lien) { foreach($lien as $i){$img=$i;break;} }  @endphp
            <div class="col-md-1">
                <div id="product-imgs">
                    @foreach ($lien as $img)
                        <div class="product-preview">
                            <img src="{{asset('storage/'.$img)}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product main img -->
            @php $liens=$produit->image; $lien=json_decode($liens); $img="img.jpg"; @endphp
            <div class="col-md-4 col-12">
                <div id="product-main-img">
                    @foreach ($lien as $img)
                        <div class="product-preview">
                            <img src="{{asset('storage/'.$img)}}" {{--style="width: 100%"--}} alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product details -->
            <div class="col-md-7 col-12">
                <div class="product-details">
                    <form style="border: none" action="{{route('wishlist.store')}}" method="POST">
                        @php

                            $exist=false;
                            if(\Auth::user()){
                            foreach (Auth::user()->wishlist as $prod) {
                                if (DB::table('produits')->where('code',$prod->code_produit)->first()->nom == $produit->nom) $exist=true; 
                            }

                            }
                                $exist ? $class='fas fa-heart' : $class="far fa-heart";

                        @endphp

                        <button type="submit" data-original-title="favoris" class="btn btn-danger mt-5 mt-lg-0"
                                data-toggle="tooltip"
                                style="outline:none;background:white;border-color: red;color:red;position: absolute;left:80%">
                            <i class="{{$class}}"></i></button>
                        @csrf
                        <input type="hidden" name="code_produit" value="{{$produit->code}}">
                    </form>
                    <h2 class="product-name mt-5 mt-md-0">{{$produit->nom}}</h2>
                    <h3 class="product-brand">Marque :
                        @php
                            echo DB::table('marques')->where('code',$produit->code_marq)->first()->nom ;
                        @endphp
                    </h3>
                    <div>
                        <h4 class="product-price">{{ number_format(($produit->prix_vente),0, '.', '.') }} FCFA</h4>
                    </div>
                    <form id="form" action="{{ route('cart.store') }}" method="POST" style="border:none">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                @if (count($tailles)!=0)
                                    <div class="control">
                                        <label for="taille">Taille : </label>
                                        <select required class="custom-select" name="taille" id="taille">
                                            @foreach ($tailles as $taille)
                                                @php $t=DB::table('tailleproduits')->where('code',$taille->code_taille)->first(); @endphp
                                                <option value="{{$t->nom}}">{{$t->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            </div>
                            <div class="col-6 col-md-6">
                                @if (count($couleurs)!=0)
                                    <div class="control">
                                        <label for="couleur">Couleur : </label>
                                        <select name="couleur" id="couleur">
                                            @foreach ($couleurs as $couleur)
                                                @php $c=DB::table('couleurs')->where('code',$couleur->code_couleur)->first(); @endphp
                                                <option value="{{$c->nom}}">{{$c->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="control">
                                    <label for="qte">Quantite : </label>
                                    <select id="qte" name="qte" style="width:50px;">
                                        @for ($i = 1; $i <= $produit->quantite; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mt-3 ">
                                    <input type="hidden" name="code_produit" value="{{$produit->code}}">
                                    <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                        Ajouter au
                                        panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Product details -->
        </div>
        <!-- /row -->
        <div class="row mt-5 product-detail-bottom">
            <div class="col-lg-7">
                <ul class="list-unstyled">
                    <h6 mb-2>INFORMATIONS ARTICLE</h6>
                    <div>
                        {!!$produit->description!!}
                        <p> <span style="color:red">NB:</span> pour ce decembre vos articles fondation225 en provenance de paris, nécessite une avance de 20% et un délais de livraison allant jusqu'à 2 semaine .</p>
                    </div>
                </ul>
            </div>

        <!--<div class="col-lg-4">
            <ul class="list-unstyled">
                <li><h6>INFORMATION SUR LA BOUTIQUE</h6></li>
                @php
            $o=DB::table('users')->where('id',$produit->owner_id)->first();
        @endphp
                <li>nom de la boutique : @php echo $o? $o->name:'' ; @endphp</li>
                {{-- <li>Contact : <span>08 86 37 19</span></li>
                <li>Matière principale : <span>100% coton</span> --}}
                </li>
            </ul>
        </div>-->
        </div>
    </div>
    <!-- /container -->
@endsection

@section('extra-js')
    <script>
        (function ($) {
            "use strict"


            /////////////////////////////////////////

            // Product Main img Slick
            $('#product-main-img').slick({
                infinite: true,
                speed: 300,
                dots: false,
                arrows: true,
                fade: true,
                asNavFor: '#product-imgs',
            });

            // Product imgs Slick
            $('#product-imgs').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                centerMode: true,
                focusOnSelect: true,
                centerPadding: 0,
                vertical: true,
                asNavFor: '#product-main-img',
                responsive: [{
                    breakpoint: 991,
                    settings: {
                        vertical: false,
                        arrows: false,
                        dots: true,
                    }
                },
                ]
            });
        })(jQuery);
    </script>
@endsection