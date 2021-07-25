@extends('layouts.app')
@section('title')
    {{$produit->nom}}
@endsection
@section('content')
    <!-- breadcrumb-->
    <div class="container mt-5">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL('/')}}">Accueil</a></li>
                    @foreach ($lien as  $item=>$i)
                        @if ($item==$categorie->nom)
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
            <div class="col-12 col-md-4">
                <div id="product-main-img">
                    @foreach ($lien as $img)
                        <div class="product-preview">
                            <img src="{{asset('storage/'.$img)}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /Product main img -->
            <!-- Product details -->
            <div class="col-12 col-md-7">
                <div class="product-details">
                    <form id="form" action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <h2 class="product-name mt-5 mt-md-0">{{$produit->nom}}</h2>
                            <h4 class="product-price">{{ number_format(($produit->prix_vente),0, '.', '.') }} FCFA</h4>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-12">
                                <div class="control">
                                    <label for="qte">Quantite : </label>
                                    <select id="qte" name="qte" style="width:50px;">
                                        @for ($i = 1; $i <= $produit->quantite; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- informations -->
                        <div class="row">
                            <div class="col-12">
                                <h5 class="mb-2">INFORMATIONS ARTICLE</h5>
                                {!!$produit->description!!}
                            </div>
                        </div>
                        <!-- bouton -->
                        <div class="col-12">
                            <div class="mt-3 ">
                                <input type="hidden" name="code_produit" value="{{$produit->code}}">
                                <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->
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