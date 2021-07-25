@extends('layouts.app')

@section('title')
   detail commande n°{{$commande->id}}
@endsection

@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-3">
                <!-- inclure la page menu.blade.php -->
                @include('client.menu')
            </div>
            <div class="col-lg-8">
                <div class="card p-lg-3" >
                  <p class="float-left" style="font-size: 25px;font-weight:bold"><a href="{{route('client.commande')}}" class="fas fa-arrow-left " style="color: #1e1e20"></a> details commande</p>
                  <div class="card-body" >
                      <div class="border border-1 p-2">
                          <span style="color: #a32d2d;font-size:20px;">Commande n° {{$commande->id}}</span> <br>
                          <span >{{$nbre_article}} articles</span> <br>
                          <span>montant : {{$commande->montant}} Fcfa</span> <br>
                      </div>
                      <div class="card mt-3">
                          <div class="card-header" style="color:#a32d2d;background:white; font-weight:bold;font-size:20px;"> Articles commandés</div>
                          <div class="card-body">
                              @foreach ($articles as $article)
                              @php $produit=\App\Models\Produits::where('code',$article->code_prod)->first(); @endphp
                                  <div class="row row-2 border-bottom p-1">
                                      <figure class="media col-3">
                                          @php
                                              $liens=$produit->image;
                                              $lien=$liens;$img="img.jpg";
                                              if ($lien) { foreach($lien as $i){$img=$i;break;} } @endphp
                                          <div style="width: 60px" class="img-wrap"><img src="{{asset('storage/'.$img)}}" style="border:none" class="img-thumbnail img-sm"></div>
                                      </figure>
                                      <div class="col-8">                                       
                                          <span style="font-weight: bold;font-size:17px"> {{$produit->nom}}</span> <br>
                                          <span>quantité : {{$article->quantite}}</span> <br>
                                          <span> prix : {{$article->prix_vente}} Fcfa</span> <br>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                      </div>
                      <div class="row ml-1">
                          <div class="card mt-3 col-11 col-lg-5">
                              <div class="card-header" style="color:#a32d2d;background:white; font-weight:bold;font-size:20px;"> Méthode de Paiement </div>
                              <div class="card-body">
                                  <strong>Paypal</strong>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection