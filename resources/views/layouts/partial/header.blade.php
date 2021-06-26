<div class="container-fluid p-0 mt-3">
    <!-- header -->
    <div class="header">
        <div class="row header-top align-items-center">
            <!-- icon -->
            <span class="col-1 order-0  d-lg-none" id="open-menu">
                <i class="fas fa-bars"></i>
            </span>
            <!-- logo -->
            <a class="col-4 col-lg-4 order-1 order-lg-0 " href="{{url('/')}}">
                <img src="{{asset('images/fondation.jpeg')}}" class="logo" alt="fondation225 logo">
            </a>
            <!-- formulaire de recherche -->
            <div class="col-lg-5 order-lg-1 d-none d-lg-block">
                <form action="{{route('produits.recherche')}}" class="search">
                    <div class="input-group">
                        <input name="q" value="{{request()->q ?? ''}}" type="text" placeholder="rechercher un article">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- panier -->
            <div class="col-4 col-md-3 order-2 header-right  order-lg-3  text-right">
                <div class="d-inline-flex">
                    <ul class="d-flex align-items-center">
                        <li class="col">
                            <div class="d-flex">
                                <a href="{{url('locale/fr')}}" class="mr-2">FR</a>
                                <a href="{{url('locale/en')}}">EN</a>
                            </div>
                        </li>
                        @if (!auth()->check())
                            <li class="col">
                                <div class="dropdown">
                                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <i class="arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item"
                                           href="{{route('login.index')}}">{{__("header.sign_in")}}</a>
                                        <a class="dropdown-item"
                                           href="{{url('/register')}}">{{__("header.sign_up")}}</a>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="col">
                                <div class="dropdown">
                                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <span>FR</span>
                                        <span>EN</span>
                                        <i class="fas fa-user-circle"></i>
                                        <i class="arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{url('/info')}}">mes informations</a>
                                        <a class="dropdown-item" href="{{url('/mes-commandes')}}">mes commandes</a>
                                        <a class="dropdown-item" href="{{url('/changer-motdepasse')}}">changer mot de
                                            passe</a>
                                        <a class="dropdown-item" href="{{url('/deconnexion')}}">deconnexion</a>
                                    </div>
                                </div>
                            </li>
                        @endif
                        <li class="col">
                            <a href="{{route('cart.index')}}" class="btn-card">
                                <i class="fa fa-cart-plus"></i>
                                <span class="total">{{Cart::count()}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row header-bottom d-none d-lg-block mt-4">
            <ul class="list-unstyled">
                <li><a href="{{route('accueil')}}">{{__("header.home")}}</a></li>
                <li><a href="{{route('accueil')}}">{{__("header.president_word")}}</a></li>
                <li><a href="{{route('accueil')}}">{{__("header.news")}}</a></li>
                <li><a href="{{url('produits')}}">{{__("header.shop")}}</a></li>
                <li><a href="{{route('padev.index')}}">Padev</a></li>
                <li><a href="{{route('contact.index')}}">{{__("header.contact_us")}}</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- sidebar mobile -->
@include('layouts.partial.sidebar')
</div>
