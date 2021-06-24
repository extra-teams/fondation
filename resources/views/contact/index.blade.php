@extends('layouts.app')
@section('title','contactez-nous - Fondation225')
@section('content')
    <!-- content -->
    <!-- breadcrumb -->
    <div class="container-fluid p-0" id="contact">
        <div class="callcentre">
            <!-- breadcrumb -->
            <div class="header">
                <div class="row">
                    <div class="col-12">
                        <h2 class="styled_title text-white">Nos contacts</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- première ligne -->
        <div class="row mb-5">
            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="styled_title">
                        En ligne
                    </h3>
                    <p class="font-roboto-condensed">
                        Vous souhaitez signaler une panne, vous pouvez nous faire part de votre motif de réclamation
                        directement en prenant contact avec un conseiller en nous envoyant un mail
                        à l'adresse mail suivante :
                    </p>
                    <a href="mailto:contact@bms.ci" class="btn bg-orange">
                        <i class="fa fa-share"></i>
                        contact@fondation225.ci
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="styled_title">
                        Réseaux sociaux
                    </h3>
                    <p class="font-roboto-condensed">
                        Posez vos questions via un de nos réseaux sociaux ci-dessous.
                    </p>
                    <a href="#" class="btn bg-facebook text-white">
                        <i class="fab fa-facebook"></i>
                        FACEBOOK
                    </a>

                    <a href="#" class="btn bg-twitter text-white">
                        <i class="fab fa-twitter"></i>
                        TWITTER
                    </a>
                </div>
            </div>
        </div>

        <!-- deuxième ligne -->
        <div class="row">
            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="styled_title">
                        <i class="fa fa-phone"></i>
                        Par téléphone
                    </h3>
                    <p class="font-roboto-condensed">
                        Nous restons joignable les jours ouvrables de 08h00 à 15h00.
                    </p>

                    <a href="#" class="btn bg-orange">
                        (+226) 51 54 12 12
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="styled_title">
                        Bureaux Fondation 225
                    </h3>
                    <p class="font-roboto-condensed">
                        Du lundi au vendredi de 08h à 15h30, <br> Le samedi de 09h à 12h uniquement dans nos locaux à
                        <strong>Ouagadougou (Burkina Faso)</strong>
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection