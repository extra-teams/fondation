<div class="container-fluid footer">
    <div class="row">
        <div class="col-lg-3 col-12">
            <h6 class="text-uppercase">Aide & Information</h6>
            <ul class="list-unstyled">
                <li><a href="{{url('/contact')}}">contacts</a></li>
                <li><a href="{{route('politiqueretour')}}">politique de retour</a></li>
            </ul>
        </div>

        <div class="col-lg-3 col-12">
            <h6 class="text-uppercase">A PROPOS</h6>
            <ul class="list-unstyled">
                <li><a href="{{route('apropos')}}">qui sommes-nous ?</a></li>
                <li><a href="{{route('confidentialité')}}">politique de confidentialité</a></li>
                <li><a href="{{route('conditions')}}">conditions générales d'utilisation</a></li>
            </ul>
        </div>


        <div class="col-lg-3 col-12">
            <h6 class="text-uppercase">mon compte</h6>
            <ul class="list-unstyled">
                <li><a href="{{url('/info')}}">mes informations</a></li>
                <li><a href="{{url('/mes-commandes')}}">mes commandes</a></li>
            </ul>
        </div>

        <div class="col-lg-3 col-12">
            <h6 class="text-uppercase">réseaux sociaux</h6>
            @php $liens= DB::table('settings')->get(); @endphp
            <ul class="list-unstyled">
                <li><a href="{{$liens[0]->value}}">facebook</a></li>
                <li><a href="{{$liens[1]->value}}">twitter</a></li>
                <li><a href="{{$liens[2]->value}}">instagram</a></li>
            </ul>
        </div>

    </div>
</div>