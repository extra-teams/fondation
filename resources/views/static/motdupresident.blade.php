@extends('layouts.app')
@section('title','mot du president')
@section('content')
    <!-- presentation -->
    <div class="container-fluid">
        <div class="mt-5">
            <h1 class="main-title text-center">
                {{__("motdupresident.mot")}}
            </h1>
        </div>
    </div>
    <!-- texte -->
    <div class="container mt-5" id="mot-du-president">
        <div class="row justify-content-center">
            <div class="col-6 col-lg-4 header-mot">
                <img src="{{asset("images/equipe/president.jpg")}}" alt="">
            </div>
            <div class="col-12 col-lg-8">
                <p class="text-justify">
                    “ {{__("motdupresident.message1")}}<br>
                    {{__("motdupresident.message2")}}<br>
                    {{__("motdupresident.message3")}}<br>
                    {{__("motdupresident.message4")}}<br>
                    {{__("motdupresident.message5")}}<br>

                    {{__("motdupresident.message6")}}.<br>
                    {{__("motdupresident.message7")}}<br>

                    {{__("motdupresident.message8")}}<br>

                    {{__("motdupresident.message9")}}<b>la Fondation 225</b>
                    {{__("motdupresident.message10")}}<b>{{__("motdupresident.padev")}}</b> ( PADEV). <br>


                    {{__("motdupresident.message11")}}<b>2006</b>{{__("motdupresident.message12")}}<b>2007</b>{{__("motdupresident.message13")}}
                    <b>Lomé</b>{{__("motdupresident.message14")}}<b>Togo</b>{{__("motdupresident.message15")}}<br>
                    {{__("motdupresident.message16")}}“ <br>
                    <h5>KOFFI KOUADIO/Mr</h5>
                    <h5>{{__("motdupresident.message17")}}</h5> <br>

                </p>
            </div>
        </div>
    </div>
@endsection 