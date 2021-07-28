@extends('layouts/app')
@section('title','merci')
@section('content')
    @if(isset($nom))
        <section class="section-content bg padding-y border-top">
            <div class="col-12">
                <div class="jumbotron text-center">
                    <h4 class="display-5">{{__("confirm.merci")}}</h4>
                    <p class="font-weight-light">
                        Mr/Mme <strong> {{$nom}} </strong><br>
                    </p>
                </div>
            </div>
        </section>
    @endif
@endsection