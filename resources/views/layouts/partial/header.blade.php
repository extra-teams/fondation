{{-- <div class="text-top container-fluid p-0">
    @php $liens= DB::table('settings')->get(); @endphp
    <div class="bg-dark">
        <p class="text-white text-center p-1 p-lg-2">besoin d'aide pour commander ? <br class="d-sm-none"> Appelez le :
            <span class="text-orange"> <i class="fas fa-phone"></i> {{$liens[4]->value}}</span>
        </p>
    </div>
</div> --}}

<div class="container-fluid p-0 mt-3">
    <!-- header -->
    <div class="header">
        <div class="row align-items-center">
            <!-- formulaire de recherche -->
            <div class="col-lg-3 d-none d-lg-block">
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
            <!--  -->

            <!-- logo -->
            <div class="logo justify-content-center col-7">
                <a href="#">
                    <span class="order-0 order-lg-1 d-lg-none" id="open-menu"><i class="fas fa-bars"></i></span>
                    <img src="{{asset('images/fondation.jpeg')}}" onclick="window.location.href='/'"
                         class="img-fluid order-1 order-lg-0" alt="">
                </a>
            </div>
            
            <div class="header-right order-2 order-lg-3 col-2 text-right mt-3">
                <div class="d-inline-flex">
                    <ul class="d-flex align-items-center">
                        @if (!auth()->check())
                            <li class="col">
                                <div class="dropdown">
                                    <a href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <i class="arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('login.index')}}">se connecter</a>
                                        <a class="dropdown-item" href="{{url('/register')}}">créer un compte</a>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="col">
                                <div class="dropdown">
                                    <a href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <i class="arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{url('/info')}}">mes informations</a>
                                        <a class="dropdown-item" href="{{url('/mes-commandes')}}">mes commandes</a>
                                        <a class="dropdown-item" href="{{url('/changer-motdepasse')}}">changer mot de passe</a>
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
            
        <div class="row header-bottom d-none d-lg-block bg-warning mt-4 pt-1">
            <ul class="list-unstyled">
                {{-- <li><a href="#">nouveautés</a></li> --}}
                {{--@foreach (DB::table('categories')->take(6)->get() as $item=>$sous)
                    <li><a href="{{url('/produits?categorie=yes&'.$sous->code.'=on')}}">{{$sous->nom}}</a></li>
                @endforeach--}}

                <li><a href="{{route('accueil')}}" style="font-size:17px">Accueil</a></li>
                <li><a href="{{url('produits')}}" style="font-size:17px">Boutique</a></li>
                <li><a href="{{route('padev.index')}}" style="font-size:17px">Padev</a></li>
                <li><a href="{{route('contact.index')}}" style="font-size:17px">Contactez nous</a></li>
                
                    
                </div>
            </ul>
        </div>
    </div>
    

<!-- sidebar mobile -->
    @include('layouts.partial.sidebar')
</div>
