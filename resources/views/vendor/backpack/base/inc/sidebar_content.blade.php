<li class="nav-title">Production</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
                class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<li class='nav-item'><a class='nav-link' href='{{ backpack_url('clients') }}'><i class='nav-icon la la-user'></i>
        Clients</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('/v/#/commandes') }}'><i
                class="nav-icon la la-first-order"></i>&nbsp; commandes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('sliders') }}'><i class='nav-icon la la-images'></i>
        Sliders</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('articles') }}'><i class='nav-icon la la-newspaper'></i>
        Articles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tags') }}'><i class='nav-icon la la-tags'></i> Tags</a>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('images') }}'><i class='nav-icon la la-images'></i> Images</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('videos') }}'><i class='nav-icon la la-video'></i> Videos</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('partenaires') }}'><i class='nav-icon la la-support'></i> Partenaires</a></li>

<li class="nav-title">Padev</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('padev') }}'><i class='nav-icon la la-users'></i>
        Inscrits</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('padev-admin') }}'><i
                class='nav-icon la la-ad'></i> Evénement</a></li>


<li class="nav-title">Gestion des produits</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('categories') }}'><i class="las la-list"></i> Categories</a>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('produits') }}'><i class="lab la-product-hunt"></i>
        Produits</a></li>


<!-- Users, Roles, Permissions -->


@if(backpack_user()->hasRole('admin'))
    <li class="nav-title">Paramètres utilisateurs</li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i>
            <span>Users</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i>
            <span>Roles</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i>
            <span>Permissions</span></a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-keybase'></i>
            <span>Settings</span></a></li>
@endif






