@extends('layouts/app')
@section('title','merci')
@section('content')
    @if(isset($nom))
        <section class="section-content bg padding-y border-top">
            <div class="col-12">
                <div class="jumbotron text-center">
                    <h4 class="display-5">Merci pour votre confiance !</h4>
                    <p class="font-weight-light">
                        Mr/Mme <strong> {{$nom}} </strong><br>
                        votre demande d'inscription au padev 2021 a été prise en compte , <br>nous vous contacterons
                        pour
                        confirmation .
                    </p>
                </div>
            </div>
        </section>
    @endif
@endsection