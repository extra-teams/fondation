<!-- header -->
<header>
    <!-- header top -->
    <div class="header-top">
        <!-- left -->
        <div class="header-top-left">
            <!-- icon -->
            <span id="open-menu">
                <i class="fas fa-bars"></i>
            </span>
            <a href="{{url('/')}}"><img src="{{asset("images/fondation.jpeg")}}" alt=""></a>
        </div>
        <!-- center -->
       
        <div class="header-top-center">
                <input type="text" name="q" placeholder="saisir une recherche">
            <button type="submit"><i class="fa fa-search"></i></button>
            
        </div>
       
        </form>
        <!-- right -->
        <div class="header-top-right">
            <!-- langue -->
            <div class="header-top-language">
                <span><i class="fas fa-globe"></i></span>
                <span><a class="active" href="{{url('locale/fr')}}">FR</a></span>
                <span>/</span>
                <span><a href="{{url('locale/en')}}">EN</a></span>
            </div>
            <!-- icone search bar -->
            <span class="header-top-searhmobile">
                <i class="fa fa-search"></i>
            </span>
            <!-- login -->
            <div class="header-top-user">
                <div class="dropdown">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                        <i class="arrow"></i>
                    </a>
                    @if(!Auth::check())
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('login.index')}}">{{__("header.sign_in")}}</a>
                            <a class="dropdown-item" href="{{url('/register')}}">{{__("header.sign_up")}}</a>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('client.index')}}">mon compte</a>
                            <a class="dropdown-item" href="{{route('client.commande')}}">mes commandes</a>
                            <a class="dropdown-item" href="{{route('client.logout')}}">deconnexion</a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- carts -->
            <div class="header-top-carts">
                <a href="{{route('cart.index')}}" class="btn-card">
                    <i class="fa fa-cart-plus"></i>
                    <span class="total">{{Cart::count()}}</span>
                </a>
            </div>
        </div>
    </div>
    <!-- bottom -->
    <div class="row header-bottom d-none d-lg-block">
        <ul class="list-unstyled">
            <li><a href="{{route('accueil')}}">{{__("header.home")}}</a></li>
            <li><a href="{{route('home.motdupresident')}}">{{__("header.president_word")}}</a></li>
            <li><a href="{{route('accueil')}}">{{__("header.news")}}</a></li>
            <li><a href="{{url('produits')}}">{{__("header.shop")}}</a></li>
            <li><a href="{{route('padev.index')}}">Padev</a></li>
            <li><a href="{{route('contact.index')}}">{{__("header.contact_us")}}</a></li>
        </ul>
    </div>
</header>

<!-- sidebar mobile -->
@include('layouts.partial.sidebar')