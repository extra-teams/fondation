<!-- header -->
<header>
    <!-- header top -->
    <div class="header-top">
        <!-- left -->
        <div class="header-top-left">
            <!-- pour md et plus -->
            <span id="open-menud" class="navigation-btn d-none d-md-block">
                menu
            </span>
            <!-- pour mobile -->
            <span id="open-menum" class="navigation-btn d-md-none">
                <i class="fa fa-bars"></i>
            </span>
            <!-- social -->
            <div class="social">
                <span class="text-center">nous suivre</span>
                <div class="social-ul">
                    <a class="socials-item" href="#"> <i class="fab fa-facebook"></i> </a>
                    <a class="socials-item" href="#"> <i class="fab fa-twitter"></i> </a>
                    <a class="socials-item" href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
        </div>
        <!-- searchbar -->
        <div class="searhbar hidden">
            <div class="close" id="hideSearchBar">
                <span class="text">x</span>
            </div>
            <div class="input">
                <input type="text" placeholder="recherche">
                <button>rechercher</button>
            </div>
        </div>
        <!-- center -->
        <div class="header-top-center">
            <a href="{{url('/')}}"><img src="{{asset("images/fondation.jpeg")}}" alt=""></a>
        </div>
        <!-- right -->
        <div class="header-top-right">
            <!-- langue -->
            <div class="header-top-language">
                <span><i class="fas fa-globe"></i></span>
                <span><a class="{{ (app()->getLocale() == 'fr') ? 'active' : '' }}"
                         href="{{url('locale/fr')}}">FR</a></span>
                <span></span>
                <span><a class="{{ (app()->getLocale() == 'en') ? 'active' : '' }}"
                         href="{{url('locale/en')}}">EN</a></span>
            </div>
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
            <!-- searchbar -->
            <div class="header-top-search" id="showSearchBar">
                <div class="bar">
                    <button type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- sidebar mobile -->
@include('layouts.partial.sidebar')