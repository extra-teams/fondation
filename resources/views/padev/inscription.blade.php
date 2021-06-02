@extends('layouts.app')
@section('title','inscription padev')
@section('extra-css')
<link rel="stylesheet" href="{{asset('css/padev.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700">
@endsection
@section('extra-js')
<script src="{{asset('js/padev.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js"></script>
@endsection
@section('content')
<div class="container-fluid  mb-5">
  <div class="bg " {{--style="background-image: url({{asset('images/padev/bg.jpg')}});"--}}>
    <div class="bg-image"></div>
    <div class="bg-text">
      <h1>INSCRIPTION PADEV</h1>
    </div>
  </div>
  <br><br><br>
  <form action='{{route('padev.traitement')}}' method="POST" class='form'>
    @csrf
    <p class='field required half'>
      <label class='label' for='nom'>Nom</label>
      <input class='text-input' id='nom' name='nom' required type='nom'>
    </p>
    <p class='field half required'>
      <label class='label' for='phone'>Prenoms</label>
      <input class='text-input' id='prenom' name='prenom' required type='prenom'>
    </p>
    <p class='field required'>
      <label class='label' for='select_country'>Pays</label>
      <select class='select' id='select_country' name="pays" required>
        <option selected value="Côte d'Ivoire">Côte d'Ivoire</option>
        <option value="Afghanistan">Afghanistan </option>
        <option value="Afrique_Centrale">Afrique Centrale </option>
        <option value="Afrique_du_Sud">Afrique du Sud </option>
        <option value="Albanie">Albanie </option>
        <option value="Algerie">Algérie </option>
        <option value="Allemagne">Allemagne </option>
        <option value="Andorre">Andorre </option>
        <option value="Angola">Angola </option>
        <option value="Anguilla">Anguilla </option>
        <option value="Arabie_Saoudite">Arabie Saoudite </option>
        <option value="Argentine">Argentine </option>
        <option value="Armenie">Armenie </option>
        <option value="Australie">Australie </option>
        <option value="Autriche">Autriche </option>
        <option value="Azerbaidjan">Azerbaidjan </option>
        
        <option value="Bahamas">Bahamas </option>
        <option value="Bangladesh">Bangladesh </option>
        <option value="Barbade">Barbade </option>
        <option value="Bahrein">Bahrein </option>
        <option value="Belgique">Belgique </option>
        <option value="Belize">Belize </option>
        <option value="Benin">Bénin </option>
        <option value="Bermudes">Bermudes </option>
        <option value="Bielorussie">Biélorussie </option>
        <option value="Bolivie">Bolivie </option>
        <option value="Botswana">Botswana </option>
        <option value="Bhoutan">Bhoutan </option>
        <option value="Boznie_Herzegovine">Boznie Herzégovine </option>
        <option value="Bresil">Brésil </option>
        <option value="Brunei">Brunei </option>
        <option value="Bulgarie">Bulgarie </option>
        <option value="Burkina_Faso">Burkina Faso </option>
        <option value="Burundi">Burundi </option>
        
        <option value="Caiman">Caïman </option>
        <option value="Cambodge">Cambodge </option>
        <option value="Cameroun">Cameroun </option>
        <option value="Canada">Canada </option>
        <option value="Canaries">Canaries </option>
        <option value="Cap_vert">Cap Vert </option>
        <option value="Chili">Chili </option>
        <option value="Chine">Chine </option>
        <option value="Chypre">Chypre </option>
        <option value="Colombie">Colombie </option>
        <option value="Comores">Colombie </option>
        <option value="Congo">Congo </option>
        <option value="Congo_democratique">Congo Démocratique </option>
        <option value="Cook">Cook </option>
        <option value="Coree_du_Nord">Corée du Nord </option>
        <option value="Coree_du_Sud">Corée du Sud </option>
        <option value="Costa_Rica">Costa Rica </option>
        <option value="Cote_d_Ivoire">Côte d’Ivoire </option>
        <option value="Croatie">Croatie </option>
        <option value="Cuba">Cuba </option>
        
        <option value="Danemark">Danemark </option>
        <option value="Djibouti">Djibouti </option>
        <option value="Dominique">Dominique </option>
        
        <option value="Egypte">Egypte </option>
        <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
        <option value="Equateur">Equateur </option>
        <option value="Erythree">Erythrée </option>
        <option value="Espagne">Espagne </option>
        <option value="Estonie">Estonie </option>
        <option value="Etats_Unis">Etats-Unis </option>
        <option value="Ethiopie">Ethiopie </option>
        
        <option value="Falkland">Falkland </option>
        <option value="Feroe">Féroé </option>
        <option value="Fidji">Fidji </option>
        <option value="Finlande">Finlande </option>
        <option value="France">France </option>
        
        <option value="Gabon">Gabon </option>
        <option value="Gambie">Gambie </option>
        <option value="Georgie">Géorgie </option>
        <option value="Ghana">Ghana </option>
        <option value="Gibraltar">Gibraltar </option>
        <option value="Grece">Grèce </option>
        <option value="Grenade">Grenade </option>
        <option value="Groenland">Groënland </option>
        <option value="Guadeloupe">Guadeloupe </option>
        <option value="Guam">Guam </option>
        <option value="Guatemala">Guatémala</option>
        <option value="Guernesey">Guernesey </option>
        <option value="Guinee">Guinée </option>
        <option value="Guinee_Bissau">Guinée Bissau </option>
        <option value="Guinee equatoriale">Guinée Equatoriale </option>
        <option value="Guyana">Guyana </option>
        <option value="Guyane_Francaise ">Guyane Francaise </option>
        
        <option value="Haiti">Haïti </option>
        <option value="Hawaii">Hawaii </option>
        <option value="Honduras">Honduras </option>
        <option value="Hong_Kong">Hong Kong </option>
        <option value="Hongrie">Hongrie </option>
        
        <option value="Inde">Inde </option>
        <option value="Indonesie">Indonésie </option>
        <option value="Iran">Iran </option>
        <option value="Iraq">Iraq </option>
        <option value="Irlande">Irlande </option>
        <option value="Islande">Islande </option>
        <option value="Israel">Israël </option>
        <option value="Italie">italie </option>
        
        <option value="Jamaique">Jamaïque </option>
        <option value="Jan Mayen">Jan Mayen </option>
        <option value="Japon">Japon </option>
        <option value="Jersey">Jersey </option>
        <option value="Jordanie">Jordanie </option>
        
        <option value="Kazakhstan">Kazakhstan </option>
        <option value="Kenya">Kenya </option>
        <option value="Kirghizstan">Kirghizistan </option>
        <option value="Kiribati">Kiribati </option>
        <option value="Koweit">Koweït </option>
        
        <option value="Laos">Laos </option>
        <option value="Lesotho">Lesotho </option>
        <option value="Lettonie">Lettonie </option>
        <option value="Liban">Liban </option>
        <option value="Liberia">Liberia </option>
        <option value="Liechtenstein">Liechtenstein </option>
        <option value="Lituanie">Lituanie </option>
        <option value="Luxembourg">Luxembourg </option>
        <option value="Lybie">Lybie </option>
        
        <option value="Macao">Macao </option>
        <option value="Macedoine">Macédoine </option>
        <option value="Madagascar">Madagascar </option>
        <option value="Madère">Madère </option>
        <option value="Malaisie">Malaisie </option>
        <option value="Malawi">Malawi </option>
        <option value="Maldives">Maldives </option>
        <option value="Mali">Mali </option>
        <option value="Malte">Malte </option>
        <option value="Man">Man </option>
        <option value="Mariannes du Nord">Mariannes du Nord </option>
        <option value="Maroc">Maroc </option>
        <option value="Marshall">Marshall </option>
        <option value="Martinique">Martinique </option>
        <option value="Maurice">Maurice </option>
        <option value="Mauritanie">Mauritanie </option>
        <option value="Mayotte">Mayotte </option>
        <option value="Mexique">Mexique </option>
        <option value="Micronesie">Micronésie </option>
        <option value="Midway">Midway </option>
        <option value="Moldavie">Moldavie </option>
        <option value="Monaco">Monaco </option>
        <option value="Mongolie">Mongolie </option>
        <option value="Montserrat">Montserrat </option>
        <option value="Mozambique">Mozambique </option>
        
        <option value="Namibie">Namibie </option>
        <option value="Nauru">Nauru </option>
        <option value="Nepal">Nepal </option>
        <option value="Nicaragua">Nicaragua </option>
        <option value="Niger">Niger </option>
        <option value="Nigeria">Nigéria </option>
        <option value="Niue">Niue </option>
        <option value="Norfolk">Norfolk </option>
        <option value="Norvege">Norvège </option>
        <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
        <option value="Nouvelle_Zelande">Nouvelle Zélande </option>
        
        <option value="Oman">Oman </option>
        <option value="Ouganda">Ouganda </option>
        <option value="Ouzbekistan">Ouzbékistan </option>
        
        <option value="Pakistan">Pakistan </option>
        <option value="Palau">Palau </option>
        <option value="Palestine">Palestine </option>
        <option value="Panama">Panama </option>
        <option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée</option>
        <option value="Paraguay">Paraguay </option>
        <option value="Pays_Bas">Pays Bas </option>
        <option value="Perou">Perou </option>
        <option value="Philippines">Philippines </option>
        <option value="Pologne">Pologne </option>
        <option value="Polynesie">Polynésie </option>
        <option value="Porto_Rico">Porto Rico </option>
        <option value="Portugal">Portugal </option>
        
        <option value="Qatar">Qatar </option>
        
        <option value="Republique_Dominicaine">République Dominicaine </option>
        <option value="Republique_Tcheque">République Tchèque </option>
        <option value="Reunion">Réunion </option>
        <option value="Roumanie">Roumanie </option>
        <option value="Royaume_Uni">Royaume Uni </option>
        <option value="Russie">Russie </option>
        <option value="Rwanda">Rwanda </option>
        
        <option value="Sahara Occidental">Sahara Occidental </option>
        <option value="Sainte_Lucie">Sainte-Lucie </option>
        <option value="Saint_Marin">Saint-Marin </option>
        <option value="Salomon">Salomon </option>
        <option value="Salvador">Salvador </option>
        <option value="Samoa_Occidentales">Samoa Occidentales</option>
        <option value="Samoa_Americaine">Samoa Américaine </option>
        <option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>
        <option value="Senegal">Sénégal </option>
        <option value="Seychelles">Seychelles </option>
        <option value="Sierra Leone">Sierra Léone </option>
        <option value="Singapour">Singapour </option>
        <option value="Slovaquie">Slovaquie </option>
        <option value="Slovenie">Slovénie</option>
        <option value="Somalie">Somalie </option>
        <option value="Soudan">Soudan </option>
        <option value="Sri_Lanka">Sri Lanka </option>
        <option value="Suede">Suède </option>
        <option value="Suisse">Suisse </option>
        <option value="Surinam">Surinam </option>
        <option value="Swaziland">Swaziland </option>
        <option value="Syrie">Syrie </option>
        
        <option value="Tadjikistan">Tadjikistan </option>
        <option value="Taiwan">Taiwan </option>
        <option value="Tonga">Tonga </option>
        <option value="Tanzanie">Tanzanie </option>
        <option value="Tchad">Tchad </option>
        <option value="Thailande">Thailande </option>
        <option value="Tibet">Tibet </option>
        <option value="Timor_Oriental">Timor Oriental </option>
        <option value="Togo">Togo </option>
        <option value="Trinite_et_Tobago">Trinite et Tobago </option>
        <option value="Tristan da cunha">Tristan de cuncha </option>
        <option value="Tunisie">Tunisie </option>
        <option value="Turkmenistan">Turmenistan </option>
        <option value="Turquie">Turquie </option>
        
        <option value="Ukraine">Ukraine </option>
        <option value="Uruguay">Uruguay </option>
        
        <option value="Vanuatu">Vanuatu </option>
        <option value="Vatican">Vatican </option>
        <option value="Venezuela">Vénézuela </option>
        <option value="Vierges_Americaines">Vierges Américaines </option>
        <option value="Vierges_Britanniques">Vierges Britanniques </option>
        <option value="Vietnam">Vietnam </option>
        
        <option value="Wake">Wake </option>
        <option value="Wallis et Futuma">Wallis et Futuma </option>
        
        <option value="Yemen">Yemen </option>
        <option value="Yougoslavie">Yougoslavie </option>
        
        <option value="Zambie">Zambie </option>
        <option value="Zimbabwe">Zimbabwe </option>
      </select>
    </p>
    <p class='field half required'>
      <label class='label' for='tel'>Telephone</label>
      <input class='text-input' id='tel' name='telephone' required>
    </p>
    <p class='field half required '>
      {{-- <p class='field half required error'> --}}
      <label class='label' for='login'>Adresse</label>
      <input class='text-input' id='login' name='adresse' required type='text'>
    </p>

    <p class='field half required'>
      <label class='label' for='email'>Email</label>
      <input class='text-input' id='email' name='email' required type='email'>
    </p>
    <p class='field half'>
      <label class='label' for='site'>Site Web</label>
      <input class='text-input' id='site' name='site' placeholder="fondation225.org" type='text'>
    </p>
    <p class='field half required'>
      <label class='label required' for='select'>Secteur d'activité</label>
      <select class='select' id='select' name="secteur" required>
        <option selected value=''></option>
        <option value='ceo'>technologie</option>
        <option value='front-end'>finance</option>
      </select>
    </p>
    <p class='field half required'>
      <label class='label required' for='name'>Nom de l'entreprise</label>
      <input class='text-input' id='name' name='nom_entreprise' required type='text'>
    </p>

    <p class='field half required'>
      <label class='label required' for='name'>Profession</label>
      <input class='text-input' id='name' name='profession' required type='text'>
    </p>
    <p class='field half'>
      <label class='label required' for='name'>Titre</label>
      <input class='text-input' id='name' name='titre' required type='text'>
    </p>
    
    <p class='field half'>
      <label class='label required' for='name'>Nombre d'employés Africain</label>
      <input class='text-input' id='name' name='nbre_employe' required type='number'>
    </p>
    <p class='field half'>
      <label class='label required' for='name'>Nombre de participant</label>
      <input class='text-input' id='name' name='nbre_participant' required type='number'>
    </p>
    <p class='field half'>
      <label class='label required' for='name'>Nombre de representation en afrique</label>
      <input class='text-input' id='name' name='nbre_representation' required type='number'>
    </p> 
    {{-- <div class='field'>
              <label class='label'>Sport?</label>
              <ul class='checkboxes'>
                <li class='checkbox'>
                  <input class='checkbox-input' id='choice-0' name='choice' type='checkbox' value='0'>
                  <label class='checkbox-label' for='choice-0'>Football</label>
                </li>
                <li class='checkbox'>
                  <input class='checkbox-input' id='choice-1' name='choice' type='checkbox' value='1'>
                  <label class='checkbox-label' for='choice-1'>Basketball</label>
                </li>
                <li class='checkbox'>
                  <input class='checkbox-input' id='choice-2' name='choice' type='checkbox' value='2'>
                  <label class='checkbox-label' for='choice-2'>Volleyball</label>
                </li>
                <li class='checkbox'>
                  <input class='checkbox-input' id='choice-3' name='choice' type='checkbox' value='3'>
                  <label class='checkbox-label' for='choice-3'>Golf</label>
                </li>
                <li class='checkbox'>
                  <input class='checkbox-input' id='choice-4' name='choice' type='checkbox' value='4'>
                  <label class='checkbox-label' for='choice-4'>Swimming</label>
                </li>
              </ul>
            </div>
            <div class='field'>
              <label class='label'>Favourite JS framework</label>
              <ul class='options'>
                <li class='option'>
                  <input class='option-input' id='option-0' name='option' type='radio' value='0'>
                  <label class='option-label' for='option-0'>React</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-1' name='option' type='radio' value='1'>
                  <label class='option-label' for='option-1'>Vue</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-2' name='option' type='radio' value='2'>
                  <label class='option-label' for='option-2'>Angular</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-3' name='option' type='radio' value='3'>
                  <label class='option-label' for='option-3'>Riot</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-4' name='option' type='radio' value='4'>
                  <label class='option-label' for='option-4'>Polymer</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-5' name='option' type='radio' value='5'>
                  <label class='option-label' for='option-5'>Ember</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-6' name='option' type='radio' value='6'>
                  <label class='option-label' for='option-6'>Meteor</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-7' name='option' type='radio' value='7'>
                  <label class='option-label' for='option-7'>Knockout</label>
                </li>
              </ul>
            </div>  --}}
            <p class='field'>
              <label class='label required' for='impact'>IMPACT DE VOS ACTIVITES SUR LE DEVELOPPEMENT</label>
              <textarea class='textarea' cols='50' id='impact' name='impact' rows='3' required></textarea>
            </p>
            <p class='field'>
              <label class='label' for='palmares'>PALMARES DE VOTRE ENTREPRISE</label>
              <textarea class='textarea' cols='50' id='palmares' name='palmares' rows='2'></textarea>
            </p>
            <div class='field required'>
              <label class='label'>Statut</label>
              <ul class='options'>
                <li class='option'>
                  <input class='option-input' id='option-0' name='statut' type='radio' value='Je suis lauréat'>
                      <label class='option-label' for='option-0'>Je suis lauréat</label>
                </li>
                <li class='option'>
                  <input class='option-input' id='option-1' name='statut' type='radio' value='Je suis participant libre'>
                      <label class='option-label' for='option-1'>Je suis participant libre</label>
                </li>
               
               
                {{-- <li class='checkbox'>
                  <input class='checkbox-input' id='choice-2' name='choice' type='checkbox' value='2'>
                  <label class='checkbox-label' for='choice-2'>Recevoir les conditions de <br>participation</label>
                </li> --}}
              </ul>
            </div>
            <p class='field half'>
              <input class='button' type='submit' value='Envoyer'>
            </p>
    </form>
  </div>
          
    

@endsection