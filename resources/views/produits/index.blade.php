@extends('layouts.app')
@section('title','nos produits')
@section('content')
    <!-- liste des produits -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div class="row mb-5">
                    <div class="col-lg-6 text-left text-lg-right">
                        <h5 class="text-uppercase">{{$titre}}</h5>
                    </div>

                    <div class="col-lg-6 text-right text-lg-right">
                        @php
                            $code_categorie=request()->categorie;
                        @endphp
                        <form style="border: none" action="{{route('produits.index')}}" method="GET">
                            <select class="search" onchange='this.form.submit()' name='trie'
                                    class="mr-2 custom-control custom-select">
                                <option value="0">filtre sur le prix</option>
                                <option value="1">prix croissant</option>
                                <option value="2">prix decroissant</option>
                                {{--<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ordre alphabetique</font></font></option>--}}
                            </select>
                            <input type="hidden" name="categorie" value="{{$code_categorie}}">
                            @foreach ($categories_coches as $c)
                                <input type="hidden" name="{{$c}}" value="on">
                            @endforeach
                        </form>
                    </div>
                </div>
                @if (count($produits)==0)
                    <p class="h3 text-center">aucun produit trouvé</p><br>
                @else
                    <div class="row">
                        @foreach ($produits as $produit)
                            <div class="col-6 col-lg-3">
                                <div class="card_product">
                                    @php
                                        if (isset($produit)){
                                            $image = json_decode($produit->image)[0];
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
                                        <div class="d-flex flex-column">
                                            <span class="current-price">{{$produit->prix_vente}} FCFA</span>
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


                <div class="mb-4 items-center " aria-label="Pa">
                    {{ $produits->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        const checkbox = $(".categorie");
        checkbox.change(function (event) {
            $('#form1').submit();
        });
    </script>
@endsection