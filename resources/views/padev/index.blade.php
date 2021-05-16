@extends('layouts.app')
@section('title','padev')
@section('content')
<style>
.bg{
  height: 70vh;
  background-size: cover;
}
.bg-m{
  height: 120vh;
  background-size: cover;
}
.tt{
  color: white;
  font-size: 65px
}
.titre{
    width: 80%;
}
.bg-image {
  /* The image used */
  background-image: url("images/padev/bg.jpg");

  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  filter: brightness(25%);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text2 {
  /* background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4); Black  */
  color: white;
  font-weight: bold;
  /* border: 3px solid #f1f1f1; */
  position: absolute;
  top: 30%;
  /* left: 50%;
  transform: translate(-50%, -50%); */
  z-index: 2;
  width: 90%;
  /* padding: 20px; */
  text-align: center;
  font-family: 'Rubik', sans-serif;
}
/* Position text in the middle of the page/image */
.bg-text {
  /* background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4); Black  */
  color: white;
  font-weight: bold;
  /* border: 3px solid #f1f1f1; */
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

</style>
<div class="container-fluid  mb-5">

    <div class="bg d-none d-lg-block">
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
    <div class="bg-m d-block d-lg-none">
      <div class="bg-image"></div>
      <div class="d-block d-lg-none bg-text2">
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
  <div class="inscription ">
    <div class="row">
      <div class="col-6">
        <img src="{{asset('images/padev/inscription-padev.jpeg')}}" height="100" alt="">
      </div>
      <div class="col-6">
        <a href=""><button class="btn btn-warning w-100">INSCRIPTION</button></a>
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