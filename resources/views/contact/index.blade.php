@extends('layouts.app')
@section('title','contactez-nous Fondation225')
@section('content')
<style>
    .font-roboto-condensed {
    font-family: "Roboto Condensed", sans-serif;
}
.font-weight-bold {
    font-weight: 700 !important;
}
h2, .h2 {
    font-size: 2rem;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
</style>
<!-- content -->
    <!-- breadcrumb -->
    <div class="container-fluid p-0">
        <div class="article bg-callcentre" style="  background: url(images/banner/pain.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        height: 15rem;">
            <!-- breadcrumb -->
            <div class="article__header p-5">
                <div class="row">
                    <div class="col-12">
                        <div class="pt-3">
                            <h2  class="font-roboto-condensed font-weight-bold styled_title ">Nos contacts</h2>
                            {{-- <span style="border-bottom: solid black; width:50px;">&nbsp;&nbsp;</span> --}}
                        {{-- <hr style="height: 3px; color: black; font-weigth: bold;"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- endbreadcrumb -->

        </div>
    </div>

    <!-- agences -->
    <div class="container-fluid mt-5 mb-5">
        <!-- première ligne -->
        <div class="row mb-5">

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="font-weight-bold text-uppercase styled_title">
                        En ligne
                    </h3>
                    <p class="font-roboto-condensed">
                        Vous souhaitez signaler une panne, vous pouvez nous faire part de votre motif de réclamation
                        directement en prenant contact avec un conseiller en nous envoyant un mail
                        à l'adresse mail suivante :
                    </p>
                    <a href="mailto:contact@bms.ci" class="btn btn-black" style="background-color: black; color: white;">
                        <i class="fa fa-share"></i>
                        contact@fondation225.ci
                    </a>

                </div>
            </div>

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="font-weight-bold text-uppercase styled_title">
                        Réseaux sociaux
                    </h3>
                    <p class="font-roboto-condensed">
                        Posez vos questions via un de nos réseaux sociaux ci-dessous.
                    </p>
                    <a href="" class="btn btn-facebook" style="color: white;background-color: #3b5998;">
                        <i class="fa fa-facebook"></i>
                        FACEBOOK
                    </a>

                    <a href="" class="btn btn-twitter" style="color: white;background-color: #1DA1F2;">
                        <i class="fa fa-twitter"></i>
                        TWITTER
                    </a>
                </div>
            </div>

        </div>
        <!-- deuxième ligne -->
        <div class="row">

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="font-weight-bold text-uppercase styled_title">
                        <i class="fa fa-phone"></i>
                        Par téléphone
                    </h3>
                    <p class="font-roboto-condensed">
                        Nous restons joignable les jours ouvrables de 08h00 à 15h00.
                    </p>

                    <a href="#" class="btn btn-black" style="background-color: black; color: white;">
                        (+226) 51 54 12 12
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="font-weight-bold text-uppercase styled_title">
                        Bureaux Fondation 225
                    </h3>
                    <p class="font-roboto-condensed">
                        Du lundi au vendredi de 08h à 15h30, le samedi de 09h à 12h uniquement dans nos locaux à <strong>Ouagadougou (Burkina Faso)</strong>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!--  -->

@endsection