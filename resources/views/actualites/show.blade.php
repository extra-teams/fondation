@extends('layouts.app')
@section('title','Fondation 225')
@section('content')
    <!-- Actualites -->
    @if(isset($article))
        <div class="container mt-5">
            <!-- card 1 -->
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{asset($article->cover)}}"
                         alt="{{asset($article->title)}}">
                </div>
                <div class="col-12 col-lg-6 mt-2">
                    <h2 class="main-title">{{$article->titre}}</h2>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-12 col-lg-8 main-text">
                    {!! $article->contenu !!}
                </div>
            </div>
        </div>
    @endif

@endsection