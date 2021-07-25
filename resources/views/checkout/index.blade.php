@extends('layouts.app')
@section('title','checkout')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/checkout')}}">checkout</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- container -->
    <div class="container mt-5">
        <!-- row -->
        <div class="row">
            <div class="col-md-7">
                <form id="form" action="{{route('checkout.store')}}" method="post">
                @csrf
                <!-- Billing Details -->
                    <div class="billing-details">
                        @if($errors->has('invalid'))
                            <h3 class="text-warning help is-danger text-center">{{ $errors->first('invalid') }}</h3>
                        @endif
                        <div class="section-title text-left">
                            <h3 class="title">Information personnelle</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input value="{{$client->nom}}" required type="text" maxlength="50" id="nom"
                                           readonly name="nom">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input value="{{$client->prenom}}" required type="text" maxlength="50" id="prenom"
                                           readonly name="prenom">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel">téléphone</label>
                            <input value="{{$client->telephone}}" placeholder="EX:+225 0707070707" required type="text"
                                   id="tel" name="tel">
                        </div>
                    </div>
                    <!-- /Billing Details -->

                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title text-left">
                            <h3 class="title">Adresse de Livraison</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="inputCountry">Pays</label>
                                    @if(isset($countries))
                                        <select id="inputCountry" name="pays" class="form-select">
                                            @foreach($countries as $country)
                                                <option value="{{$country->code}}">{{$country->nom}}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="ville">Ville</label>
                                    <input type="text" id="ville" name="ville" placeholder="EX: Paris">
                                </div>
                            </div>
                        </div>
                        <!-- adresse -->
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input name="adresse" type="text" id="adresse" placeholder="Ex: 6 Rue de beauburg" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="codebp">Code postale</label>
                                    <input id="codebp" type="text" name="code_bp" placeholder="EX: Paris">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"><br>
                            <button class="btn bg-orange btn-block text-uppercase">confirmer la commande</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-left">
                    <h3 class="title">votre commande</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>Articles</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    <div class="order-products">
                        @foreach (Cart::content() as $produit)
                            <div class="order-col">
                                <div>{{$produit->model->nom}} <span>&nbsp; {{$produit->qty}}x </span></div>
                                <div>{{$produit->total}} FCFA</div>
                            </div>
                        @endforeach
                    </div>
                    <div class="order-col">
                        <div>Livraison</div>
                        <div><strong>Gratuit</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">{{Cart::total()}} FCFA</strong></div>
                    </div>
                </div>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
@endsection