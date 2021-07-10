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
                        <h2 class="styled_title text-white">{{__('contactez.nos_contact')}}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- première ligne -->
        <div class="row mb-5">
            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="styled_title">
                        {{__('contactez.en_ligne')}}
                    </h3>
                    <p class="font-roboto-condensed">
                        {{__('contactez.en_ligne_desc')}}
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
                        {{__('contactez.reseau')}}
                    </h3>
                    <p class="font-roboto-condensed">
                        {{__('contactez.reseau_desc')}}
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
                        {{__('contactez.telephone')}}
                    </h3>
                    <p class="font-roboto-condensed">
                        {{__('contactez.telephone_desc')}}
                    </p>

                    <a href="#" class="btn bg-orange">
                        (+226) 51 54 12 12
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
                <div class="pl-3 text-left">
                    <h3 class="styled_title">
                        {{__('contactez.bureau')}}
                    </h3>
                    <p class="font-roboto-condensed">
                        {{__('contactez.bureau_desc1')}}, <br>{{__('contactez.bureau_desc2')}}
                        <strong>Ouagadougou (Burkina Faso)</strong>
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection