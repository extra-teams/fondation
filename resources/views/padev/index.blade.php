@extends('layouts.app')
@section('title','padev')
@section('content')
<style>
.bg-image {
  background-image: url("images/padev/bg.jpg");
  filter: blur(2px);
  -webkit-filter: blur(2px);
  height: 100%;
  filter: brightness(25%);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  color: white;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align: center;
  font-family: 'Rubik', sans-serif;
}

.bg-col{
  color: white;
  font-weight: bold;
  position: absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -30%);
  z-index: 2;
  width: 70%;
  text-align: center;
}

.bg-col-m{
  color: white;
  font-weight: bold;
  position: absolute;
  top: 85%;
  left: 30%;
  transform: translate(-50%, -30%);
  z-index: 2;
  width: 70px;
  text-align: center;
}
.bg-col .bg-img img{
  width: 200px;
  height: auto;
  padding: 20px;

}
.inscription{
  /* margin-top: 1000px; */
}

.inscription img{
  width: 250px;
  height: auto;
}

.inscription a button{
  margin-top: 150px;
}

.card {
  grid-row: auto/span 1;
  grid-column: auto/span 1;
  background-color: white;
  box-shadow: 1px 3px 3px rgba(0, 10, 20, 0.06);
}
}
.card__image {
  height: 100%;
  max-height: 100%;
  width: 100%;
  display: flex;
}
.card__image img {
  padding: 60px;
  height: 100%;
  min-height: 100%;
  max-height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.card__side-by-side--m {
  height: 50%;
  width: 100%;
  display: flex;
  flex-flow: column nowrap;
}
.card__side-by-side--m img {
  min-height: auto;
}
.card__content {
  padding: 1.6rem;
}
.card--featured {
  grid-row: auto/span 3;
  grid-column: auto/span 2;
}
.padding-large--l {
  padding: 1.6rem;
}
.card-v {
  --rlist: var(--c) 0 3px, transparent 0 7px;
  --dim: 100% 50% no-repeat;
  --ang: 90deg;
  overflow: hidden;
  position: relative;
  height: var(--h);
  border-radius: 7px;
  box-shadow: 2px 2px 17px #000;
  background: repeating-linear-gradient(var(--ang-0, -45deg), var(--rlist)) var(--pos-0, 0 0)/var(--dim), repeating-linear-gradient(var(--ang-1, 45deg), var(--rlist)) var(--pos-1, 0 100%)/var(--dim), linear-gradient(var(--ang), var(--nlist));
}
.card-v:nth-child(4n+2) {
  --ang-0: 45deg;
  --ang-1: 135deg;
}
.card-v:nth-child(4n+3) {
  --ang-0: -60deg;
  --ang-1: 60deg;
}
.card-v:nth-child(4n) {
  --ang-0: -120deg;
  --ang-1: 120deg;
}
.card-v:nth-child(1) {
  --c: #e0aa0a;
  --nlist: #fcef34, #dead1f;
}
@media (max-width: 413px) {
  .card {
    min-height: 12.8rem;
  }
}
@media (min-width: 627px) {
  .card__side-by-side--m {
    flex-flow: row nowrap;
  }
  .card__side-by-side--m img {
    min-height: 50%;
  }
  .card--featured {
    grid-row: auto/span 2;
    grid-column: 1/-1;
  }
}
@media (min-width: 836px) {
  .padding-large--l {
    padding: 3.2rem;
  } 
}
@media (min-width: 992px) {
  .card__content .item{
    margin: auto;
    width: 680px;
  }
}

</style>
<div class="container-fluid  mb-5">

    <div class="bg d-none d-lg-block" style="height: 70vh;background-size: cover;">
      <div class="bg-image"></div>
      <div class="d-none d-lg-block bg-text">
        <h1>PADEV est une initiative de la fondation 225</h1>
      </div>
        {{-- <div class="d-block d-lg-none bg-text2">
          <h1>PADEV est une initiative de la fondation 225</h1>
        </div> --}}
      <div class="d-none d-lg-block bg-col">
        <div class="row">
          <div class="col-lg-3">
            <h3>Culture</h3>
            <div class="bg-img">
              <img src="{{asset('images/padev/culture.jpeg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-3">
            <h3>Développement</h3>
            <div class="bg-img">
              <img src="{{asset('images/padev/developpement.png')}}" alt="">
            </div>
          </div>
          <div class="col-lg-3">
            <h3>FORUM</h3>
            <div class="bg-img">
              <img src="{{asset('images/padev/forum.png')}}" alt="">
            </div>
          </div>
          <div class="col-3">
            <h3>Distinction</h3>
            <div class="bg-img">
              <img src="{{asset('images/padev/distinction.jpeg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-m d-block d-lg-none" style="height: 120vh;background-size: cover;">
      <div class="bg-image"></div>
      <div class="d-block d-lg-none bg-text2 font-weight-bold position-absolute text-center" style="color: white;top: 30%;z-index: 2;width: 90%;font-family: 'Rubik', sans-serif;">
        <h1>PADEV est une initiative de la fondation 225</h1>
      </div>
      <div class="d-block d-lg-none bg-col-m">
        <div class="column">
          <div class="col-5">
            <div class="mr-5">
              <h3>Culture</h3>
            </div>
            <div class="bg-i">
              <img src="{{asset('images/padev/culture.jpeg')}}" width="200px" alt="">
            </div>
          </div>
          <div class="col-5">
            <h3>Développement</h3>
            <div class="bg-i">
              <img src="{{asset('images/padev/developpement.png')}}" width="200px" alt="">
            </div>
          </div>
          {{-- <div class="col-lg-3">
            <h3>FORUM</h3>
            <div class="bg-img">
              <img src="{{asset('images/padev/forum.png')}}" alt="">
            </div>
          </div>
          <div class="col-3">
            <h3>Distinction</h3>
            <div class="bg-img">
              <img src="{{asset('images/padev/distinction.jpeg')}}" alt="">
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  
</div>

<div class="container mt-5">
  <div class='card-v card--featured'>
    <div class='card__side-by-side--m'>
      <div class='card__image'>
        <img src={{asset('images/padev/padev-1.jpeg')}}>
      </div>
      <div class='card__content padding-large--l'>
        <div class="item">
          <h2>A PROPOS DU PADEV</h2>
          <p>
            Comment faire d’une réalité le rêve d’une Afrique développée et prospère ? Comment conjurer les maux 
            que sont les guerres civiles, la violence politique, la famine, les épidémies, l’analphabétisme, 
            la pauvreté, etc. qui donnent à ce continent cette identité si peu valorisante, pour en faire une 
            terre qui fait la fierté de ses fils et filles ?<br><br>Ces questions d’une prégnante actualité, et surtout 
            les réponses à leur apporter, ont donné lieu à maintes réflexions et actions depuis les indépendances. 
            Mais alors, comment expliquer qu’après 50 ans, le désert politique, économique, social, sanitaire, 
            éducationnel, etc. aie gagné autant de terrain dans tous les pays du continent ?
          </p>
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="container mt-5">
  <div class='card-v card--featured'>
    <div class='card__side-by-side--m'>
      <div class='card__image'>
        <img src={{asset('images/padev/inscription-padev.jpeg')}}>
      </div>
      <div class='card__content padding-large--l'>
        <div class="item">
          <h2>INSCRIPTION PADEV 2021 KIGALI</h2>
          <p>Prenez part a la 16e edition du PADEV<br>Qui se tiendra a Kigali</p>
          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
          <a href="{{route('padev.page_inscription')}}"><div class='card__button bg-light text-center' style="margin: 1.6rem 0;padding: 0.8rem 1.6rem;background: none;border-radius: 2px;font-weight: bold;">Inscrivez vous</div></a>
        </div>
      </div>
    </div>
  </div>
</div>
        {{-- <div class="d-block d-lg-none bg-col-m">
          <div class="column">
            <div class="col-5" style="">
              <h3>Culture</h3>
              <div class="bg-i">
                <img src="{{asset('images/padev/culture.jpeg')}}" width="200px" alt="">
              </div>
            </div>
            <div class="col-5">
              <h3>Développement</h3>
              <div class="bg-i">
                <img src="{{asset('images/padev/developpement.png')}}" width="200px" alt="">
              </div>
            </div>
            {{-- <div class="col-lg-3">
              <h3>FORUM</h3>
              <div class="bg-img">
                <img src="{{asset('images/padev/forum.png')}}" alt="">
              </div>
            </div>
            <div class="col-3">
              <h3>Distinction</h3>
              <div class="bg-img">
                <img src="{{asset('images/padev/distinction.jpeg')}}" alt="">
              </div>
            </div>
          </div> --}}
          {{-- </div>
      </div>  
    </div>
</div> --}}


@endsection