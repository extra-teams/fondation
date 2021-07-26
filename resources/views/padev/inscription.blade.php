@extends('layouts.app')
@section('title','inscription padev')
@section('content')
    <div id="register-pandev" class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="mt-5">
                    <h5 class="text-center">INSCRIPTION PADEV</h5>
                    <p class="text-center">NB : Votre inscription n'est valable qu'après le paiement des frais de
                        participation.</p>
                </div>
                <form action="{{route("padev.traitement")}}" method="post">
                    @csrf
                    <div id="step1" class="row mt-2">
                        <div class="col-md-4 mt-2">
                            <label for="inputFirstname" class="form-label">Nom</label>
                            <input type="text" name="nom" id="inputFirstname" maxlength="255" required
                                   value="{{old('nom')}}">
                            @if ($errors->has('nom'))
                                <span class="text-danger">{{ $errors->first('nom') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputLastname" class="form-label">Prenom(s)</label>
                            <input type="text" name="prenom" id="inputLastname" maxlength="255" required  value="{{old('prenom')}}">
                            @if ($errors->has('prenom'))
                                <span class="text-danger">{{ $errors->first('prenom') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputCountry" class="form-label">Pays</label>
                            @if(isset($countries))
                                <select id="inputCountry" name="pays" class="form-select">
                                    @foreach($countries as $country)
                                        <option value="{{$country->code}}">{{$country->nom}}</option>
                                    @endforeach
                                </select>
                            @else
                                <input type="text" name="pays" id="inputCountry" maxlength="255" required>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputAdresse" class="form-label">Adresse</label>
                            <input type="text" name="adresse" id="inputAdresse" maxlength="20" required  value="{{old('adresse')}}">
                            @if ($errors->has('adresse'))
                                <span class="text-danger">{{ $errors->first('adresse') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputTel" class="form-label">Téléphone</label>
                            <input type="text" name="tel" id="inputTel" maxlength="255" required  value="{{old('tel')}}">
                            @if ($errors->has('tel'))
                                <span class="text-danger">{{ $errors->first('tel') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputNomEntreprise" class="form-label">NOM DE L'ENTREPRISE </label>
                            <input type="text" name="entreprise" id="inputNomEntreprise" maxlength="255" required  value="{{old('entreprise')}}">
                            @if ($errors->has('entreprise'))
                                <span class="text-danger">{{ $errors->first('entreprise') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputProfession" class="form-label">Profession</label>
                            <input type="text" name="profession" id="inputProfession" maxlength="255" required  value="{{old('profession')}}">
                            @if ($errors->has('profession'))
                                <span class="text-danger">{{ $errors->first('profession') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputTitre" class="form-label">Titre</label>
                            <input type="text" name="titre" id="inputTitre" maxlength="20" required  value="{{old('titre')}}">
                            @if ($errors->has('titre'))
                                <span class="text-danger">{{ $errors->first('titre') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputSecteurActivite" class="form-label">Secteur D'activite</label>
                            <input type="text" name="secteur" id="inputSecteurActivite" maxlength="255" required>
                            @if ($errors->has('secteur'))
                                <span class="text-danger">{{ $errors->first('secteur') }}</span>
                            @endif
                        </div>
                        <div class="col-12 mt-5">
                            <button type="button" id="nextBtn" class="btn bg-orange text-white text-uppercase">
                                Suivant
                            </button>
                        </div>
                    </div>
                    <!-- step 2 -->
                    <div id="step2" class="row mt-2" style="display: none">
                        <div class="col-md-4 mt-2">
                            <label for="inputNbreParticipant" class="form-label">NOMBRE DE PARTICIPANT </label>
                            <input type="number" name="nombreParticipant" id="inputNbreParticipant" maxlength="20"
                                   required>
                            @if ($errors->has('nombreParticipant'))
                                <span class="text-danger">{{ $errors->first('nombreParticipant') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputEmail" class="form-label">VOTRE EMAIL </label>
                            <input type="email" name="email" id="inputEmail" maxlength="255" required  value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputSiteWeb" class="form-label">VOTRE SITE WEB </label>
                            <input type="text" name="siteweb" id="inputSiteWeb" maxlength="20" required  value="{{old('siteweb')}}">
                            @if ($errors->has('siteweb'))
                                <span class="text-danger">{{ $errors->first('siteweb') }}</span>
                            @endif
                        </div>
                        <div class="col-md-8 mt-2">
                            <label for="inputImpact" class="form-label">IMPACT DE VOS ACTIVITES SUR LE
                                DEVELOPPEMENT </label>
                            <input name="impact" type="text" id="inputImpact" maxlength="20" required  value="{{old('impact')}}">
                            @if ($errors->has('impact'))
                                <span class="text-danger">{{ $errors->first('impact') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputNomEmployeAfricain" class="form-label">NOMBRE D'EMPLOYES AFRICAIN </label>
                            <input name="nbreEmploye" type="number" id="inputNomEmployeAfricain" required>
                            @if ($errors->has('nbreEmploye'))
                                <span class="text-danger">{{ $errors->first('nbreEmploye') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="inputNbreRepresentation" class="form-label">NOMBRE DE REPRESENTATION EN
                                AFRIQUE</label>
                            <input name="nbreRepresentation" type="number" id="inputNbreRepresentation" maxlength="20"
                                   required  value="{{old('nbreRepresentation')}}">
                            @if ($errors->has('nbreRepresentation'))
                                <span class="text-danger">{{ $errors->first('nbreRepresentation') }}</span>
                            @endif
                        </div>
                        <div class="col-12 mt-2">
                            <label for="inputPalmares" class="form-label">PALMARES DE VOTRE ENTREPRISE</label>
                            <textarea name="palmares" class="form-control" id="inputPalmares" maxlength="20"
                                      required></textarea>
                            @if ($errors->has('palmares'))
                                <span class="text-danger">{{ $errors->first('palmares') }}</span>
                            @endif
                        </div>
                        <div class="col-12 mt-5">
                            <button type="button" id="prevBtn" class="btn bg-orange text-white text-uppercase">
                                Precedent
                            </button>
                            <button type="submit" class="btn bg-orange text-white text-uppercase">Inscription</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("extra-js")
    <script>
        $(document).ready(function () {
            $("#nextBtn").click(function () {
                $("#step2").show();
                $("#step1").hide();
            });

            $("#prevBtn").click(function () {
                $("#step2").hide();
                $("#step1").show();
            });
        });
    </script>
@endsection