<!-- sidebar mobile -->
<div class="sidebar-mobile" style="display: none;">
    <span class="sidebar-close" id="close-menu"></span>
    <span class="sidebar-logo">
        <img src="{{asset("images/fondation.jpeg")}}" alt="logo_fondation225">
    </span>
    <!-- premier tab -->
    <ul class="sidebar-items">
        <li><a href="{{route("accueil")}}">{{__("sidebar.accueil")}}</a></li>
        <li><a href="{{route("home.motdupresident")}}">{{__("sidebar.mot")}}</a></li>
        <li><a href="{{route("accueil")}}">{{__("sidebar.actu")}}</a></li>
        <li><a href="{{route("produits.index")}}">{{__("sidebar.boutique")}}</a></li>
        <li><a href="{{route("padev.index")}}">PADEV</a></li>
        <li><a href="{{route("contact.index")}}">{{__("sidebar.contact")}}</a></li>
    </ul>
</div>