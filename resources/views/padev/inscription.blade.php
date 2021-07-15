@extends('layouts.app')
@section('title','inscription padev')
@section('content')
    <div id="register-pandev" class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="mt-5">
                    <h5 class="text-center">INSCRIPTION PADEV</h5>
                </div>
                <form class="row mt-2">
                    <div class="col-md-6 mt-2">
                        <label for="inputFirstname" class="form-label">Nom</label>
                        <input type="email" id="inputFirstname" maxlength="255" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="inputLastname" class="form-label">Prenom</label>
                        <input type="password" id="inputLastname" maxlength="255" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="inputContact" class="form-label">Contact 1</label>
                        <input type="email" id="inputContact" maxlength="20" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="inputContactAlt" class="form-label">Contact 2</label>
                        <input type="password" id="inputContactAlt" maxlength="20" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" id="inputEmail" maxlength="255" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="inputCountry" class="form-label">Pays</label>
                        <select id="inputCountry" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3 mt-5">
                        <button type="submit" class="btn bg-orange text-white text-uppercase">S'inscrire</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection