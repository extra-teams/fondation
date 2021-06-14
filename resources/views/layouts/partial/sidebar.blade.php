<!-- sidebar mobile -->
<div class="sidebar-mobile" style="display: none;">
    {{-- @php  $cate1= DB::table('categories')->whereIn('code',['mode-homme'])->first(); @endphp
    @php $cate2= DB::table('categories')->whereIn('code',['mode-femme'])->first(); @endphp --}}

    <span class="sidebar-close" id="close-menu"> </span>
    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
        <li class="nav-item w-50 text-center" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">MENU
               {{-- @php  echo $cate1->nom; @endphp --}}
            </a>
        </li>
        {{-- <li class="nav-item text-center w-50" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
               aria-controls="profile" aria-selected="false">@php  echo $cate2->nom; @endphp</a>
        </li> --}}
    </ul>
    <div class="tab-content" id="myTabContent">
        <!-- premier tab -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <ul class="sidebar-items list-unstyled">
                {{-- @foreach (DB::table('souscategories')->where('code_cat',$cate1->code)->get() as $item=>$sous)
                    <li style="background-image: url('{{asset($sous->image)}}');">
                        <a href="{{url('/produits?categorie='.$cate1->code.'&souscategorie='.$sous->code)}}">
                            <p>{{$sous->nom}}</p>
                        </a>
                    </li>
                @endforeach --}}
                <li>
                    <a href="#">
                        <p>ACCUEIL</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>BOUTIQUE</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>PADEV</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>CONTACTEZ-NOUS</p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- deuxieme tab -->
        {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="sidebar-items list-unstyled">
                @foreach (DB::table('souscategories')->where('code_cat',$cate2->code)->get() as $item=>$sous)
                    <li style="background-image: url('{{asset($sous->image)}}');">
                        <a href="{{url('/produits?categorie='.$cate2->code.'&souscategorie='.$sous->code)}}">
                            <p>{{$sous->nom}}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div> --}}
    </div>

</div>