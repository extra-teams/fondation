@extends('layouts.app')
@section('title','Fondation 225')
@section('content')
    <!-- Actualites -->
    @if(isset($articles) && count($articles)>0)
        <div class="container mt-5">
            <div class="row">
                <h2 class="main-title">{{__("home.actualite")}}</h2>
            </div>
            <div class="row justify-content-center align-content-center">
            @foreach($articles as $article)
                <!-- card 1 -->
                    <a href="{{$article->slug}}">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="card-news">
                                <div class="card-news-header">
                                    <img src="{{asset($article->cover)}}" alt="{{asset($article->title)}}">
                                </div>
                                <div class="card-news-body">
                                    <h5 class="card-title">
                                        {{$article->titre}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

@endsection