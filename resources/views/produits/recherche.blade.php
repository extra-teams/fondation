@extends('layouts.app')
@section('title','nos produits')
@section('content')
    <!-- liste des produits -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="filters">
                    @php
                        $categories=DB::table('categories')->get();
                    @endphp
                    <h6 class="title">Categories</h6>
                    <form id="form1" action="{{route('produits.index')}}" method="get">
                        <input name="categorie" value="yes" type="hidden">

                        @foreach ($categories as $c=>$cate)
                            @php

                                $nbre_prod =count(DB::table('produits')->where('enabled',1)->where('quantite','>',0)->where('code_categorie',$cate->code)->get());
                            @endphp
                            <div class="group">

                                <input @if(in_array($cate->code,$categories_coches)) checked @endif class="categorie"
                                       name="{{$cate->code}}" type="checkbox" id="c{{$c}}">
                                <label for="c{{$c}}">{{$cate->nom}} ({{$nbre_prod}})</label>
                            </div>
                        @endforeach
                    </form>
                </div>

                {{-- <div class="filters">
                    @php
                        $tailles=DB::table('tailleproduits')->get();

                    @endphp
                    <h6 class="title">taille</h6>
                    @foreach ($tailles as $t=>$taille)
                    <div class="group">
                        <input type="checkbox" id="t{{$t}}">
                        <label for="t{{$t}}">{{$taille->nom}}</label>
                    </div>
                    @endforeach

                </div> --}}
            </div>
            <div class="col-12 col-lg-9">
                <div class="row mb-5">
                    <div class="col-lg-6 text-left text-lg-right">
                        <h5 class="text-uppercase">{{$titre}}</h5>
                    </div>

                    <div class="col-lg-6 text-right text-lg-right">
                        @php
                            $code_categorie=request()->categorie;
                            $code_souscategorie=request()->souscategorie;

                        @endphp
                        <form style="border: none" action="{{route('produits.index')}}" method="GET">
                            <select class="search" onchange='this.form.submit()' name='trie'
                                    style="border-color:black;background-color:white" class="mr-2 form-control">
                                {{--<option value="1">Popularité</option>--}}
                                <option value="0">filtre sur le prix</option>
                                <option value="1">prix croissant</option>
                                <option value="2">prix decroissant</option>

                                {{--<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ordre alphabetique</font></font></option>--}}
                            </select>
                            <input type="hidden" name="categorie" value="{{$code_categorie}}">
                            @if ($code_souscategorie)
                                <input type="hidden" name="souscategorie" value="{{$code_souscategorie}}">

                            @endif
                            @foreach ($categories_coches as $c)
                                <input type="hidden" name="{{$c}}" value="on">
                            @endforeach
                        </form>
                    </div>
                </div>
                @if (count($produits)==0)
                    <center><p class="h3" style="color: #888;font-weight:bold;">aucun produit trouvé</p></center><br>

                @else

                    <div class="row">
                        @foreach ($produits as $produit)
                            <div class="col-6 col-lg-3">
                                <div class="card_product">
                                    @php $liens=$produit->image; $lien=json_decode($liens); $img="img.jpg";
                        if ($lien) { foreach($lien as $i){$img=$i;break;} }  @endphp
                                    <div class="top" style="background-image: url('{{asset('storage/'.$img)}}')">
                                        @php $a=array('made-in-paris-h','made-in-paris-f','made-in-paris','made-in-paris-1','made-in-paris-2','made-in-paris-e')@endphp
                                        <span class="flag"> {{in_array($produit->code_souscategorie,$a)?'PARIS':'NEW'}}</span>
                                    </div>
                                    <div class="bottom text-center">
                                        
                                        <span class="name d-inline-block text-truncate" id="name" style="max-width:100%;font-weight:bold">{{$produit->nom}}</span>
                                        <div class="d-flex flex-column">
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
                @endif


                <nav class="mb-4" aria-label="Page navigation">
                    <ul class="pagination">
                        <!-- <li class="page-item disabled"><a class="page-link" href="#">Precedant</a></li>-->
                    {{ $produits->appends(request()->input())->links() }}
                    <!--<li class="page-item"><a class="page-link" href="#">suivant</a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        const checkbox = $(".categorie");

        checkbox.change(function (event) {
            var checkbox = event.target;
            // if (checkbox.checked) {
            // alert(checkbox.name);
            // } else {
            //     alert('no');
            // }
            // form = event.target.parentNode;
            // alert(form);
            // node = document.createElement("input");
            // node.name  = "categorie";
            // node.type  = "hidden";
            // node.value = checkbox.name;
            // form.appendChild(node.cloneNode());
            $('#form1').submit();
        });
    </script>
@endsection