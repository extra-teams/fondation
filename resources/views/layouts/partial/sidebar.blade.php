<!-- sidebar -->
<div class="sidebar-mobile hidden">
    <!-- top -->
    <div class="sidebar-top">
        <div class="sidebar-logo">
            <img src="{{asset("images/fondation.jpeg")}}" alt="logo_fondation225">
        </div>
        <span class="sidebar-close" id="close-menu">
             <div class="icon">
                 <span class="text">x</span>
             </div>
        </span>
    </div>
    <!-- premier tab -->
    <ul class="sidebar-items">
        <li><a class="{{  request()->routeIs('accueil') ? 'active' : '' }}"
               href="{{route("accueil")}}">{{__("sidebar.accueil")}}</a></li>
        <li><a class="{{ request()->routeIs('home.motdupresident')  ? 'active' : '' }}"
               href="{{route("home.motdupresident")}}">{{__("sidebar.mot")}}</a></li>
        <li><a class="{{ request()->routeIs('actualite.index')  ? 'active' : '' }}"
               href="{{route("actualite.index")}}">{{__("sidebar.actu")}}</a></li>
        <li><a class="{{ request()->routeIs('produits.index')  ? 'active' : '' }}"
               href="{{route("produits.index")}}">{{__("sidebar.boutique")}}</a></li>
        <li><a class="{{ request()->routeIs('padev.index')  ? 'active' : '' }}"
               href="{{route("padev.index")}}">PADEV</a>
        </li>
        <li><a class="{{ request()->routeIs('contact.index')  ? 'active' : '' }}"
               href="{{route("contact.index")}}">{{__("sidebar.contact")}}</a></li>
    </ul>
    <!-- bottom -->
    <div class="sidebar-bottom">
        <div class="social-ul">
            <a class="socials-item" href="#"> <i class="fab fa-facebook"></i> </a>
            <a class="socials-item" href="#"> <i class="fab fa-twitter"></i> </a>
            <a class="socials-item" href="#"> <i class="fab fa-linkedin"></i> </a>
        </div>
    </div>
</div>