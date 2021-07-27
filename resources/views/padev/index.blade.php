@extends('layouts.app')
@section('title','padev')
@section('content')
    <div id="pandev">
        <!-- bg -->
        <div class="header-pandev">
            <!-- edition -->
            <div class="header-edition">
                <p class="text-left">
                    <span>16<sup class="text-lowercase">{{__("padev.place")}}</sup></span>
                    <span>edition</span>
                </p>
            </div>

            <!-- titre de l'evenement -->
            <div class="header-title">
                <p class="text-center">{{__("padev.padev_def")}}</p>
            </div>

            <!-- Lieu -->
            <div class="header-place">
                <p class="city">{{__("padev.ville")}} : <span>kigali</span>/ {{__("padev.lieu")}} : <span>marriott hotel</span></p>
            </div>

            <!-- image -->
            <div class="header-img">
                <img src="{{@asset("images/padev/kingali.jpeg")}}" alt="">
            </div>

            <!-- bouton inscripion -->
            <div class="header-btn">
                <a class="btn" href="{{route('padev.page_inscription')}}">{{__("padev.inscription")}}</a>
            </div>
        </div>
        <!-- a propos -->
        <div class="about container mt-5">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-5 col-md-3">
                    <img class="about-img" src="{{@asset("images/padev/dinner_gala.jpg")}}" alt="">
                </div>
                <div class="col-10 col-sm-7 col-md-7 about-text">
                    <h5 class="text-uppercase font-weight-lighter">{{__("padev.apropos")}} </h5>
                    <h6 class="text-uppercase font-weight-lighter">{{__("padev.sous_apropos")}} </h6>
                    <p class="text-left">
                        {{__("padev.apropos_info1")}}
                    </p>
                    <p class="text-left">
                        {{__("padev.apropos_info2")}}
                    </p>
                </div>
            </div>
        </div>

        <!-- le prix padev -->
        <div class="container price">
            <div class="row">
                <div class="col-12">
                    <h5 class="main-title text-orange">{{__("padev.prix")}}</h5>
                    <h6 class="main-sub-title text-orange">{{__("padev.prix_desc")}}</h6>
                </div>
            </div>
        @if(isset($galleries) && count($galleries)>0)
            <!-- cards -->
                <div class="row mt-5 slider">
                @foreach($galleries as $gallerie)
                    <!-- card -->
                        <div class="col-10 col-md-3">
                            <div class="card-prize">
                                <div class="card-prize-gradient"></div>
                                <img src="{{asset('storage/'.$gallerie->fichier)}}" alt="">
                                <div class="card-prize-body">
                                    <h5>{{$gallerie->legende}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="container mt-5">
            <div class="row">
                <!-- critere -->
                <div class="row text-center">
                    <h3 class="main-title">{{__("padev.critere")}}</h3>
                    <p class="main-introduction">{{__("padev.critere_desc1")}}</p>
                    <h6>{{__("padev.critere_desc2")}}</h6>
                    <p class="font-weight-light">{{__("padev.critere_desc3")}}</p>
                </div>
                <!--  -->
            </div>
            <div class="row">
                <!-- critere faq -->
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <!-- etape 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        {{__("padev.etape1")}}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{__("padev.info_etape1")}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- etape 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        {{__("padev.etape2")}}
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{__("padev.info_etape2")}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- etape 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        {{__("padev.etape3")}}
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{__("padev.info_etape3")}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- etape 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        {{__("padev.etape4")}}
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{__("padev.info_etape4")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- prize -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <img style="height: 12rem" class="img-fluid" src="{{asset("images/padev/pize.jpeg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--  Cérémonie de remise de trophées -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h5 class="main-title">{{__("padev.remise")}}</h5>
                    <p class="main-introduction">
                        {{__("padev.remise_info")}}
                    </p>
                </div>
            </div>
            <div class="row  justify-content-center">
                <!-- Le forum des lauréats -->
                <div class="col-10 col-sm-6 col-md-3">
                    <div class="card-prize">
                        <div class="card-prize-gradient"></div>
                        <img src="{{asset('images/padev/forum_laureat.jpeg')}}" alt="">
                        <div class="card-prize-body">
                            <h5>{{__("padev.forum")}}</h5>
                        </div>
                    </div>
                </div>
                <!-- LE DINER-GALA DES BÂTISSEURS AFRICAINS -->
                <div class="col-10 col-sm-6 col-md-3">
                    <div class="card-prize">
                        <div class="card-prize-gradient"></div>
                        <img src="{{asset('images/padev/DINER-GALA.png')}}" alt="">
                        <div class="card-prize-body">
                            <h5>{{__("padev.diner")}}</h5>
                        </div>
                    </div>
                </div>
                <!-- VISITE TOURISTIQUE -->
                <div class="col-10 col-sm-6 col-md-3">
                    <div class="card-prize">
                        <div class="card-prize-gradient"></div>
                        <img src="{{asset('images/padev/visite-touriste.jpeg')}}" alt="">
                        <div class="card-prize-body">
                            <h5>{{__("padev.visite")}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("extra-js")
    <script type="module">
        var slider = tns({
            container: '.slider',
            items: 3,
            center: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
            autoWidth:true,
            responsive: {
                640: {
                    items: 1,
                    mouseDrag: true
                },
                700: {
                    gutter: 2,
                    mouseDrag: true
                },
                900: {
                    items: 3,
                    mouseDrag: true
                }
            }
        });
    </script>
@endsection