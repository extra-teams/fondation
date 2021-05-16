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
    <form action='' class='form'>
            <p class='field required half'>
              <label class='label' for='nom'>Nom</label>
              <input class='text-input' id='nom' name='nom' required type='nom'>
            </p>
            <p class='field half'>
              <label class='label' for='phone'>Prenoms</label>
              <input class='text-input' id='prenom' name='prenom' type='prenom'>
            </p>
            <p class='field'>
              <label class='label' for='select'>Pays</label>
              <select class='select' id='select'>
                <option selected value=''></option>
                <option value='ceo'>ivoire ci</option>
                <option value='front-end'>Ghana</option>
                <option value='back-end'>Beninr</option>
              </select>
            </p>
            <p class='field half required error'>
              <label class='label' for='login'>Adresse</label>
              <input class='text-input' id='login' name='login' required type='text' value='mican'>
            </p>
            <p class='field half required'>
              <label class='label' for='password'>Telephone (avec l'indicatif)</label>
              <input class='text-input' id='password' name='password' required type='password'>
            </p>
            
            <p class='field half required'>
              <label class='label' for='email'>Email</label>
              <input class='text-input' id='email' name='email' required type='email'>
            </p>
            <p class='field half required'>
              <label class='label' for='site'>Site Web</label>
              <input class='text-input' id='site' name='site' placeholder="fondation225.org" required type='text'>
            </p>
            <p class='field half'>
              <label class='label' for='select'>Secteur d'activité</label>
              <select class='select' id='select'>
                <option selected value=''></option>
                <option value='ceo'>technologie</option>
                <option value='front-end'>finance</option>
              </select>
            </p>
            <p class='field half'>
              <label class='label required' for='name'>Nom de l'entreprise</label>
              <input class='text-input' id='name' name='name' required type='text' value='Use Tab'>
            </p>

            <p class='field half'>
              <label class='label required' for='name'>Profession</label>
              <input class='text-input' id='name' name='name' required type='text' >
            </p>
            <p class='field half'>
              <label class='label required' for='name'>Titre</label>
              <input class='text-input' id='name' name='name' required type='text'>
            </p>
            <p class='field half'>
              <label class='label required' for='name'>Nombre de representation en afrique</label>
              <input class='text-input' id='name' name='name' required type='text' >
            </p>
            <p class='field half'>
              <label class='label required' for='name'>NOMbre D'EMPLOYES AFRICAIN</label>
              <input class='text-input' id='name' name='name' required type='text'>
            </p>
            <p class='field half'>
              <label class='label required' for='name'>Nombre d'employé Africain
               
              </label>
              <input class='text-input' id='name' name='name' required type='text'>
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
            </div> --}}
            <p class='field'>
              <label class='label' for='about'>IMPACT DE VOS ACTIVITES SUR LE DEVELOPPEMENT</label>
              <textarea class='textarea' cols='50' id='about' name='about' rows='3'></textarea>
            </p>
            <p class='field'>
              <label class='label' for='about'>PALMARES DE VOTRE ENTREPRISE</label>
              <textarea class='textarea' cols='50' id='about' name='about' rows='2'></textarea>
            </p>
            
            <p class='field half'>
              <input class='button' type='submit' value='Envoyer'>
            </p>
    </form>
  </div>
          
    

@endsection