@extends('layouts/app')
@section('title','merci')
@section('content')

    <section class="section-content mt-5">
        <div class="col-12">
            <div class="jumbotron text-center">
                <h4 class="display-5">{{__("confirm.merci")}}</h4>
                <p class="font-weight-light display-6">
                    Mr/Mme <strong> {{$nom ?? ''}} </strong><br>
                </p>

            </div>
        </div>
    </section>

@endsection